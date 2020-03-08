<?php
session_start();
echo $_SESSION['email'];

if (!isset($_SESSION['username'])){
  echo "You are not logged in!";
} else {
  echo "you are logged in!";
}

	include_once 'dbh.inc.php';

  $result_sentences=$_GET['result_sentences'];
  $result_word1=$_GET['result_word1'];
  $result_word2=$_GET['result_word2'];
  $result_illustration=$_GET['result_illustration'];
  $result_easy=$_GET['result_easy'];
  $result_middle=$_GET['result_middle'];
  $result_hard=$_GET['result_hard'];
  $finalscore =$result_sentences+$result_word1+$result_word2;
  $uid =$_SESSION['uid'];

  //similar_text($string1, $string2, $similarity1);
  //$fscore = $similarity1 + $similarity2;
  $sql = "UPDATE users SET score = ?, sentence = ?, wordone = ?, wordtwo = ?, illustration = ?, easy = ?, middle = ?, high = ? WHERE uidUsers=?;";
//  $sql = "UPDATE users SET score = ? SET SENTENCE =? SET WORDONE =? SET WORDTWO =? SET ILLUSTRATION =? WHERE uidUsers=?;";
//  $sql = "INSERT INTO users (emailUsers, pwdUsers, score) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  	if (!mysqli_stmt_prepare($stmt, $sql)) {
  		echo "SQL error";
  	} else {

      mysqli_stmt_bind_param($stmt, "sssssssss", $finalscore, $result_sentences, $result_word1, $result_word2, $result_illustration, $result_easy, $result_middle, $result_hard, $uid);

  		mysqli_stmt_execute($stmt);
  	}


  header("Location: ../index.php?signup=success");
