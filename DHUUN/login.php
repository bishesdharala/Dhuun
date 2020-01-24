<!doctype html>
<html>
<head>
<title> Login Signup page </title>
<link rel ="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<div class="container">
       <div class="row">
               <div class="col-lg-6">
               <h2> Login </h2> 
               <form action="validation.php" method="post">
            <div class="form-group">
                  <label>username </label>
                  <input type="text" name="user" class="form-control">
                  </div>
                  <div class="form-group">
                  <label> password </label>
                  <input type="password" name="password" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary"> Login </button>
               </form>
            </div>


                  <div class="col-lg-6">
                  <h2> Sign Up </h2>
             <form action="registration.php" method="post">
                  <div class="form-group">
                    <label>username </label>
                    <input type="text" name="user" class="form-control">
                  </div>
                  <div class="form-group">
                    <label> password </label>
                    <input type="Password" name="password" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary"> Sign Up </button>
            </form>
       </div>
</div>
</div>
</body>
</html>