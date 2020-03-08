<?php
session_start();
echo $_SESSION['email'];

if (!isset($_SESSION['username'])){
  echo "You are not logged in!";
} else {
  echo "you are logged in!";
}

	include_once 'dbh.inc.php';


  $letgo1=$_GET['final1'];
  $letgo2=$_GET['final2'];
  $uid =$letgo1+$letgo2;
  $pwd =$_SESSION['uid'];

  similar_text($string1, $string2, $similarity1);

  //$sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
//  $sql = "UPDATE users set score= 50 WHERE uidUsers=1;";
//  $sql = "INSERT INTO users (uidUsers, score) VALUES (?, '$similarity1');";
  $sql = "UPDATE users SET score = ? WHERE uidUsers=?;";
//  $sql = "INSERT INTO users (emailUsers, pwdUsers, score) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  	if (!mysqli_stmt_prepare($stmt, $sql)) {
  		echo "SQL error";
  	} else {
  		mysqli_stmt_bind_param($stmt, "ss", $uid, $pwd);

  		mysqli_stmt_execute($stmt);
  	}


	header("Location: ../index.php?signup=success");
