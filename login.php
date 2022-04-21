<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="icon" href="./img/favicon.png" type="image/gif" sizes="16x16">
    <title>Log in</title>
</head>
<body>
<div class="login-form">
    <form action="helper/login.php" method="POST">
        <div class="row">  
            <div class="col-25"> 
              <label for="email">Email</label>
            </div>
            <div class="col-75">
              <input type="text" id="email" name="email">
            </div>
        </div>
        <div class="row">  
            <div class="col-25"> 
              <label for="password">Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="password" name="password">
            </div>
        </div>
        <div class="button">
            <div> 
             <a href="./register.php">
                <div class="custom-button">Sign Up</div>
             </a>
            </div>
            <div> 
              <a>
                <button>Sign In</button>
              </a>
            </div>
        </div>
    </form>
</div>
</body>
</html>