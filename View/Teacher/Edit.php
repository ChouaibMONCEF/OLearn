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
        <?php foreach($videos as $video){; ?>
        <form id="form" method="POST" action="http://localhost/OLearn/video/Update/<?php echo $video['id'];?>">
            <div>
                <div>
                   
                    <div>
                        <label>Video here :</label> <br>
                        <input type="file" name="video" disabled ><?php echo $video['video'];?>
                    </div>
                    <div>
                        <label>Title :</label> <br>
                        <input type="text" name="title" value="<?php echo $video['title'];?>">
                    </div>
                    <div>
                        <label>Description :</label> <br>
                        <textarea type="text" name="dscr"><?php echo $video['dscr'];?></textarea>
                    </div>
                    <div>
                        <label>Grade :</label> <br>
                        <input value="<?php echo $video['grade'];?>" name="grade" disabled >
                        
                    </div>
                    <div>
                        <label>Subject :</label> <br>
                        <input value="<?php echo $video['subject'];?>" name="subject" disabled >
                        
                    </div>
                    <div>
                        <label>Thumbnail :</label> <br>
                        <input type="file" name="thumbnail" disabled ><?php echo $video['thumbnail'];?>
                    </div>
                    <button id="btn" type="submit">Submit</button>
                   <?php };?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>