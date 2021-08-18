<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>view/admin/css/apt.css" />
    <title>Document</title>
</head>
<body>
    <section>
    <div class="container">
        <?php foreach($teachers as $teacher){; ?>

        <div class="infos" >
            <div class="teacher" >
                <p>My name is <b><?php echo $teacher['fullname'];?></b> I was Born in <b><?php echo $teacher['birthdate'];?></b>, I have been teaching <b><?php echo $teacher['subject'];?></b> for <b><?php echo $teacher['experience'];?></b> years. here is My Email <b><?php echo $teacher['email'];?></b><br>
                <br>
                Letter: <br> <br> <?php echo $teacher['letter'];?></p>
                <br>
                
            </div> 
            <div class="pic"> 
                <img src="<?php echo BASE_URL;?>Assets/proof/<?php echo $teacher['proof'];?>" alt="" srcset=""> 
            </div>
        </div>
                    <div class="btnc" >
                    <form action="http://localhost/OLearn/admin/delete/<?php echo $teacher['id'];?>" method="post">
                    <button class="decline"type="submit" >Decline</button>
                    </form>
                    <form action="http://localhost/OLearn/admin/updatet/<?php echo $teacher['id'];?>" method="POST">
                        <input type="hidden" value="1" name="active">
                    <button class="accept"type="submit" >Accept</button>
                    </form>
                    </div>
                   <?php };?>
                </div>
            </form>
        </div>
    </section>
</body>
</html>