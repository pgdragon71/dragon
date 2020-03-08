<?php

if (!isset($_SESSION['uid'])){
  header("Location: index.php");
} else {
        exit();
}

  require "header.php";
  //echo $_SESSION['uid'];

  if (!isset($_SESSION['uid'])){
    echo "<h3> </h3>";
  } else {
    $id = $_SESSION['uid'];
  }

  if (!isset($_SESSION['uid'])){
    echo "<h3> 로그인 중이 아닙니다. </h3>";
  } else {
    echo '안녕하세요 '. $id .' 님 로그인 중입니다. ';
  }
?>
<style>
.noticing {
  margin-left: 90px;
}
</style>

    <main>
      <div class="wrapper-main">
        <section class="section-default">

          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status"> 로그아웃 되었습니다 </p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status"> 안녕하세요 '. $id. ' 님 로그인 되었습니다</p>';
          }
          ?>
        </br> <div class="noticing">
        문제시작 버튼을 눌러주세요. (영작 --> 단어 학습 1 --> 단어 학습 2 --> 교과서 문제 순으로 풀게 됩니다)
              </div>
        </section>
    </main>

<?php
  require "footer.php";
?>
