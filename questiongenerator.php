<?php
//$Q1 = "01. 본선은 화재가 났음";
//echo $Q1;
  require "header.php";
  //echo $_SESSION['uid'];
  //$id = $_SESSION['uid'];

  if (!isset($_SESSION['username'])){
    echo '안녕하세요 '. $id .' 님 로그인 중입니다.';
  } else {
    echo "<h3> 로그인 중이 아닙니다. </h3>";
  }
?>
            <style>
            .question-box{
              margin-left: 30px;
            }

            .hint-box {
              margin-left: 30px;
            }

            input[type=text] {
              width:50%;
              border: 2px solid #aaa;
              border-radius:4px;
            }
            .answerbelow {
              line-height: 80px;
              font-family: arial;
              font-size: 20px;
              padding-left: 30px;
            }

            #popup{display:none; background:#efefef; border:1px solid black; width:50%; height:50px;}

            </style>
<?php
$random_number1= mt_rand(0,4);
$random_number2= mt_rand(0,4);
$random_number3= mt_rand(0,4);
$random_number4= mt_rand(0,4);
$random_number5= mt_rand(0,4);

  $random_questions=array(
  "본선은 화재가 났음",
  "본선은 즉각적인 지원을 요청함",
  "본선은 흘수 제약선임",
  "부산 파일럿 스테이션 도착 예정 시간은 15:00 지방시임",
  "사람이 선외로 떨어지다.");

  $random_sentences1 = $random_questions[$random_number1];
  $random_sentences2 = $random_questions[$random_number2];
  $random_sentences3 = $random_questions[$random_number3];
  $random_sentences4 = $random_questions[$random_number4];
  $random_sentences5 = $random_questions[$random_number5];

  $random_answers=array(
  "I am on fire",
  "We need immedeate assistant",
  "I am vessel constranined by her draught",
  "ETA to busan pilot station is 15:00",
  "Man overboard");

  $random_answer1 = $random_answers[$random_number1];
  $random_answer2 = $random_answers[$random_number2];
  $random_answer3 = $random_answers[$random_number3];
  $random_answer4 = $random_answers[$random_number4];
  $random_answer5 = $random_answers[$random_number5];
  ?>

  </br>
  <a class="answerbelow"> 01. 영작 - 다음 주어진 문장을 영작하시오.
  </br>
  </a>

  <div class="question-box">
      01. <?php echo $random_sentences1?></br>
      <p><input type="text" placeholder="Enter" name="s1"/></p>
      </br>
      02. <?php echo $random_sentences2?></br>
      <p> <input type="text" placeholder="Enter" name="s2"/></p>
      </br>
      03. <?php echo $random_sentences3?></br>
      <p><input type="text" placeholder="Enter" name="s3"/></p>
      </br>
      04. <?php echo $random_sentences4?>
      <p><input type="text" placeholder="Enter" name="s4"/></p>
      </br>
      05. <?php echo $random_sentences5?>
      <p><input type="text" placeholder="Enter" name="s5"/></p>
      </br>
      <input type="Submit" value=제출>
    </div>
    </form>
    <div class="hint-box">
      </br></br>
      <h3> 힌트 </h3>
      <button onclick="document.getElementById('popup').style.display='block'">1번</button>
      <div id="popup">
      I am on ---
      <button onclick="document.getElementById('popup').style.display='none'">문제로 복귀</button>
    </div>


  <div class="question-box">
      01. <?php echo $random_answer1?></br>
      <p><input type="text" placeholder="Enter" name="s1"/></p>
      </br>
      02. <?php echo $random_answer2?></br>
      <p> <input type="text" placeholder="Enter" name="s2"/></p>
      </br>
      03. <?php echo $random_answer3?></br>
      <p><input type="text" placeholder="Enter" name="s3"/></p>
      </br>
      04. <?php echo $random_answer4?>
      <p><input type="text" placeholder="Enter" name="s4"/></p>
      </br>
      05. <?php echo $random_answer5?>
      <p><input type="text" placeholder="Enter" name="s5"/></p>
      </br>
      <input type="Submit" value=제출>
