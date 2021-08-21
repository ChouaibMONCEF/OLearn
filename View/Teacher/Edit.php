<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>view/teacher/css/add.css" />
    <title>Document</title>
</head>
<body>
    <div class="navbar">
    <div class="logo dlogo">
      <a href="#" class=""><img src="<?php echo BASE_URL;?>view/teacher/includes/logo.svg" alt="logo smanager" /></a>
    </div>

    

    <div class="link-item">

      <a href="?php echo BASE_URL;?>teacher/myvideos" class="link">
        <img src="<?php echo BASE_URL;?>view/teacher/includes/ivideos.svg" alt="icon" />
        <span>My videos</span>
      </a>
      <a href="<?php echo BASE_URL;?>teacher/add" class="link">
        <img src="<?php echo BASE_URL;?>view/teacher/includes/iadd.svg" alt="icon" />
        <span>Add Video</span>
      </a>
      
      <div class="bottme-nav">
        <a href="<?php echo BASE_URL;?>teacher/logout" id="logout" class="link">
          <img src="<?php echo BASE_URL;?>view/teacher/includes/ilogout.svg" alt="icon" />
          <span>Logout</span>
        </a>
      </div>
    </div>
  </div>
  <main>
    <div>
        <?php foreach($videos as $video){; ?>
        <form id="form" method="POST" action="http://localhost/OLearn/video/Update/<?php echo $video['id'];?>">
            <div>
                <div>
                   
                    <div class="input">
                        <label>Video here :</label> <br>
                        <input type="file" name="video" disabled ><?php echo $video['video'];?>
                    </div>
                    <div class="input">
                        <label>Title :</label> <br>
                        <input type="text" name="title" value="<?php echo $video['title'];?>">
                    </div>
                    <div class="input">
                        <label>Description :</label> <br>
                        <textarea type="text" name="dscr"><?php echo $video['dscr'];?></textarea>
                    </div>
                    <div class="input">
                        <label>Grade :</label> <br>
                        <input value="<?php echo $video['grade'];?>" name="grade" disabled >
                        
                    </div>
                    <div class="input">
                        <label>Subject :</label> <br>
                        <input value="<?php echo $video['subject'];?>" name="subject" disabled >
                        
                    </div>
                    <div class="input">
                        <label>Thumbnail :</label> <br>
                        <label for="thumbnail" class="overit">You Can't Update Thumbnail</label>
                        <input type="file" name="thumbnail" id="thumbnail"><?php echo $video['thumbnail'];?>
                    </div>
                    <div class="input">
                    <button type="submit">Submit</button>
                </div>
                   <?php };?>
                </div>
            </div>
        </form>
    </div>
</main>
</body>
</html>