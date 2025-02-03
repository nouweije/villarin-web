<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log-In</title>
    <link href="../../../login-form/log.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active"> Sign In </h2>
          <h2 class="inactive underlineHover"> <a href="{{ route('register') }}"> Sign Up</a></h2>
      
          <!-- Icon -->
         
      
          <!-- Login Form -->
          <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="email">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
      
        </div>
      </div>
</body>
</html>