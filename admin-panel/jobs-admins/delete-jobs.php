<?php require "../layouts/header.php"; ?>           
<?php require "../../config/config.php"; ?>

<?php
  if(!isset($_SESSION['adminname'])) {

    header("location: ".ADMINURL."/admins/login-admins.php");

  }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delete = $conn->prepare("DELETE FROM jobs WHERE id = '$id'");
        $delete->execute();
        header("Location:" .ADMINURL."/jobs-admins/show-jobs.php");

    }else{
        header("location: http://localhost/jobportal/404.php");
    }
?>


<?php require "../layouts/footer.php"; ?>