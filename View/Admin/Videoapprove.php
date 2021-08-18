<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>view/admin/css/apv.css" />
    <title>Document</title>
</head>
<body>
    <section>
    <div class="container">
        <?php foreach($videos as $video){; ?>

        <div class="infos" >
            <div class="vid" >
                <p>Title: <b><?php echo $video['title'];?></b></p> <br>
                <p>Description: <b><?php echo $video['dscr'];?></b></p> <br>
                <p>Grade: <b><?php echo $video['grade'];?></b></p> <br>
                <p>subject: <b><?php echo $video['subject'];?></b></p> <br>
                <img src="<?php echo BASE_URL;?>Assets/thumbnail/<?php echo $video['thumbnail'];?>" alt="" srcset=""> <br>
                <p>Post date: <b><?php echo $video['adddate'];?></b></p> <br>
                
            </div> 
            <div class="video">
                <div class="video-box">
                    <iframe
                        src="https://www.youtube.com/embed/xKuJrmlCdig"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    ></iframe>
            </div>
    </div>
        </div>
                    <div class="btnc" >
                    <form action="http://localhost/OLearn/admin/delete/<?php echo $video['id'];?>" method="post">
                    <button class="decline"type="submit" >Decline</button>
                    </form>
                    <form action="http://localhost/OLearn/admin/updatev/<?php echo $video['id'];?>" method="POST">
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