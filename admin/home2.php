<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Outdoor Recreation Club Information System (ORCIS)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo2.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>ORCIS</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT ORC</a> 
  <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
  <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a>  
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> <a href="logout2.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal">
    <i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT
</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
    <a href="#"><img src="photo/logo2.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container w3-center">
    <h1><b>Welcome to Outdoor Recreation Club</b></h1>
    </div>
</header>
   

  <!-- Images of Club -->
  <div class="w3-container w3-padding-large w3-center " id="about">
      <img src="photo/logo2.png" alt="Boss" style="width:20%" class="w3-circle w3-hover-opacity">    
  </div>
    

  <div class="w3-container w3-padding-large w3-center" style="margin-bottom:32px">
    <h4><b>Outdoor Recreation Club</b></h4>
    <p>The Outdoor Recreation Club at UiTM Kampus Machang is a student-run organization that aims to promote outdoor activities and sports among students. The club organizes various outdoor activities such as hiking, camping, and rock climbing, as well as indoor activities such as wall climbing and archery. The club also provides training and workshops for students who are interested in learning new skills and techniques related to outdoor activities. The club is open to all students of UiTM Kampus Machang who are interested in outdoor activities and sports.</p>
    <hr>
  </div>

    <!-- Committee -->
  <div class="w3-container w3-padding-large w3-center" id="committee">
<h2>OUR TEAM</h2>
<p>Meet the team</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/jcw.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Chairi Dhamir </h3>
  <p>President</p>
</div>

<div class="w3-quarter">
  <img src="photo/jisoo.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Jisuya Abeer</h3>
  <p>Vice President</p>
</div>

<div class="w3-quarter">
  <img src="photo/jennie.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Jenie Diya</h3>
  <p>Treasurer</p>
</div>

<div class="w3-quarter">
  <img src="photo/ksh.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Kai Eijaz</h3>
  <p>Secretary</p>
</div>

</div>
</div>

    <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4 id="membership"><b>Outdoor Recreation Club Membership</b></h4>
    <!-- Membership -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  <p align="center"><h5>Membership form for Outdoor Recreation Club (ORC)</h5></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <hr>

<div class="w3-container w3-padding-large" style="margin-bottom:32px">
  <h4 id="activity"><b>Outdoor Recreation Club Activity</b></h4>
    <!-- Activity -->
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  <p align="center"><h5>Activities form for Outdoor Recreation Club (ORC)</h5></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  
  <!-- Achievement -->
  <div class="w3-container w3-padding-large w3-center">
  <h4 id="achievement"><b>Outdoor Recreation Club Achievement</b></h4>
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/ach1.png" alt="Boss" style="width:80%" class="w3-border w3-hover-opacity">
</div>

<div class="w3-quarter">
  <img src="photo/ach2.png" alt="Boss" style="width:80%" class="w3-border w3-hover-opacity">
</div>

<div class="w3-quarter">
  <img src="photo/ach3.png" alt="Boss" style="width:80%" class="w3-border w3-hover-opacity">
</div>

<div class="w3-quarter">
  <img src="photo/ach4.png" alt="Boss" style="width:80%" class="w3-border w3-hover-opacity">
</div>

</div>
</div>

  <!-- Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i> Drop a note!</i></p>
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Message</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_message"] ?></td>
            <td>
              <a href="edit_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 text -center">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-large w3-section">
    <i class="fa fa-map-marker" style="width:30px"></i> UiTMCK, Kelantan<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: orcck@mail.com<br>
  </div>
  <div class="w3-xlarge w3-section">
    <a href="#" target="_blank" class="w3-hover-opacity"><i class="fa fa-facebook-official"></i></a>
    <a href="https://www.instagram.com/orcuitmck?igsh=MWp6OTVya21renB2eA==" target="_blank" class="w3-hover-opacity"><i class="fa fa-instagram"></i></a>
    <a href="#" class="w3-hover-opacity"><i class="fa fa-snapchat"></i></a>
    <a href="#" class="w3-hover-opacity"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-opacity"><i class="fa fa-linkedin"></i></a>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
} 

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
