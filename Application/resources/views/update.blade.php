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
  
  <button>Update</button>
  
    
</form>