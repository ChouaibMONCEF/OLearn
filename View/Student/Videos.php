<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>view/student/css/style.css" alt=""">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Watch Videos</title>
</head>

<script>

function math() {
  const allItems = document.querySelectorAll(".vid-target")
  Array.from(allItems).forEach((video)=>{
     if(!video.classList.contains("2bac")){
       video.style.display = "none"
     }else{
        video.style.display = "block"
     }
  })
  // console.log(allItems);
}

</script>

<body>

    <header class="mb-5">
         <img src="<?php echo BASE_URL;?>view/public/includes/logo.svg" alt="">

        <input type="checkbox" class="input" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars" ></label>

        <div class="nav">
        <form action="">
            <input type="text" placeholder="Search">
            <button class="btn"><i class="fa fa-search"  ></i></button>
        </form>
        </div>

        

    </header>
    
    <section class="mt-5">
        
        <div class="row row-cols-2 row-cols-md-4 g-4">
          <?php foreach($videos as $video){; ?>
  <div class="col vid-target <?php echo $video['subject'];?> <?php echo $video['grade'];?>" >
    <a href="<?php echo BASE_URL;?>student/watch/<?php echo $video['id'];?>">
    <div class="card h-80 mt-3">
      <img src="<?php echo BASE_URL;?>assets/thumbnail/<?php echo $video['thumbnail']; ?>" class="card-img-top omg" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $video['title']; ?></h5>
        <p class="card-text"><?php echo $video['subject']; ?></p>
      </div>
     </a>
    </div>
  </div>
  <?php }?>
</div>

<div>
  <button onclick="math()" >allo</button>
  <button onclick="math()" >allo</button>
</div>
    </section>

</body>






</html>