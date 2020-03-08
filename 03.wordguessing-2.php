<?php
include 'header.php';

//$id = $_SESSION['uid'];

if (!isset($_SESSION['username'])){
  echo '안녕하세요 '. $id .' 님 로그인 중입니다.</br>';
} else {
  echo "<h3> 로그인 중이 아닙니다.</br> </h3>";
}

$_SESSION['w1'] = $_GET['w1'];
$_SESSION['w2'] = $_GET['w2'];
$_SESSION['w3'] = $_GET['w3'];
$_SESSION['w4'] = $_GET['w4'];
$_SESSION['w5'] = $_GET['w5'];
$_SESSION['w6'] = $_GET['w6'];

if (!isset($_GET['w1'])){
  echo '</br>단어-1 미완료';
} else {
  $_SESSION['w1'] = $_GET['w1'];
  $_SESSION['w2'] = $_GET['w2'];
  $_SESSION['w3'] = $_GET['w3'];
  $_SESSION['w4'] = $_GET['w4'];
  $_SESSION['w5'] = $_GET['w5'];
  $_SESSION['w6'] = $_GET['w6'];
  //$_SESSION['w6'] = $_GET['w6'];
  //$_SESSION['w7'] = $_GET['w7'];
  //$_SESSION['w8'] = $_GET['w8'];
  //$_SESSION['w9'] = $_GET['w9'];
  //$_SESSION['w10'] = $_GET['w10'];
  echo "단어-1 문제 완료";
}

if (!isset($_SESSION['s1'])){
  echo '</br>영작 문제 미완료';
} else {
  echo "</br>영작 문제 완료";
}

//$random_number201= 0;
//$random_number202= 2;
//$random_number203= 6;
//$random_number204= 11;
//$random_number301= 11;
//$random_number1= 5;
//$random_number2= 6;

$random_number201= mt_rand(0,23);
$random_number202= mt_rand(0,23);
$random_number203= mt_rand(0,23);
$random_number204= mt_rand(0,23);
$random_number301= mt_rand(0,19);
$random_number1= mt_rand(0,7);
$random_number2= mt_rand(0,7);

//medium
          $random_questions_medium=array(
          "어떤 방향에서 접근중입니까?</br>
          from what _________ are you approaching?"
          ,//1
          "어떤 방향에서 접근중입니까?</br>
          from what direction are you _________?"
          ,
          "닻줄의 방향은 어떻게 돼가고 있습니까?</br>
          How is the cable _________?"
          ,
          "닻줄의 방향은 어떻게 돼가고 있습니까?</br>
          How is the _________ leading?"
          ,
          "닻줄의 장력은 어떻게 돼가고 있습니까?</br>
          How is the cable _________?"
          ,//5
          "철저하게 견시하십시오.</br>
          Keep a sharp ___________"
          ,
          "방파제 입구를 지나 완전히 진입함.</br>
          Cleared in ___________ enterance."
          ,
          "철저하게 견시하십시오.</br>
          Keep a ___________ lookout"
          ,
          "검역 묘지에 투묘하고 검역관을 기다렸다.</br>
          Anchored at Q'station and wated for ___________ officer."
          ,
          "세관원 및 출입국 관리소 직원이 승선하여 각기 검사함</br>
          ________ officer and immigration officer came on board and inspected respectively"
          ,//10
          "세관원과 출입국 관리소 직원이 승선하여 본선 전체를 수색하였으나 이상한 점을 발견하지 못함.</br>
          Custom officer and _________ officer aboard and searched all over the ship but found nothing unusual"
          ,
          "소화 부서를 해산하고 훈련을 종료함</br>
          _________ fire station and finished dril."
          ,
          "귀선은 통항 규칙을 지키지 않고 있음</br>
          You are not ______________ with traffic regulations"
          ,//13
          "항해를 재개하시오</br>
          Get ______________ "
          ,
          "본선은 해적의 공격을 받고 있음</br>
          I am under attack by ______________"
          ,//15
          "본선은 우현쪽으로 위험하게 횡경사 되었음</br>
          I have dangerous ______________ to starboard."
          ,
          "본선은 표류중임</br>
          I am ______________"
          ,
          "본선은 좌초되었음</br>
          I am ______________"
          ,//18
          "닻은 해저에서 떨어졌음</br>
          Anchor is ______________"
          ,
          "구명정을 고박하고 보고하시오</br>
          ______________ the lifeboat and report"
          ,//20
          "실종된 여객을 수색하고 보고하시오</br>
          Search for missing ______________ member and report"
          ,
          "직무상의 안전에 대한 훈련에 참가하는 것은 강제적임</br>
          Participation in training sessions on occupational safety is ______________"
          ,
          "허락 없이 무인기관실에 들어가지 마시오</br>
          Do not enter the ______________ engine room with out permission"
          ,//23
          "모든 선원에게 폭풍에 대행 설명하시오</br>
          ______________ all crew member on the storm"
          ,//24
          "통풍 시스템은 작동 가능함</br>
          The ______________ system is operational"
          ,//25
        );

        $random_answers_medium=array(
        "direction",
        "approaching",
        "leading",
        "cable",
        "growing",//5
        "lookout",
        "breakwater",
        "sharp",
        "quarantine",
        "custom", //10
        "immigration",
        "dismissed",
        "complying",
        "underway",
        "pirate",//15
        "list",
        "adrift",
        "aground",
        "aweigh",
        "secure",//20
        "passenger",
        "mandatory",
        "unmanned",
        "brief",
        "ventilation",//25
        );

        $random_placeholder_medium=array(
        "D",
        "A",
        "L",
        "C",
        "G", //5
        "L",
        "B",
        "S",
        "Q",
        "C", //10
        "I",
        "D",
        "C",
        "U",
        "P",
        "L",
        "A",
        "A",
        "A",
        "S",//20
        "P",
        "M",
        "U",
        "B",
        "V",
        );
//easy
          $random_questions_easy=array(
          "예인줄을 떼어냈다.</br>
          ______ go tug line."
          ,
          "도선사 승선함</br>
          _________ on board"
          ,
          "퇴선 훈련을 끝냄</br>
          Finished _______ ship drill."
          ,
          "모든 승무원을 소화 부서에 소집하고 인원 점검을 하였다.</br>
          ________ all crew at fire station and called the roll"
          ,
          "모든 승무원에게 구명조끼의 착용법을 교육하였다.</br>
          instructed all crew in miehod of donning _________." //5
          ,
          "비상조타훈련을 종료하였다.</br>
          Finished emergency _________ drill."
          ,
          "소화훈련을 실시하고 모든 작업원을 소화 부서에 배치하였다.</br>
          Practised fire ______ and stationed all hands for fire fighting."
          ,
          "모든 장비 양호함.</br>
          All equipment found in good _______."
          ,
          "탈출통로를 점검하고 보고하시오</br>
          Check the ______________ routes and report"
          ,
          "연기는 유독성인가?</br>
          Is smoke ______________ "
          ,//10
          "감아들이기를 멈추시오</br>
          stop ______________ "
          ,
          "일반 비상경보를 작동하시오</br>
          Operate the ______________ emergency alarm"
          ,
          "본선은 충돌한 후 침몰하고 있음</br>
          i am ______________ after collision"
          ,
          "침수는 진압되고 있음</br>
          ______________ is under control"
          ,
          "본선은 좌초하였음</br>
          I am ______________"
          ,//15
          "해저의 저질은 바위임</br>
          Sea bottom ______________"
          ,
          "조석의 상태는 어떤가?</br>
          What is state of ______________ ?"
          ,
          "구명부환을 점검하고 보고하시오</br>
          Check the ______________ and report"
          ,
          "본선은 주묘중임</br>
          i am ______________ anchor"
          ,
          "본선은 투묘지로 가고 있음</br>
          we are going to ______________ "
        );//20

          $random_answers_easy=array(
          "let",
          "pilot",
          "abandon",
          "mustered",
          "lifejacket", //5
          "steering",
          "drill",
          "condition",
          "escape",
          "toxic",//10
          "heaving",
          "general",
          "sinking",
          "flooding",
          "aground",//15
          "rocky",
          "tide",
          "lifebuoys",
          "dragging",
          "anchorage",
          );

          $random_placeholder_easy=array(
          "L",
          "P",
          "A",
          "M",
          "L", //5
          "S",
          "D",
          "C",
          "E",
          "T",//10
          "H",
          "G",
          "S",
          "F",
          "A",//15
          "R",
          "T",
          "L",
          "D",
          "A",
          );
//hard
          $random_questions_hard=array(
          "도선사가 하선하고 선장이 조선을 지휘함</br>
          Pilot away and master ___________ vessel."
          ,
          "예인줄이 본선의 프로펠러에 감겼다.</br>
          Tug lines, released from tug boat, _______ her properller."
          ,
          "계류삭을 감아들이던 도중, 갑판원 박씨의 오른쪽 팔이 계류 윈치의 위핑 드럼에 말려들어가 골절 되었다.</br>
          While taking in mooring lines, sailor, Mr Park, got his right arm _______, beingcaught in warping drum of mooring winch."
          ,
          "본선은 횡경사를 중지시키기 위하여 화물을 투하하겠음</br>
          I will ______________ cargo to stop listing"
          ,
          "직무상의 안전에 대한 훈련 계획을 준비하시오</br>
          Prepare a training plan for ______________ safety"
          ,//5
          "화재는 거주구역으로 확산중임</br>
          Fire ______________  to accommodation area"
          ,
          "선박은 감항성이 있는가?</br>
          Is the vessel ______________ ?"
          ,
          "레이더 안테나는 맹목구간이 있는가?</br>
          Does the radar have any ______________ sector?"
          ,//8
          );

          $random_answers_hard=array(
          "conning",
          "fouled",
          "fractured",
          "jettison",
          "occupational",//5
          "spreading",
          "seaworthy",
          "blind",
          );

          $random_placeholder_hard=array(
          "C",
          "F",
          "F",
          "J",
          "O",//5
          "S",
          "S",
          "B",
          );


$random_word1 = $random_questions_medium[$random_number201];
$random_word2 = $random_questions_medium[$random_number202];
$random_word3 = $random_questions_medium[$random_number203];
$random_word4 = $random_questions_medium[$random_number204];
$random_word5 = $random_questions_easy[$random_number301];
$random_word6 = $random_questions_hard[$random_number1];
$random_word7 = $random_questions_hard[$random_number2];

$random_placeholder1 = $random_placeholder_medium[$random_number201];
$random_placeholder2 = $random_placeholder_medium[$random_number202];
$random_placeholder3 = $random_placeholder_medium[$random_number203];
$random_placeholder4 = $random_placeholder_medium[$random_number204];
$random_placeholder5 = $random_placeholder_easy[$random_number301];
$random_placeholder6 = $random_placeholder_hard[$random_number1];
$random_placeholder7 = $random_placeholder_hard[$random_number2];

$_SESSION['random_answer_word2-1'] = $random_answers_medium[$random_number201];
$_SESSION['random_answer_word2-2'] = $random_answers_medium[$random_number202];
$_SESSION['random_answer_word2-3'] = $random_answers_medium[$random_number203];
$_SESSION['random_answer_word2-4'] = $random_answers_medium[$random_number204];
$_SESSION['random_answer_word2-5'] = $random_answers_easy[$random_number301];
$_SESSION['random_answer_word2-6'] = $random_answers_hard[$random_number1];
$_SESSION['random_answer_word2-7'] = $random_answers_hard[$random_number2];
?>

<style>

.question-box{
  margin-left: 30px;
}

.question-box input[type=text] {
  width:20%;
  border: 2px solid #aaa;
  border-radius:4px;
}

.answerbelow {
  line-height: 80px;
  font-family: arial;
  font-size: 20px;
  padding-left: 30px;
}

p{
  padding-left: 30px;
  font-size: 11px;
}
</style>

</br>
<a class="answerbelow"> 03. 단어 (II) -  다음 문제에 답하시오.
</br>
</a>

<form action="04.illustrations.php" method="get" autocomplete="off">
<div class="question-box">
    <p> 14. <?php echo $random_word1?></p>
    <p><input type="text" placeholder="<?php echo $random_placeholder1?>" name="w2-1"/></p>
    </br>

    <p> 15. <?php echo $random_word2?></p>
    <p><input type="text" placeholder="<?php echo $random_placeholder2?>" name="w2-2"/></p>
    </br>

    <p> 16. <?php echo $random_word3?></p>
    <p><input type="text" placeholder="<?php echo $random_placeholder3?>" name="w2-3"/></p>
    </br>

    <p> 17. <?php echo $random_word4?></p>
    <p><input type="text" placeholder="<?php echo $random_placeholder4?>"  name="w2-4"/></p>
    </br>

    <p> 18. <?php echo $random_word5?></p>
    <p><input type="text" placeholder="<?php echo $random_placeholder5?>" name="w2-5"/></p>
    </br>

    <p> 19. <?php echo $random_word6?></p>
    <p><input type="text" placeholder="<?php echo $random_placeholder6?>" name="w2-6"/></p>
    </br>

    <p> 20. <?php echo $random_word7?></p>
    <p><input type="text" placeholder="<?php echo $random_placeholder7?>" name="w2-7"/></p>
    </br>

    </br>
    <p><input type="Submit" value="다음 페이지"></p>
    </br>
    </br>
    </br>
</div>


<!--<a href="http://127.0.0.1/students/00.finalscore.php?<?php echo $str; ?>">Click</a>-->
<!--<form action="00.finalscore.php" method="get">
<h2>Please answer below questions</h2>
<h2> 01. From what <input type="text" placeholder="Enter" name="w1"/> are you approaching</h3>
<h2> 02. How is the cable <input type="text" placeholder="Enter" name="w2"/>?</h2>
<h2> <input type="text" name="sentence1" value='$_GET['sentence1''></h2>
<h2> <input type="text" name="sentence1" value=<?php //$sentence1=$_GET['sentence2'];?>>  </h2>
<h2> echo <?php //$sentence1=$_GET['sentence1'];?> </h2>
<h2> echo <?php //$sentence2=$_GET['sentence2'];?> </h2>
<h2> <?php //$sentence1=$_GET['sentence1'];?> </h2>
<h2> <?php //$sentence2=$_GET['sentence2'];?> </h2>
</br>
<input type="Submit" value=제출>
<!--<a href="http://127.0.0.1/students/00.finalscore.php?<?php echo $str; ?>">Click</a>-->
