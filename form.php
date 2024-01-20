



<form class="user" method="POST" action="form1.php">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="title" name="title" required>
        </div>
        <div class="col-sm-6">
            <input  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="Last Name" name="name" required>
         </div>
    </div>
    <div class="form-group mt-3">
        <input name="image"  style="border-radius: 100px;" type="file" class="form-control form-control-user input1" 
             required>
    </div>

    <br>
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    <input  type="submit" name="register" value="register" class="btn btn-primary btn-user btn-block"  >
    <br><br>
 
                        
</form>