<a href= "/update"> <button>Update</button> </a> <br> 

<a href= "{{url('/display_customers')}}"> <button type ="submit" >Display</button>   </a> <br>
<a href= "{{url('/update_customer_ID/{id}')}}"> <button type ="submit" >Edit</button>    </a> <br>



<table border="1"> 
    <tr>
        <td> Name </td>
        <td> Email </td>
        <td> MobileNumber </td>
        <td> DateOfBirth </td>
    </tr>

    @foreach($details as $detail)
    <tr>
        <td> {{$detail ['Name']}} </td>
        <td> {{$detail ['Email']}} </td>
        <td> {{$detail ['MobileNumber']}} </td>
        <td> {{$detail ['DateOfBirth']}} </td>

    </tr>
    @endforeach
</table>