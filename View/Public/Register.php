<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- <body>
    
   <div>
   <form id="form" method="POST" action="http://localhost/OLearn/student/register">
      <div id="sone" >
         <div>
            <div>
               <label>Fullname :</label> <br>
               <input type="text" name="fullname" placeholder="Choaib Moncef">
            </div>
            <div>
               <label>Email :</label> <br>
               <input type="text" name="email" placeholder="ChoaibMoncef1@gmail.com">
            </div>
            <div>
               <label>Birthdate :</label> <br>
               <input type="date" name="birthdate">
            </div>
            <div>
               <label>Password :</label> <br>
               <input type="password" name="pswrd">
            </div>
           
            <div>
               <input type="radio" onclick="javascript:type()" id="student" name="type">
               <label for="student">Student</label>
               <input type="radio" onclick="javascript:type()" id="teacher" name="type" >
               <label for="teacher">Teacher</label><br>
            </div>
   
            <button id="btn" onclick="next()" type="submit">Submit</button>
         </div>
      </div>
         <div id="stwo" style="display:none" >
                <div>
            <div>
               <label>What do you teach :</label> <br>
               <input type="text" name="fullname" placeholder="Mathematiques">
            </div>
            <div>
               <label>Where do you teach :</label> <br>
               <input type="text" name="email" placeholder="Lycee Mohammed Belhcen elouazzani">
            </div>
            <div>
               <label>How many years you been teaching :</label> <br>
               <input type="number" name="birthdate">
            </div>
            <div>
               <label>Certificate from school :</label> <br>
               <input type="file" name="pswrd">
            </div>
            <button id="btn" onclick="previous()" type="button">Previous</button>
            <button id="btn" onclick="nexttwo()" type="button">Next</button>
            
         </div>
         </div>
         <div id="sthree" style="display:none" >
                <div>
            <div>
               <label>Why should we accept you :</label> <br>
               <textarea type="text" name="fullname" >
            </div>
            <button id="btn" onclick="previoustwo()" type="button">Previous</button>
            <button id="btn" type="submit">Submit</button>
            
         </div>
         </div>
   </form>
</div>
</body> -->
<script>
            function Usert(){
            if (document.getElementById("teacher").checked) {
               document.getElementById('form').action = 'http://localhost/OLearn/teacher/register';
               document.getElementById('btn').type = 'button';
               document.getElementById('btn').innerText = 'Next';
            }else if (document.getElementById("student").checked){
               document.getElementById('form').action = 'http://localhost/OLearn/student/register';
               document.getElementById('btn').type = 'submit';
               document.getElementById('btn').innerText = 'Submit';
            }
         }
         function next() {
            if (document.getElementById("teacher").checked){
            document.getElementById('sone').style.display = 'none';
            document.getElementById('stwo').style.display = 'block';
            }else if (document.getElementById("student").checked){

            }
         }
         function nexttwo() {
            document.getElementById('sone').style.display = 'none';
            document.getElementById('stwo').style.display = 'none';
            document.getElementById('sthree').style.display = 'block';
         }
         function previous() {
            document.getElementById('sone').style.display = 'block';
            document.getElementById('stwo').style.display = 'none';
            document.getElementById('sthree').style.display = 'none';
         }

         function previoustwo() {
            document.getElementById('sone').style.display = 'none';
            document.getElementById('stwo').style.display = 'block';
            document.getElementById('sthree').style.display = 'none';
         }
  </script>

      <body>
    <div>
        <form id="form" method="POST" action="http://localhost/OLearn/student/register">
            <div id="sone" >
                <div>
                    <div>
                        <label>Fullname :</label> <br>
                        <input type="text" name="fullname" placeholder="Choaib Moncef">
                    </div>
                    <div>
                        <label>Email :</label> <br>
                        <input type="text" name="email" placeholder="ChoaibMoncef1@gmail.com">
                    </div>
                    <div>
                        <label>Birthdate :</label> <br>
                        <input type="date" name="birthdate">
                    </div>
                    <div>
                        <label>Password :</label> <br>
                        <input type="password" name="pswrd">
                    </div>
                    <div>
                        <input type="radio" onclick="javascript:Usert()" id="student" name="type">
                        <label for="student">Student</label>
                        <input type="radio" onclick="javascript:Usert()" id="teacher" name="type" >
                        <label for="teacher">Teacher</label><br>
                    </div>
                    <button id="btn" onclick="javascript:next()" type="submit">Submit</button>
                </div>
            </div>
            <div id="stwo" style="display:none" >
                <div>
                    <div>
                        <label>What do you teach :</label> <br>
                        <input type="text" name="subject" placeholder="Mathematiques">
                    </div>
                    <div>
                        <label>Where do you teach :</label> <br>
                        <input type="text" name="school" placeholder="Lycee Mohammed Belhcen elouazzani">
                    </div>
                    <div>
                        <label>How many years you been teaching :</label> <br>
                        <input type="number" name="experience">
                    </div>
                    <div>
                        <label>Certificate from school :</label> <br>
                        <input type="file" name="proof">
                    </div>
                    <button onclick="previous()" type="button">Previous</button>
                    <button onclick="nexttwo()" type="button">Next</button>
                </div>
            </div>
            <div id="sthree" style="display:none" >
                <div>
                    <div>
                        <label>Why should we accept you :</label> <br>
                        <textarea name="letter" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button onclick="previoustwo()" type="button">Previous</button>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

      <!-- <script>
         //    function Usert(){
         //    if (document.getElementById("teacher").checked) {
         //       document.getElementById('form').action = 'http://localhost/OLearn/teacher/register';
         //       document.getElementById('btn').type = 'button';
         //       document.getElementById('btn').innerText = 'Next';
         //    }else if (document.getElementById("student").checked){
         //       document.getElementById('form').action = 'http://localhost/OLearn/student/register';
         //       document.getElementById('btn').type = 'submit';
         //       document.getElementById('btn').innerText = 'Submit';
         //    }
         // }
         // function next() {
         //    if (document.getElementById("teacher").checked){
         //    document.getElementById('sone').style.display = 'none';
         //    document.getElementById('stwo').style.display = 'block';
         //    }else if (document.getElementById("student").checked){

         //    }
         // }
         // function nexttwo() {
         //    document.getElementById('sone').style.display = 'none';
         //    document.getElementById('stwo').style.display = 'none';
         //    document.getElementById('sthree').style.display = 'block';
         // }
         // function previous() {
         //    document.getElementById('sone').style.display = 'block';
         //    document.getElementById('stwo').style.display = 'none';
         //    document.getElementById('sthree').style.display = 'none';
         // }

         // function previoustwo() {
         //    document.getElementById('sone').style.display = 'none';
         //    document.getElementById('stwo').style.display = 'block';
         //    document.getElementById('sthree').style.display = 'none';
         // }
  </script> -->
</html>