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

// function math() {
//   const allItems = document.querySelectorAll(".vid-target")
//   Array.from(allItems).forEach((video)=>{
//      if(!video.classList.contains("2bac")){
//        video.style.display = "none"
//      }else{
//         video.style.display = "block"
//      }
//   })
  // console.log(allItems);

  let selectedGrade = null

  function sbac() {
    selectedGrade = "2bac"
    const allItems = document.querySelectorAll(".vid-target")
    if(document.querySelector("#c").classList.contains("unselected")){

    
    
    Array.from(allItems).forEach((video)=>{
      if(!video.classList.contains("2bac")){
        video.style.display = "none"
        document.querySelector("#c").classList.add("selected")
        document.querySelector("#c").classList.remove("unselected")
        document.querySelector("#a").classList.remove("selected")
        document.querySelector("#a").classList.add("unselected")
        document.querySelector("#b").classList.remove("selected")
        document.querySelector("#b").classList.add("unselected")
        }else{
        video.style.display = "block"
      }
    })

    }else{
      Array.from(allItems).forEach((video)=>{
        video.style.display = "block"
        document.querySelector("#c").classList.remove("selected")
        document.querySelector("#c").classList.add("unselected")
      })
    }
  }

  function fbac() {
    selectedGrade = "1bac"
    const allItems = document.querySelectorAll(".vid-target")
    if(document.querySelector("#b").classList.contains("unselected")){
    Array.from(allItems).forEach((video)=>{
      if(!video.classList.contains("1bac")){
        video.style.display = "none"
        document.querySelector("#b").classList.add("selected")
        document.querySelector("#b").classList.remove("unselected")
        document.querySelector("#a").classList.remove("selected")
        document.querySelector("#a").classList.add("unselected")
        document.querySelector("#c").classList.remove("selected")
        document.querySelector("#c").classList.add("unselected")
        }else{
        video.style.display = "block"
      }

    })
  }else{
      Array.from(allItems).forEach((video)=>{
        video.style.display = "block"
        document.querySelector("#b").classList.remove("selected")
        document.querySelector("#b").classList.add("unselected")
      })
}
  }
  function tc() {
    selectedGrade = "5eme"
    const allItems = document.querySelectorAll(".vid-target")
    if(document.querySelector("#a").classList.contains("unselected")){
    Array.from(allItems).forEach((video)=>{
      if(!video.classList.contains("5eme")){
        video.style.display = "none"
        document.querySelector("#a").classList.add("selected")
        document.querySelector("#a").classList.remove("unselected")
        document.querySelector("#c").classList.remove("selected")
        document.querySelector("#c").classList.add("unselected")
        document.querySelector("#b").classList.remove("selected")
        document.querySelector("#b").classList.add("unselected")
        }else{
        video.style.display = "block"
      }

    })
  }else{
      Array.from(allItems).forEach((video)=>{
        video.style.display = "block"
        document.querySelector("#a").classList.remove("selected")
        document.querySelector("#a").classList.add("unselected")
      })
}
  }

  function filter(){
    let subject = document.querySelector("#sl")
    console.log(subject.selectedIndex)
    const allItems = document.querySelectorAll(".vid-target")
    Array.from(allItems).forEach((video)=>{
      if(subject.selectedIndex == 1){
      if(!video.classList.contains("Mathematiques") || !video.classList.contains(selectedGrade)){
        video.style.display = "none"
        }else{
        video.style.display = "block"
      }
    }else if(subject.selectedIndex == 2){
      if(!video.classList.contains("Physics") || !video.classList.contains(selectedGrade)){
        video.style.display = "none"
        }else{
        video.style.display = "block"
      }

    }else if(subject.selectedIndex == 3){
      if(!video.classList.contains("Svt") || !video.classList.contains(selectedGrade)){
        video.style.display = "none"
        }else{
        video.style.display = "block"
      }

    }else if(subject.selectedIndex == 4){
      if(!video.classList.contains("Philosophy") || !video.classList.contains(selectedGrade)){
        video.style.display = "none"
        }else{
        video.style.display = "block"
      }

    }else if(subject.selectedIndex == 5){
      if(!video.classList.contains("Traduction") || !video.classList.contains(selectedGrade)){
        video.style.display = "none"
        }else{
        video.style.display = "block"
      }

    }else if(subject.selectedIndex == 6){
      if(!video.classList.contains("French") || !video.classList.contains(selectedGrade)){
        video.style.display = "none"
       }else{
        video.style.display = "block"
      }

    }else if(subject.selectedIndex == 7){
      if(!video.classList.contains("English") || !video.classList.contains(selectedGrade)){
        video.style.display = "none"
        }else{
        video.style.display = "block"
      }

    }else if(subject.selectedIndex == 8){
      if(!video.classList.contains("Arabe") || !video.classList.contains(selectedGrade)){
        video.style.display = "none"
        }else{
        video.style.display = "block"
      }

    }else if(subject.selectedIndex == 0){
        if(!video.classList.contains(selectedGrade)){
        video.style.display = "none"
        }else{
        video.style.display = "block"
      }
      }

    
    
    
  })
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
<div class="hdr">

    <div>
  <button class="unselected" id="a" onclick="tc()" >Tronc Commun</button>
  <button class="unselected" id="b" onclick="fbac()" >1ère Bac</button>
  <button class="unselected" id="c" onclick="sbac()" >2eme Bac</button>
</div>


<div>

  <select name="" onchange="filter()" id="sl">
  <option value="" >All</option>
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


</div>

<hr class="red" >
        
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
    </section>

</body>






</html>