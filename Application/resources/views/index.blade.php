<form action = "/index" method = "POST" >
    <input type = "hidden" name ="Id" value = "<?php echo $id; ?>" >
        <div >
            <select name="Selectoption"id="select">    
                <option value="email">Name</option>
                <option value="name"> Department</option>
                <option value="phone_number">Salary</option>
            </select> 

            <button type ="submit" name="SORT" class="btn" >SORT</button>
            
        </div>
        
        <div >
            <input type="text" name="search" placeholder="Enter Name,EmpId,Dept or city">
            <button type ="submit" >Search</button>            
        </div>
        <div >
            
            <button type ="submit" >Display</button>            
        </div>
           
</form>