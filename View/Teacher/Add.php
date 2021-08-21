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

      <a href="<?php echo BASE_URL;?>teacher/myvideos" class="link">
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
        <form id="form" method="POST" action="http://localhost/OLearn/teacher/add" enctype="multipart/form-data">
            <div id="sone" >
                <div>
                    <div class="input">
                        <label>Enter a valid YouTube link </label> <br>
                        <input type="texr" name="video">
                    </div>
                    <div class="input">
                        <label>Title :</label> <br>
                        <input type="text" name="title">
                    </div>
                    <div class="input">
                        <label>Description :</label> <br>
                        <textarea type="text" name="dscr"></textarea>
                    </div>
                    <div class="input">
                        <label>Grade :</label> <br>
                        <select name="grade" >
                        <option value="5eme">5eme</option>
                        <option value="1bac">1bac</option>
                        <option value="2bac">2bac</option>
                        </select>
                    </div>
                    <div class="input">
                        <label>Subject :</label> <br>
                        <select name="subject" >
                        <option>Mathematiques</option>
                        <option>Physics</option>
                        <option>Svt</option>
                        <option>Philosophy</option>
                        <option>Traduction</option>
                        <option>French</option>
                        <option>English</option>
                        <option>Arabe</option>
                        </select>
                    </div>
                    <div class="input">
                        <label>Thumbnail :</label> <br>
                        <label for="thumbnail" class="overit"> Click to upload a thumbnail </label>
                        <input type="file" name="thumbnail" id="thumbnail">
                    </div>
                    <div class="input">
                    <button type="submit">Submit</button>
                </div>
                </div>
            </div>
        </form>
    </div>
</main>
</body>
</html>