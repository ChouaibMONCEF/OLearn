<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>view/public/css/admin.css">
    <title>Document</title>
</head>
      <body>
          <a href="<?php echo BASE_URL;?>public/home">
         <img class="olearn" src="<?php echo BASE_URL;?>view/public/includes/logo.svg" alt="" srcset="">
        </a>
      <section>
    <div class="form"> 
       <h3>Admin</h3>
        <form id="form" method="POST" action="http://localhost/OLearn/admin/login">
            <div>
                <div>
                    <div class="inp">
                        <label>Username:</label> <br>
                        <input class="nrd" type="text" name="username">
                    </div>
                    <div class="inp">
                        <label>Password:</label> <br>
                        <input class="nrd" type="password" name="pswrd">
                    </div>
                    <button id="btn" type="submit">Login</button>
                </div>
                
            
        </form>
    </div>
   </section>
</body>

</html>