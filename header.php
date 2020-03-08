<?php
  //
  session_start();

  //
  require "includes/dbh.inc.php";


  if (!isset($_SESSION['uid'])){
    echo "<h3> 로그인 아님 </h3>";
  } else {
    $id = $_SESSION['uid'];
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>


    <header>
      <nav class="nav-header-main">
        <div class="header-logo" href="index.php">
          <img src="myimg/logo.png" alt="mmtuts logo">
        </div>
        <ul>
          <li><a href="index.php">메인 페이지</a></li>
          <li><a href="../20200107/01.sentences.php?">문제 시작</a></li>
          <li><a href="../20200107/study_01.php?">학습 시작</a></li>
        </ul>
      </nav>
      <div class="header-login">

        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="이메일/이름">
            <input type="password" name="pwd" placeholder="암호">
            <button type="submit" name="login-submit">로그인</button>
          </form>
          <a href="signup.php" class="header-signup">계정 생성</a>'
          ;
        }
        else if (isset($_SESSION['id'])) {
          echo '<input type="text" name="name3"> <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>
