<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;


class CustomerController extends Controller
{
    public function addcustomer(Request $request)
    {
        $request->validate( [
            'name' => 'required | string',
            'email' => 'required | string | max:1000',
            'date_of_birrth' => 'required | string',
            'points' => 'required | integer',

        ]);
        
        $customers = customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'date_of_birrth' => $request->date_of_birrth,
            'points' => $request->points,

        
        ]);
        return response()->json([
            'message' => 'customer data created successfully',
            'customers' => $customers
        ], 200);

    }



    public function display_customers()
    {
        $customer = customer::all();
        return response()->json(['success' => $customer]);

    }


    public function update_customer_ID(Request $request, $id)
    {
       
        $request->validate( [
            'name' => 'required | string',
            'email' => 'required | string | max:1000',
            'date_of_birrth' => 'required | string',
            'points' => 'required | integer',
        ]);

        $customer = customer::find($id);
        if($customer)
        {
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phoneNumber = $request->phoneNumber;
            $customer->points = $request->points;
            $customer->date_of_birrth = $request->date_of_birrth;
            
            $customer ->update();
            return response()->json(['message'=>'customer data Updated Successfully'],200);
        }
        else
        {
            return response()->json(['message'=>'No Data Found with that customer ID'],404);
        }
      
    }



    public function searchcustomer(Request $request)
    {
        $request->validate([
            'data' => 'required'
        ]);
    
        $response = DB::table('customers')->where('name', $request->data)->
                                    orWhere('email', $request->email)->
                                    orWhere('phoneNumber', $request->phoneNumber)->get();
        if($response){
            return response()->json(['success' => $response],201);
        }
        else{
           return response()->json(['message'=>'No customer Found with the entered Value'],401);
        }
    }


    public function sortbypoints_lowtoHigh(){
        $customer = customer::select('*')->orderBy("points", "asc")->get();
        
        if($customer){
            return response()->json(['success' => $customer],201);
        }
        else{
           return response()->json(['message'=>'No customer data Found to Display'],401);
        }
    }

    public function sortbypoints_HighToLow(){
        $customer = customer::select('*')->orderBy("points", "desc")->get();
        if($customer){
            return response()->json(['success' => $customer],201);
        }
        else{
           return response()->json(['message'=>'No customer data Found to Display'],401);
        }
    }
}
