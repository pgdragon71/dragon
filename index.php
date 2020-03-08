<?php
//if (!isset($_SESSION['uid'])){
//  header("Location: signup.php");
//} else {

//}

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
  font-size: 15px;
}

.noticing2 {
  margin-left: 60px;
  font-size: 11px;
  color: red;
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
        문제시작 버튼을 눌러주세요. (영작 --> 단어 학습 1 --> 단어 학습 2 --> 교과서 문제 순으로 풀게 됩니다)</br></br>
              </div>
        <div class="noticing2">
          ** 주의 사항</br></br>
          1) 크롬에서 데스크탑 보기를 설정 후 사용을 권장합니다.</br>
          2) 정답은 모두 소문자로 기입해 주세요.</br>
          3) 정답 기입 시 느낌표, 물음표는 모두 제외해 주세요.</br>
          4) 문제에 대한 정답은 다양할 수 있습니다. 다만 본 문제는 SMCP에 기반되어 점수가 산출됨을 알려드립니다.</br>
          5) 본 페이지에서는 사용자 활동 로그가 생성됩니다. 문제가 있을 시 꼭 로그아웃 후 재 로그인하여 사용해 주세요.</br>
            </div>
        </section>
    </main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
