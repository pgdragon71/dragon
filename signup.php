
<?php
  require "header_first.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>한나라호 계정 생성</h1>
          <?php
            if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }

          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>
          <form class="form-signup" action="includes/signup.inc.php" method="post" autocomplete="off">
            <?php
            if (!empty($_GET["uid"])) {
              echo '<input type="text" name="uid" placeholder="이름" value="'.$_GET["uid"].'">';
            }
            else {
              echo '<input type="text" name="uid" placeholder="이름">';
            }


            if (!empty($_GET["mail"])) {
              echo '<input type="text" name="mail" placeholder="이메일" value="'.$_GET["mail"].'">';
            }
            else {
              echo '<input type="text" name="mail" placeholder="이메일">';
            }
            ?>
            <input type="password" name="pwd" placeholder="암호">
            <input type="password" name="pwd-repeat" placeholder="암호 (재입력)">
            <button type="submit" name="signup-submit">한나라호 계정 생성</button>
          </form>
          <!--
          NOTES FOR ME BEFORE DOING PHP!
          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
          -->
        </section>
      </div>
    </main>

<?php

  require "footer.php";
?>

</html>
