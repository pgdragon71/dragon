<?php

  session_start();

  require "includes/dbh.inc.php";

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

    <?php
    //$random_number= mt_rand(1,4);
    ?>


    <header>
      <nav class="nav-header-main">
        <div class="header-logo" href="index.php">
          <img src="myimg/logo.png" alt="mmtuts logo">
        </div>
        <div class="mainpage">
        <ul>
          <li><a href="index_first.php">메인 페이지</a></li>
        </div>
        </ul>
      </nav>
      <div class="header-login">

        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post" autocomplete="off">
            <input type="text" name="mailuid" placeholder="이메일/이름">
            <input type="password" name="pwd" placeholder="암호">
            <button type="submit" name="login-submit">로그인</button>
          </form>
          <a href="signup.php" class="header-signup">계정 생성</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<input type="text" name="name3"> <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>
