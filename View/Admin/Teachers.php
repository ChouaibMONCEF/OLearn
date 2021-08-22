<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <a href="#" class=""><img src="<?php echo BASE_URL;?>view/admin/includes/logo.svg" alt="logo smanager" /></a>
    </div>

    

    <div class="link-item">
      <a href="<?php echo BASE_URL;?>admin/Teachers" class="link">
        <img src="<?php echo BASE_URL;?>view/admin/includes/iteachers.svg" alt="icon" />
        <span>Approve Teachers</span>
      </a>
      <a href="<?php echo BASE_URL;?>admin/Videos" class="link">
        <img src="<?php echo BASE_URL;?>view/admin/includes/ivideos.svg" alt="icon" />
        <span>Approve Videos</span>
      </a>
      
      <div class="bottme-nav">
        <a href="<?php echo BASE_URL;?>admin/logout" id="logout" class="link">
          <img src="<?php echo BASE_URL;?>view/admin/includes/ilogout.svg" alt="icon" />
          <span>Logout</span>
        </a>
      </div>
    </div>
  </div>

  <main>
    <h1>Approve Teachers</h1>
    <div class="tableHolder">
      <table id="table">
        <tr id="row">
          <th>Name</th>
          <th>Subject</th>
          <th>Experience</th>
          <th>Apply Date</th>
          <th>Action</th>
        </tr>
        <?php foreach($teachers as $teacher){; ?>
        <tr>
        
        
          <div class="teacher"> 
          <td><?php echo $teacher['fullname']; ?> </td>
          <td><?php echo $teacher['subject']; ?> </td>
          <td><?php echo $teacher['experience']; ?> </td>
          <td><?php echo $teacher['applydate']; ?> </td>
          <td>
              <a href="<?php echo BASE_URL;?>admin/approveteacher/<?php echo $teacher['id'];?>"><img src="<?php echo BASE_URL;?>view/admin/includes/imore.svg" id="more" alt="more" /></a>
          </td>
        </div>
        </tr>
         <?php };?>
      </table>
    </div>
  </main>
</body>


</html>