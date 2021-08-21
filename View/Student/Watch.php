<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>view/student/css/watch.css" alt=""">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

    <header class="mb-5">
         <img src="<?php echo BASE_URL;?>view/public/includes/logo.svg" alt="">

        <input type="checkbox" class="input" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars" ></label>

        <div class="nav">
        <form action="">
            <input type="text" placeholder="Search">
            <button class="btn"><i class="fa fa-search"></i></button>
        </form>
        </div>

    </header>



    <section>
    <?php foreach($videos as $video){; ?>
    <div class="video">
      <div class="video-box">
        <iframe
          src="https://www.youtube.com/embed/<?php echo $video['video'];?>"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </div>
    

  
      <div class="comment">
           <div id="box" class="box">
        <div class="boxx">
          <?php foreach($coms as $com){; ?>
          <div class="question-box">
            <div class="question">
              <h1 class="question-title">
                <?php echo $com['student'];?>
              </h1>
              <p class="question-description">
                <?php echo $com['com'];?>
              </p>
            </div>
          </div>
          <?php }; ?>
          
        
      </div>
      <div class="reply" >
          
        <form method="POST" action="http://localhost/OLearn/student/addcomment">
            <input type="text" name="com" class="com" placeholder="Add a Comment"  >
            <input type="hidden" name="vid" value="<?php echo $video['0'];?>">
            <button class="btn" type="submit"><i class="fa fa-paper-plane"  ></i></button>
        </form>
      <?php }; ?>
    </div>
      
    </div>
    </div>
    


    </section>
</body>
</html>