<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <link rel="stylesheet" href="<?php echo BASE_URL;?>view/admin/css/style.css" />
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

    

    <div class="link-item">
      <a href="<?php echo BASE_URL;?>teacher/ApproveTeachers" class="link">
        <img src="<?php echo BASE_URL;?>view/admin/includes/iteachers.svg" alt="icon" />
        <span>Approve Teachers</span>
      </a>
      <a href="<?php echo BASE_URL;?>video/ApproveVideos" class="link">
        <img src="<?php echo BASE_URL;?>view/admin/includes/ivideos.svg" alt="icon" />
        <span>Approve Videos</span>
      </a>
      <div class="bottme-nav">
        <a href="<?php echo BASE_URL;?>admin/logout" id="logout" class="link">
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
    <input type="text" placeholder="Search">
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
          
          <th>Action</th>
        </tr>
        <?php foreach($videos as $video){; ?>
        <tr>
        
        
          <div class="video"> 
          <td><?php echo $video['title']; ?> </td>
          <td><?php echo $video['dscr']; ?> </td>
          <td><?php echo $video['subject']; ?> </td>
          <td><?php echo $video['adddate']; ?> </td>
          
          <td>
              <a href="<?php echo BASE_URL;?>admin/approvevideo/<?php echo $video['id'];?>"><img src="<?php echo BASE_URL;?>view/admin/includes/imore.svg" id="more" alt="more" /></a>
          </td>
        </div>
        </tr>
         <?php };?>
        
      </table>
    </div>
  </main>
</body>


</html>