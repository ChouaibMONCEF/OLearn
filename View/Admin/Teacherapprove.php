<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php foreach($teachers as $teacher){; ?>
                    <div>
                        <label>Name :</label> <br>
                        <div><?php echo $teacher['fullname'];?></div>
                    </div>
                    <div>
                        <label>Email :</label> <br>
                        <div><?php echo $teacher['email'];?></div>
                    </div>
                    <div>
                        <label>Birthdate :</label> <br>
                        <div><?php echo $teacher['birthdate'];?></div>
                    </div>
                    <div>
                        <label>Subject :</label> <br>
                        <div><?php echo $teacher['subject'];?></div>
                    </div>
                    <div>
                        <label>School :</label> <br>
                        <div><?php echo $teacher['school'];?></div>
                    </div>
                    <div>
                        <label>Experienve :</label> <br>
                        <div><?php echo $teacher['experience'];?></div>
                    </div>
                    <div>
                        <label>Document :</label> <br>
                        <div><?php echo $teacher['proof'];?></div>
                    </div>
                    <div>
                        <label>Letter from the teacher :</label> <br>
                        <div><?php echo $teacher['letter'];?></div>
                    </div>
                    <div>
                    <form action="http://localhost/OLearn/admin/delete/<?php echo $teacher['id'];?>" method="post">
                    <button type="submit" >Decline</button>
                    </form>
                    <form action="http://localhost/OLearn/admin/update/<?php echo $teacher['id'];?>" method="POST">
                        <input type="hidden" value="1" name="active">
                    <button type="submit" >Accept</button>
                    </form>
                    </div>
                   <?php };?>
            </div>
        </form>
    </div>
</body>
</html>