<?php
include 'header.php';

if (!isset($_SESSION['username'])){
  echo '안녕하세요 '. $id .' 님 로그인 중입니다.</br>';
} else {
  echo "<h3> 로그인 중이 아닙니다.</br> </h3>";
}

if (!isset($_SESSION['s1'])){
  echo '</br>영작 문제를 완료하지 않았습니다. 영작 문제를 완료하세요';
} else {
  echo "</br>영작 문제를 완료하였습니다";
}

if (!isset($_SESSION['w1'])){
  echo '</br>단어-1 문제를 완료하지 않았습니다. 단어 학습-1 문제를 완료하세요';
} else {
  echo "</br>단어-1 문제를 완료하였습니다";
}

if (!isset($_GET['w2-1'])){
  echo '</br>단어-2 문제를 완료하지 않았습니다. 단어 학습-2 문제를 완료하세요';
} else {
  $_SESSION['w2-1'] = $_GET['w2-1'];
  $_SESSION['w2-2'] = $_GET['w2-2'];
  $_SESSION['w2-3'] = $_GET['w2-3'];
  $_SESSION['w2-4'] = $_GET['w2-4'];
  $_SESSION['w2-5'] = $_GET['w2-5'];
  $_SESSION['w2-6'] = $_GET['w2-6'];
  $_SESSION['w2-7'] = $_GET['w2-7'];
  echo "</br>단어-2 문제를 완료하였습니다";
}

//$sentence1=$_GET['sentence1'];
//$sentence2=$_GET['sentence2'];
//$str="sentence1={$sentence1}&sentence2={$sentence2}";
?>

<!DOCTYPE html>
<style>

.answerbelow {
  line-height: 80px;
  font-family: arial;
  font-size: 20px;
  padding-left: 30px;
}

html, body {
  margin: 0px;
  padding:0px;
  height: 100%;
  width: 100%
}

.intro {
  height:850px;
  width: 1200px;
  margin: auto;
  background: url("myimg/1.png");
  background-size: 100%;
}

.submit{
 position: absolute;
 top: 1120px;
 left: 120px;
 border: 2px solid #aaa;
 border-radius:4px;
 color: green;
 border-color: red;
}

div input.first {
  width:6.1%;
  border: 2px solid #aaa;
  border-radius:4px;
  margin-left: 10px;
  margin-top: 700px;
/* font-size: 5px;
/*padding-top: 25px; --> 칸의 크기 조절 가능*/
}

div input.second {
  width: 8.2%;
  border: 2px solid #aaa;
  border-radius:4px;
  margin-left: 10px;
  margin-top: 0px;
/*padding-top: 25px; --> 칸의 크기 조절 가능*/
}

div input.submit {
  left: 350px;
  width: 200px;
}

</style>
</br>
<a class="answerbelow"> 04. 교과서 - 다음 빈칸을 채우시오
</br>
</a>

  <body>
    <form action="00.finalscore.php" method="get" autocomplete="off">
    <section class="intro">
        <div class="content">
        <input class="first" type="text" name="i1" placeholder="소문자 기입">
        </div>
        <div class=" not">
        <input class="second" type="text" name="i2" placeholder="소문자 기입할 것 ">
        </div>
    </section>
    <p></p>
  </body>
</html>
<input class= "submit" type="Submit" value="점수 확인">
