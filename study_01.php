<?php
//$Q1 = "01. 본선은 화재가 났음";
//echo $Q1;
  require "header.php";
//echo $_SESSION['uid'];
  //$id = $_SESSION['uid'];

$id = $_SESSION['uid'];

  if (!isset($_SESSION['username'])){
    echo '안녕하세요 '. $id .' 님 로그인 중입니다.';
  } else {
    echo "<h3> 로그인 중이 아닙니다. </h3>";
  }
?>
            <style>
            .answerbelow {
              line-height: 80px;
              font-family: arial;
              font-size: 20px;
              padding-left: 30px;
            }

            .question-box{
              margin-left: 30px;
            }
            /*.hint-box {
              margin-left: 30px;
            }*/

            .question-box input[type=text] {
              width:50%;
              border: 2px solid #aaa;
              border-radius:4px;
            }


            #popup{display:none; background:#efefef; border:1px solid black; width:50%; height:50px;}

            </style>
<?php

  //$random_number201= 1;
  //$random_number202= 6;
  //$random_number203= 16;
  //$random_number204= 29;
  //$random_number301= 3;
  //$random_number302= 11;
  //$random_number1= 5;

  $random_number201= mt_rand(0,38);
  $random_number202= mt_rand(0,38);
  $random_number203= mt_rand(0,38);
  $random_number204= mt_rand(0,38);
  $random_number301= mt_rand(0,22);
  $random_number302= mt_rand(0,22);
  $random_number1= mt_rand(0,7);

//medium
  $random_questions_medium=array(
  "본선은 화재가 났음",
  "본선은 즉각적인 지원을 요청함",
  "본선은 흘수 제약선임",
  "부산 파일럿 스테이션 도착 예정 시간은 15:00 지방시임",
  "출항 부서 배치", //5
  "출항 부서 배치",//6
  "선장이 조선을 지휘함",//7
  "묘는 파주력이 있는가",//8
  "불길은 진압되고 있는가?",//9
  "폭발의 위험성이 있는가?",//10
  "어떠한 종류의 원조(지원)를 필요로 하는가?",//11
  "부상자에 대해 보고하시오.",//12
  "본선은 퇴선하지 않겠음",//13
  "몇 명의 사람이 선내에 남을 것인가?",//14
  "도선사의 이동을 위하여 VHF 채널 8번으로 변경하시오",//15
  "본선은 저속으로 밖에 항진할 수 없음",//16
  "귀선의 현재 위치에서 투묘하는 것은 위험함",//17
  "귀선의 현재 위치에서 머무르는것은 위험함",//18
  "200 도로 변침하는 것은 위험함",//19
  "귀선은 통항 규칙을 지키지 않고 있음",//20
  "도선사는 언제 승선하는가?",//21
  "귀선은 항해중인가?",//22
  "본선은 항해중이 아님",//23
  "귀선은 다른 위치에 투묘해야 함",//24
  "귀선의 레이더는 작동중인가?",//25
  "본선의 레이더는 작동중임",//26
  "귀선의 선적국은 어디인가?",//27
  "귀선은 어느 방향에서 접근중인가?",//28
  "귀선의 최후 기항지는 어디인가?",//29
  "귀선의 선수 흘수는 얼마인가?",//30
  "귀선의 위치에서 풍향 및 풍속은 어떠한가?",//31
  "수색의 결과는 부정적임",//32
  "당신은(그쪽) 생존자들을 인양할 수 있는가",//33
  "항해상의 위험이 존재하는가?",//34
  "매 10분마다 투묘 위치를 점검하시오",//35
  "레이더 상에 위험한 표적이 없음",//36
  "본선은 등흘수임",//37
  "구명정은 고박되었음",//38
  "수밀문을 폐쇄하고 보고하시오",//39
);

  $random_answers_medium=array(
  "i am on fire",
  "we need immediate assistant",
  "i am a vessel constrained by her draft",
  "eta to busan pilot station is 15:00 local time",
  "stationed all hand for leaving port", //5
  "stand by for leaving port",
  "master conning vessel",
  "is the anchor holding",
  "is the fire under control",
  "is there danger of explosion",//10
  "what kind of assistance is required",
  "report injured person",
  "i will not abandon vessel",
  "how many persons will stay on board",
  "change to vhf channel to 8 for pilot transfer",//15
  "i can only proceed at slow speed",
  "it is dangerous to anchor in your present position",
  "it is dangerous to remain in your present position",
  "it is dangerous to alter course to 200 degree",
  "you are not complying with traffic regulations",//20
  "when will the pilot onboard",
  "are you underway",
  "i am not underway",
  "you must anchor in different position",
  "is your radar in operation",//25
  "my radar is in operation",
  "what is your flag state",
  "from what direction are you approaching",
  "what is your port of destination",
  "what is your forward draft",//30
  "what is the wind direction and force in your position",
  "the result of search is negative",
  "can you pick up survivors",
  "are there dangers to navigation",
  "check the anchor position every 10 minutes",//35
  "there is no dangerous targets on the radar",
  "the vessel is on even keel",
  "lifeboat is secured",
  "close watertight doors and report",//39
);

//easy
  $random_questions_easy=array(
  "사람이 선외로 떨어지다",
  "양묘를 개시함",
  "닻이 해저에서 떨어짐",
  "도선사 승선함",
  "도선사가 하선함",
  "몇 명의 사람이 선내에 남을 것인가",
  "수색을 중지하시오",
  "부상자 없음",
  "항해상 위험이 없음",
  "본선은 도선사를 요청함",
  "귀선의 위치는 어디인가?",
  "귀선의 건현은 얼마인가?",
  "본선 건현은 10 미터임",
  "귀선의 위치는 어디인가?",
  "귀선의 현재 침로와 속력은?",
  "기관을 정지하시오",
  "도선사용 사다리를 대기하시오",
  "귀선의 속도를 증가시키시오",
  "귀선의 속도를 감소시키시오",
  "귀선의 현재 최대 흘수는 얼마인가?",//20
  "귀선의 최대 높이는 얼마인가?",
  "사고 보고서를 준비하시오",
  "응급처치를 제공하시오",
);

  $random_answers_easy=array(
  "man overboard",
  "started heaving up anchor",
  "anchor aweigh",
  "pilot on board",
  "pilot away",
  "how many persons will stay on board",
  "stop search",
  "no injured persons",
  "no danger to navigation",
  "I require a pilot",
  "what is your position",
  "what is your freeboard",
  "my freeboard is 10 meters",
  "what is your present position",
  "what is your present course and speed",
  "stop engines",
  "stand by pilot ladder",
  "increase your speed",
  "reduce your speed",
  "what is your present maximum draft",
  "what is your present maximum airdraft",
  "prepare accident report",
  "provide first aid",
);

//hard
  $random_questions_hard=array(
  "방파제 입구를 지나 완전히 진입함",
  "닻을 풀어서 투묘 준비 상태로 하시오",
  "본선은 도선사를 요청하지 않음. 본선은 도선 면제증서를 소지하고 있음",
  "귀선은 도선 면제되었음",
  "진입하기 전에 통항 허가가 요구됨",
  "닻을 풀어서 투묘준비 상태로 하시오",
  "소방원 장구는 완전치 않음",
  "본선은 아직도 타력이 있는가",//10
);

  $random_answers_hard=array(
  "cleared in breakwater enterance",
  "walk out the anchor",
  "I do not require a pilot I am holder of pilotage exemption certificate",
  "you are exempted from pilotage",
  "traffic clearance is required before entering",
  "walk out the anchor",
  "the firemen's outfits are not complete",
  "is vessel still making water",
);

  $random_sentences1 = $random_questions_medium[$random_number201];
  $random_sentences2 = $random_questions_medium[$random_number202];
  $random_sentences3 = $random_questions_medium[$random_number203];
  $random_sentences4 = $random_questions_medium[$random_number204];
  $random_sentences5 = $random_questions_easy[$random_number301];
  $random_sentences6 = $random_questions_easy[$random_number302];
  $random_sentences7 = $random_questions_hard[$random_number1];

  $_SESSION['random_answer_sentence1'] = $random_answers_medium[$random_number201];
  $_SESSION['random_answer_sentence2'] = $random_answers_medium[$random_number202];
  $_SESSION['random_answer_sentence3'] = $random_answers_medium[$random_number203];
  $_SESSION['random_answer_sentence4'] = $random_answers_medium[$random_number204];
  $_SESSION['random_answer_sentence5'] = $random_answers_easy[$random_number301];
  $_SESSION['random_answer_sentence6'] = $random_answers_easy[$random_number302];
  $_SESSION['random_answer_sentence7'] = $random_answers_hard[$random_number1];
?>

  </br>
  <a class="answerbelow"> 01. 영작 - 다음 주어진 문장을 영작하시오.
  </br>
  </a>

<form action="study_02.php" method="get" autocomplete="off">

  <div class="question-box">
      01. <?php echo $random_sentences1?></br>
      &nbsp;&nbsp;<?php echo "->".$random_answers_medium[$random_number201]?></br>
      <audio src ="../20200107/sound/test.mp3" controls></audio></br>
      </br>
      </br>
      02. <?php echo $random_sentences2?></br>
      <?php echo "-> ".$random_answers_medium[$random_number202]?></br>
      &nbsp;&nbsp;<audio src ="../20200107/sound/test.mp3" controls></audio></br>
      </br>
      </br>
      03. <?php echo $random_sentences3?></br>
      <?php echo "-> ".$random_answers_medium[$random_number203]?></br>
      &nbsp;&nbsp;<audio src ="../20200107/sound/test.mp3" controls></audio></br>
      </br>
      </br>
      04. <?php echo $random_sentences4?></br>
      <?php echo "-> ".$random_answers_medium[$random_number204]?></br>
      &nbsp;&nbsp;<audio src ="../20200107/sound/test.mp3" controls></audio></br>
      </br>
      </br>
      05. <?php echo $random_sentences5?></br>
      <?php echo "-> ".$random_answers_medium[$random_number301]?></br>
      &nbsp;&nbsp;<audio src ="../20200107/sound/test.mp3" controls></audio></br>
      </br>
      </br>
      06. <?php echo $random_sentences6?></br>
      <?php echo "-> ".$random_answers_medium[$random_number302]?></br>
      &nbsp;&nbsp;<audio src ="../20200107/sound/test.mp3" controls></audio></br>
      </br>
      </br>
      07. <?php echo $random_sentences7?></br>
      <?php echo "-> ".$random_answers_medium[$random_number1]?></br>
      &nbsp;&nbsp;<audio src ="../20200107/sound/test.mp3" controls></audio></br>
      </br>
      <input type="Submit" value="다음 페이지">
      </br>
      </br>
    </div>
    </form>
    <!--<div class="hint-box">
      </br></br>
      <h3> 힌트 </h3>
      <button onclick="document.getElementById('popup').style.display='block'">1번</button>
      <div id="popup">
      I am on ---
      <button onclick="document.getElementById('popup').style.display='none'">문제로 복귀</button>
    </div>--!>
