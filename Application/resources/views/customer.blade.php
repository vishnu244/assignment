<form action="/customer" method = "post">
@csrf
  <div >
    <label >name:</label>
    <input type="text" name = "name" required> <br><br>
  </div>
  <div >
    <label >Email address:</label>
    <input type="email" name = "email" required> <br><br>
  </div>
  
  <div >
    <label >Mobile Number:</label>
    <input type="num" name = "phoneNumber" required> <br><br>
  </div>
  
  <div >
    <label for="dob">Date Of Birth:</label>
    <input type="num" name = "date_of_birrth" required> <br><br>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    <script type="text/javascript">  
        $('.date').datepicker({    
        format: dd-mm-yyyy'  
        });    
    </script>  <br><br> -->
  </div>
  <button>save</button>

    
</form>



