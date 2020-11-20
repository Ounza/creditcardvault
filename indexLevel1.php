<?php 
include('functions.php');

if (!isLevel1()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<h1>View For a Level 1 User</h1>
<ul>
  <li>
    <a href="createSubscriber.php"><strong>Create</strong></a> - Add a subscriber
  </li>
  <li>
    <a href="readSubscriber.php"><strong>Read</strong></a> - Find a subscriber
  </li>
</ul>

<?php include "templates/footer.php"; ?>