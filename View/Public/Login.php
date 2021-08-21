<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>view/public/css/login.css">
    <title>Document</title>
    
</head>
<script>
     
    function Usert(){
            if (document.getElementById("teacher").checked) {
               document.getElementById('form').action = 'http://localhost/OLearn/teacher/login';
            }else if (document.getElementById("student").checked){
               document.getElementById('form').action = 'http://localhost/OLearn/student/login';
            }
        }

</script>

      <body>
          <a href="<?php echo BASE_URL;?>public/home">
         <img class="olearn" src="<?php echo BASE_URL;?>view/public/includes/logo.svg" alt="" srcset="">
        </a>
      <section>

         <div class="welcome" >
            <h3>Good to see you again!</h3>
            <img src="<?php echo BASE_URL;?>view/public/includes/welcome.svg" alt="" srcset="">
         </div>

    <div class="form"> 
       <h3>Log in</h3>
        <form id="form" method="POST" action="">
            <div>
                <div>
                    <div class="inp">
                        <label>Email :</label> <br>
                        <input class="nrd" type="text" name="email" placeholder="ChoaibMoncef1@gmail.com">
                    </div>
                    <div class="inp">
                        <label>Password :</label> <br>
                        <input class="nrd" type="password" name="pswrd">
                    </div>
                    <div class="radio">
                       <label>Are you a:</label> <br>
                       <div class="rdo" >
                        <input type="radio" onclick="javascript:Usert()" id="student" name="type">
                        <label for="student">Student</label> &nbsp; &nbsp; &nbsp; &nbsp; 
                        <input type="radio" onclick="javascript:Usert()" id="teacher" name="type" >
                        <label for="teacher">Teacher</label><br>
                     </div>
                    </div>
                    <button id="btn" type="submit">Login</button>
                </div>
                <p>Don't have an account ? <a href="<?php echo BASE_URL;?>public/register"> Sign Up</a></p>
            <p>By logging in and continuing into OLearn you agree on term and conditions</p>
            </div>
            
        </form>
    </div>
   </section>
</body>

</html>