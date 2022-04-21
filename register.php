<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./img/favicon.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="./css/register.css">
  <title>Tours in Georgia</title>

</head>

<body>
  

<div class="login-form">
  <form action="helper/register.php" method="POST">
      <div class="row">  
        <div class="col-25"> 
          <label for="fname">Firstname</label>
        </div>
        <div class="col-75">
          <input type="text" name="name">
        </div>
      </div>
      <div class="row"> 
        <div class="col-25"> 
          <label for="lname">Lastname</label>
          </div>
          <div class="col-75">
          <input type="text" name="lastname">
          </div>
        </div>
        <div class="row">
        <div class="col-25">
          <label for="email">Email</label>
          </div>
          <div class="col-75">
          <input type="text" name="email">
          </div>
        </div>
        <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
          </div>
          <div class="col-75">
          <input type="password" name="password">
          </div>
        </div>
        <div class="row">
        <div class="col-25">
          <label for="confirm_password">Confirm Password</label>
          </div>
          <div class="col-75">
          <input type="password" name="password_confirm">
          </div>
        </div>
          
        
          <div class="button">
            <div> 
              <a href="./login.php">
                <div  class="custom-button">Sign In</div>
              </a>
            </div>
            <div> 
             <a>
                <button>Sign Up</button>
             </a>
            </div>
          </div>
  </div>
       
    </form>
    </div>
    

    
</body>
</html>