<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <link rel="stylesheet" href="css/style.css" />
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
      <a href="#" class=""><img src="includes/logo.svg" alt="logo smanager" /></a>
    </div>

    <div class="profile-image">
      <img id="profile" class="profileimg" src="includes/logo.svg" alt="profile" />
      
      <p class="user-name"></p>
    </div>

    <div class="link-item">
      <a href="index.php" class="link">
        <img src="includes/iteachers.svg" alt="icon" />
        <span>Approve Teachers</span>
      </a>
      <a href="add.php" class="link">
        <img src="includes/ivideos.svg" alt="icon" />
        <span>Approve Videos</span>
      </a>
      
      <div class="bottme-nav">
        <a href="#" id="logout" class="link">
          <img src="includes/ilogout.svg" alt="icon" />
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
          <th>Title</th>
          <th>Description</th>
          <th>Subject</th>
          <th>Add Date</th>
          <th>Views</th>
          <th>Action</th>
        </tr>
      </table>
    </div>
  </main>
</body>


</html>