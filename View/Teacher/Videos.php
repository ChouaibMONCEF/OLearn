
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <link rel="stylesheet" href="<?php echo BASE_URL;?>view/teacher/css/style.css" />
  <title>OLearn</title>
</head>
<style>
  .profileimg {
    width: 6rem;
    height: 6rem;
    border-radius: 50%;
  }
</style>

<body>

  <div class="navbar">
    <div class="logo dlogo">
      <a href="#" class=""><img src="<?php echo BASE_URL;?>view/teacher/includes/logo.svg" alt="logo smanager" /></a>
    </div>

    <div class="profile-image">
      <img id="profile" class="profileimg" src="<?php echo BASE_URL;?>view/teacher/includes/logo.svg" alt="profile" />
      
      <p class="user-name"></p>
    </div>

    <div class="link-item">
      <a href="index.php" class="link">
        <img src="<?php echo BASE_URL;?>view/teacher/includes/idashboard.svg" alt="icon" />
        <span>Dashboard</span>
      </a>
      <a href="add.php" class="link">
        <img src="<?php echo BASE_URL;?>view/teacher/includes/ivideos.svg" alt="icon" />
        <span>My videos</span>
      </a>
      <a href="index.php" class="link">
        <img src="<?php echo BASE_URL;?>view/teacher/includes/iadd.svg" alt="icon" />
        <span>Add Video</span>
      </a>
      <a href="#" class="link">
          <img src="<?php echo BASE_URL;?>view/teacher/includes/isettings.svg" alt="icon" />
          <span>Settings</span>
        </a>
      <div class="bottme-nav">
        <a href="#" id="logout" class="link">
          <img src="<?php echo BASE_URL;?>view/teacher/includes/ilogout.svg" alt="icon" />
          <span>Logout</span>
        </a>
      </div>
    </div>
  </div>

  <main>
    <h1>Videos</h1>
    <div class="search">
    <form action="">
    <input type="text" placeholder="     Search"  >
    <button class="btn"><i class="fa fa-search" style="color: #7579E7" ></i></button>
    
  </form>
</div>
    <div class="tableHolder">
      <table id="table">
        <tr id="row">
          <th>Title</th>
          <th>Description</th>
          <th>Subject</th>
          <th>Add Date</th>
          <th>Views</th>
          <th>Action</th>
        </tr>
        <?php foreach($videos as $video){; ?>
        <tr>
        
        
          <div class="video"> 
          <td><?php echo $video['title']; ?> </td>
          <td><?php echo $video['dscr']; ?> </td>
          <td><?php echo $video['subject']; ?> </td>
          <td><?php echo $video['adddate']; ?> </td>
          <td> number</td>
          <td>
            <div class="action">
              <a href="<?php echo BASE_URL;?>teacher/UpdateVideo/<?php echo $video['id'];?>"><img src="<?php echo BASE_URL;?>view/teacher/includes/iedit.svg" id="edit" alt="edit" /></a>
              <a href="<?php echo BASE_URL;?>teacher/Delete/<?php echo $video['id'];?>"><img src="<?php echo BASE_URL;?>view/teacher/includes/idelete.svg" id="delete" alt="delete" /></a>
            </div>
          </td>
        </div>
        </tr>
         <?php };?>
        
      </table>
    </div>
  </main>
</body>


</html>