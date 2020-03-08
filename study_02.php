<?php
include 'header.php';

//$id = $_SESSION['uid'];

if (!isset($_SESSION['username'])){
  echo '안녕하세요 '. $id .' 님 로그인 중입니다.</br>';
} else {
  echo "<h3> 로그인 중이 아닙니다.</br> </h3>";
}

if (!isset($_GET['s1'])){
  echo '</br>영작 문제 미완료';
} else {
  $_SESSION['s1'] = $_GET['s1'];
  $_SESSION['s2'] = $_GET['s2'];
  $_SESSION['s3'] = $_GET['s3'];
  $_SESSION['s4'] = $_GET['s4'];
  $_SESSION['s5'] = $_GET['s5'];
  $_SESSION['s6'] = $_GET['s6'];
  $_SESSION['s7'] = $_GET['s7'];
  echo "영작 문제 완료";
}

//$random_number201= 1;
//$random_number202= 7;
//$random_number203= 17;
//$random_number204= 33;
//$random_number301= 23;
//$random_number1= 20;

$random_number201= mt_rand(0,52);
$random_number202= mt_rand(0,52);
$random_number203= mt_rand(0,52);
$random_number204= mt_rand(0,52);
$random_number301= mt_rand(0,22);
$random_number1= mt_rand(0,20);

  //$random_questions_medium=array(
  //"본선은 화재가 났음",
  //"본선은 즉각적인 지원을 요청함",
  //"본선은 흘수 제약선임",
  //"부산 파일럿 스테이션 도착 예정 시간은 15:00 지방시임",
  //);

  $random_questions_medium=array(
  "S _ _ _ _ _   P _ _ _ _ _ _ 'is documents which have written down some of the vessels
  details and figures which includes but not limited to vessels's LOA, breadth and depth etc."
  ,//0
  "What is IMDG in IMDG Code stands for?"
  ,//1
  "This is always to be expressed in 360 degree notation from north (true north unless otherwise stated).
  Whether this is to TO or FROM a mark can be stated."
  ,//2
  "Ladder attached to platform at vessel's side with flat steps and handrails enabling persons to
  embark/disembark from water or shore"
  ,//3
  "1: A sea room to be kept for safety around a vessel, rock, platform, etc.</br>
  <p class='lable2'>       2: The place assigned to a vessel when anchored or lying alongside a pier, etc.</p>"
  , //4
  "To evacuate crew and passengers from a vessel following a distress"
  ,//5
  "선교 지시록 </br> 회사의 항해 방침에 기초를 둔 당직 지시사항에 따른 선상운영지침서"
  ,//6
  "To assemble crew, passengers or both in a special place for purposes of checking"
  ,//7
  "A vessel which through exceptional circumstances is unable to manoeuvre as required by the COLREGs"
  ,//8
  "Uncontrolled movement at sea under the influence of current, tide or wind"
  ,//9
  "A whistle signal made by the vessel"
  ,//10
  "An area which cannot be scanned by the ship"
  ,//11
  "Concise explanatory information to crew and/or passengers"
  ,//12
  "To turn over"
  ,//13
  "case of death in an accident or shipping disaster"
  ,//14
  "A vessel severely restricted by her draught in her ability to deviate from the course followed in
  relation to the available depth and width of navigable water"
  ,//15
  "A group of vessels which sail together, e.g. through a canal or ice"
  ,//16
  "The intended direction of movement of a vessel through the water"
  ,//17
  "A system of cleaning the cargo tanks by washing them with the cargo of crude oil during discharge"
  ,//18
  "Limit as defined by the observer to give warning when a tracked target or targets will close to within these limits"
  ,//19
  "An emergency reversal operation of the main engine(s) to avoid a collision"
  ,//20
  ".1 The most probable position of a search target at a given time</br>
  <p class='lable2'>.2 The plane of reference to which all data as to the depth on charts are referenced"
  ,//21
  "A clearly marked way in the vessel which has to be followed in case of an emergency"
  ,//22
  "A measure of 6 feet"
  ,//23
  "A member of the watch going around the vessel at certain intervals so that an
  outbreak of fire may be promptly detected; mandatory in vessels carrying more
  than 36 passengers Flooding Major uncontrolled flow of seawater into the vessel"
  ,//24
  "Highest possible speed of a vessel"
  ,//25
  "Often harmful gas produced by fires, chemicals, fuel, etc."
  ,//26
  "Major uncontroled flow of seawater into the vessel"
  ,//27
  "A sound signal of seven short blasts and one prolonged blast given with the vessel's sound system"
  ,//28
  "To keep out of the way of another vessel"
  ,//29
  "What is GMDSS stands for?"
  ,//30
  "The horizontal direction of the vessel's bows at a given moment measured in
  degrees clockwise from north"
  ,//31
  "To set free, let loose, or cast off (of anchors, lines, etc.)"
  ,//32
  "Inclination of the vessel to port side or starboard side"
  ,//33
  "A vessel emitting harmful substances into the air or spilling oil into the sea"
  ,//34
  "To sail or head for a certain position or to continue with the voyage"
  ,//35
  "A deck, space, area, etc., in vessels where, for safety reasons, entry is only
  permitted for authorized crew members"
  ,//36
  "The act of checking how many passengers and crew members are present, e.g. at
  assembly stations, by reading aloud a list of their names"
  ,//37
  "That speed of a vessel allowing time for effective action to be taken under
  prevailing circumstances and conditions to avoid a collision and to be stopped
  within an appropriate distance"
  ,//38
  "What is SWL stands for?"
  ,//39
  "Separation of goods which for different reasons must not be stowed together"
  ,//40
  ".1 Length of chain cable measuring 15 fathoms</br>
<p class='lable2'>     .2 U-shaped link closed with a pin used for connecting purposes"
  ,//41
  "To be in readiness or prepared to execute an order; to be readily available"
  ,//42
  "Final pumping of tank's residues"
  ,//43
  "A person who continues to live in spite of being in an extremely dangerous
  situation, e.g. a shipping disaster."
  ,//44
  "When the light of a buoy or a lighthouse is inoperative"
  ,//45
  "A vessel severely restricted by her draught in her ability to deviate from the
  course followed in relation to the available depth and width of navigable water"
  ,//46
  "To reverse the action of a windlass to lower the anchor until it is clear of the
  hawse pipe and ready for dropping"
  ,//47
  "To reverse the action of a windlass to ease the cable (of anchors)"
  ,//48
  "A vessel which has been destroyed, sunk or abandoned at sea"
  ,//49
  "VTS authorization for a vessel to proceed under conditions specified"
  ,//50
  "What is TSS stands for?"
  ,//51
  "What is VTS stands for?"
  ,//52
  "Not functioning"
  ,//53
);

  $random_answers_medium=array(
  "ships particular"
  ,
  "international maritime dangerous good"
  ,
  "course"
  ,
  "accommodation ladder"
  ,
  "berth"
  , //5
  "abandon vessel"
  ,
  "bridge standing order"
  ,
  "muster"
  ,
  "not under command"
  ,
  "adrift "
  , //10
  "blast"
  ,
  "blind sector"
  ,
  "briefing"
  ,
  "capsize"
  ,
  "casualty"
  ,
  "Vessel constrained by her draft"
  ,
  "convoy"
  ,
  "course made good"
  ,
  "crude oil washing"
  ,
  "closest point of approach"
  ,
  "crash stop"
  ,
  "datum"
  ,
  "escape route"
  ,
  "fathom"
  ,
  "fire patrol"
  ,
  "full speed"
  ,
  "fumes"
  ,
  "flooding"
  ,
  "General emergency alarm"
  ,
  "give way"
  ,
  "global maritime distress safety system"
  ,
  "heading"
  ,
  "let go"
  ,
  "list"
  ,
  "polluter"
  ,
  "proceed"
  ,
  "restricted area"
  ,
  "roll call"
  ,
  "safe speed"
  ,
  "safe working load"
  ,
  "segregation"
  ,
  "shackle"
  ,
  "stand by"
  ,
  "stripping"
  ,
  "survivor"
  ,
  "unlit"
  ,
  "vessel constrained by her draught"
  ,
  "walk out"
  ,
  "walk back"
  ,
  "wreck"
  ,
  "traffic clearance"
  ,
  "traffic separation scheme"
  ,
  "vessel traffic service"
  ,
  "Not functioning"
  ,
  "inoperative"
  ,
);

  $random_hints_medium=array(
  "S_ _ _ _ _ P _ _ _ _ _ _ _ _ _"
  ,
  "I _ _ _ _ _ _ _ _ _ _ _ _ M _ _ _ _ _ _ _ D _ _ _ _ _ _ _ _ G _ _ _"
  ,
  "C _ _ _ _ _"
  ,
  "A _ _ _ _ _ _ _ _ _ _ _ _ L _ _ _ _ _"
  ,
  "B _ _ _ _"
  , //5
  "A _ _ _ _ _ _ V _ _ _ _ _"
  ,
  "B_ _ _ _ _ O_ _ _ _ B _ _ _ _"
  ,
  "M _ _ _ _ _"
  ,
  "N _ _ U _ _ _ _ C _ _ _ _ _ _"
  ,
  "A _ _ _ _ _"
  , //10
  "B _ _ _ _"
  ,
  "B _ _ _ _ S _ _ _ _ _"
  ,
  "B _ _ _ _ _ _ _"
  ,
  "C _ _ _ _ _ _"
  ,
  "C _ _ _ _ _ _ _"
  ,
  "V _ _ _ _ _ C _ _ _ _ _ _ _ _ _ _ B _ H _ _ D _ _ _ _"
  ,
  "C _ _ _ _ _"
  ,
  "C _ _ _ _ _ M _ _ _ G _ _ _"
  ,
  "C _ _ _ _ O _ _ W _ _ _ _ _ _"
  ,
  "C _ _ _ _ _ _ P _ _ _ _ O _ A _ _ _ _ _ _ _"
  ,//20
  "C _ _ _ _ S _ _ _"
  ,
  "D _ _ _ _"
  ,
  "E _ _ _ _ _ R _ _ _ _"
  ,
  "f _ _ _ _ _"
  ,
  "F _ _ _  P _ _ _ _ _"
  ,
  "F _ _ _  S _ _ _ _"
  ,
  "F _ _ _ _"
  ,
  "F _ _ _ _ _ _ _"
  ,
  "G _ _ _ _ _ _  E _ _ _ _ _ _ _ _  A _ _ _ _"
  ,
  "G _ _ _  W _ _ "
  ,
  "G _ _ _ _ _ M _ _ _ _ _ _ _ D _ _ _ _ _ _ _ S _ _ _ _ _ _"
  ,
  "H _ _ _ _ _ _"
  ,
  "L _ _ G _"
  ,
  "L _ _ _"
  ,
  "P _ _ _ _ _ _ _"
  ,
  "P _ _ _ _ _ _"
  ,
  "R _ _ _ _ _ _ _ _ _ A _ _ _"
  ,
  "R _ _ _ C _ _ _"
  ,
  "S _ _ _ S _ _ _ _"
  ,
  "S _ _ _ W _ _ _ _ _ _ L _ _ _"
  ,
  "S _ _ _ _ _ _ _ _ _ _"
  ,
  "S _ _ _ _ _ _"
  ,
  "S _ _ _ _ B _"
  ,
  "S _ _ _ _ _ _ _ _"
  ,
  "S _ _ _ _ _ _ _"
  ,
  "U _ _ _ _"
  ,
  "V _ _ _ _ _ C _ _ _ _ _ _ _ _ _ _ B _ H _ _ D _ _ _ _ _ _"
  ,
  "W _ _ _ O _ _"
  ,
  "W _ _ _ B _ _ _"
  ,
  "W _ _ _ _"
  ,
  "T _ _ _ _ _ _ C _ _ _ _ _ _ _ _"
  ,
  "T _ _ _ _ _ _ S _ _ _ _ _ _ _ _ _ S _ _ _ _ _"
  ,
  "V _ _ _ _ _ T _ _ _ _ _ _ S _ _ _ _ _ _"
  ,
  "I _ _ _ _ _ _ _ _ _ _"
  ,
);

  $random_questions_easy=array(
    "기름 기록부 </br> MARPOL 73/78에 의하여 총톤수 150톤 이상의 모든 유탱커와, 유탱커 이외의 선박으로
    400톤 이상의 모든 선박의 기관구역에서 행하는 기름 관련 제반 작업을 기록한 기록부"
  ,//1
    "폐기물 기록부 </br> 쓰레기 배출작업 또는 완전소각에 대한 사항을 기록하는 기록부"
  ,//2
    "The height from the waterline to the highest point of the vessel"
  ,//3
    "The depth of water which a vessel draws"
  ,//4
    'What is this acronym stands for "ETA" '
  ,//5
    'What is this acronym stands for "ETD" '
  ,//6
    'Major flow of seawater into the vessel'
  ,//7
    "To set free, let loose, or cast off"
  ,//8
    "A vessel which has been destroyed or sunk or abandoned at sea"
  ,//9
    "Navigable part of a waterway"
  ,//10
  ".1 Chain connecting a vessel to the anchor(s)</br>
  <p class='lable2'> .2 Wire or rope primarily used for mooring a ship</br>
  <p class='lable2'> .3 (Measurement) one hundred fathoms or one tenth of a nautical mile"
  ,//11
  "Port for which a vessel is bound"
  ,//12
  "Depth in water at which a vessel floats"
  ,//13
  "Moving of an anchor over the sea bottom involuntarily because it is no longer preventing the movement of the vessel"
  ,//14
  "Being driven along by the wind, tide or current"
  ,//15
  "What is DSC stands for?"
  ,//16
  "What is EPIRB stands for?"
  ,//17
  "What is ETA stands for?"
  ,//18
  "What is ETD stands for?"
  ,//19
  "To lower, e.g. lifeboats, to the water"
  ,//20
  "Escape of liquids such as water, oil, etc., out of pipes, boilers, tanks, etc.,
  or a minor inflow of seawater into the vessel due to damage to the hull"
  ,//21
  "The accidental escape of oil, etc., from a vessel, container, etc., into the sea"
  ,//22
  "Navigable part of a waterway"
  ,//23
  "A vessel's reduced speed in circumstances where it may be required to use the
  engines at short notice"
  ,//24
);


  $random_answers_easy=array(
  "oil record book"
  ,
  "garbage record book"
  ,
  "air draft"
  ,
  "draft"
  ,
  "estimated time of arrival" //5
  ,
  "estimated time of departure"
  ,
  "flooding"
  ,
  "let go"
  ,
  "wreck"
  ,
  "fairway" //10
  ,
  "cable "
  ,
  "destination"
  ,
  "draft"
  ,
  "dragging"
  ,
  "drifting"
  ,
  "digital selective calling"
  ,
  "emergency position indicating radio beacon"
  ,
  "estimated time of arrival"
  ,
  "estimated time of departure"
  ,
  "launch"
  ,
  "leaking"
  ,
  "spill"
  ,
  "fairway"
  ,
  "manoeuvring speed"
  ,
);

  $random_hints_easy=array(
  "O_ _  R _ _ _ _ _  B _ _ _ _"
  ,
  "G_ _ _ _ _ _ R _ _ _ _ _ B _ _ _"
  ,
  "A_ _ D_ _ _ _"
  ,
  "D _ _ _ _"
  ,
  "E_ _ _ _ _ _ _ _ T _ _ _ O _ A _ _ _ _ _ _" //5
  ,
  "E_ _ _ _ _ _ _ _ T _ _ _ O _ D _ _ _ _ _ _ _ _"
  ,
  'F_ _ _ _ _ _ _'
  ,
  "L_ _ G _"
  ,
  "W _ _ _ _"
  ,
  "F _ _ _ _ _ _" //10
  ,
  "C _ _ _ _"
  ,
  "D _ _ _ _ _ _ _ _ _ _"
  ,
  "D _ _ _ _"
  ,
  "D _ _ _ _ _ _ _"
  ,
  "D _ _ _ _ _ _ _"
  ,
  "D_ _ _ _ _ _ S _ _ _ _ _ _ _ _ C _ _ _ _ _ _"
  ,
  "E _ _ _ _ _ _ _ _ P _ _ _ _ _ _ _ I _ _ _ _ _ _ _ _ _ R _ _ _ _ B _ _ _ _ _"
  ,
  "E _ _ _ _ _ _ _ _ T _ _ _ O _ A _ _ _ _ _ _"
  ,
  "E _ _ _ _ _ _ _ _ T _ _ _ O _ D _ _ _ _ _ _ _ _"
  ,
  "L _ _ _ _ _"
  ,
  "L _ _ _ _ _ _"
  ,
  "S _ _ _ _"
  ,
  "F _ _ _ _ _ _"
  ,
  "M _ _ _ _ _ _ _ _ _ _ S _ _ _ _"
  ,
);

  $random_questions_hard=array(
  "A group of vessels which sail together, e.g. through a canal or ice."
  ,//1
  "The general direction from which the wind blows; opposite of leeward"
  ,//2
  "Place on deck, in mess rooms, etc., assigned to crew and passengers
  where they have to meet according to the muster list when the
  corresponding alarm is released or announcement made"
  ,//3
  "Orders of the Master to the officer of the watch which s/he must comply with"
  ,//4
  "All equipment, such as pilot ladder, accommodation ladder, hoist, etc., necessary for a safe transfer of the pilot"
  ,//5
  "The speed of a vessel adjusted to that of a pilot boat at which the pilot can safely embark/disembark"
  ,//6
  "A seamark, i.e. a buoy, indicating the north, east, south or west,
  i.e. the cardinal points from a fixed point such as a wreck, shallow water, banks, etc."
  ,//7
  "The four main points of the compass: north, east, south and west"
  ,//8
  ".1 To make sure that equipment etc. is in proper condition or that everything is correct and safe</br>
  <p class='lable2'> .2 To regulate motion of a cable, rope or wire when it is running out too fast"
  ,//9
  "Indicates whether different goods can be safely stowed together in one cargo space or in an adjacent hold."
  ,//10
  "A group of crew members trained for fighting flooding in the vessel"
  ,//11
  "Attending a vessel to be available in case of need, e.g. ice-breaker, tug, etc."
  ,//12
  "A vessel restricted by her ability to manoeuvre by the nature of her work"
  ,//13
  "a cable used by helicopters for lifting or lowering persons in a pick-up operation"
  ,//14
  "To throw goods overboard in order to lighten the vessel or improve its stability
  in case of an emergency"
  ,//15
  "To have seawater flowing into the vessel due to hull damage, or hatches awash
  and not properly closed"
  ,//16
  "An object such as a wreck, net, etc., which blocks a fairway, route, etc."
  ,//17
  "An appointment between vessels normally made on radio to meet in a certain area
  or position"
  ,//18
  "Orders of the Master to the officer of the watch which he/she must comply with"
  ,//19
  "Describes a vessel which is not at anchor, or made fast to the shore, or aground"
  ,//20
  "Vessel still afloat, abandoned at sea"
  ,//21
);

  $random_answers_hard=array(
  "convoy"
  ,
  "windward"
  ,
  "assembly station "
  ,
  "standing orders"
  ,
  "boarding arrangement"
  ,
  "boarding speed"
  ,
  "cardinal buoy"
  ,
  "cardinal point"
  ,
  "check"
  ,
  "compatibility"
  ,
  "damage control team"
  ,
  "escort"
  ,
  "hampered vessel"
  ,
  "hoist"
  ,
  "jettison"
  ,
  "make water"
  ,
  "obstruction"
  ,
  "Rendezvous"
  ,
  "standing order"
  ,
  "under way"
  ,
  "derelict"
  ,
);

  $random_hints_hard=array(
  "C _ _ _ _ _"
  ,
  "W _ _ _ _ _ _ _"
  ,
  "A_ _ _ _ _ _ _ _ S _ _ _ _ _ _"
  ,
  "S_ _ _ _ _ _ _ O _ _ _ _ _"
  ,
  "B _ _ _ _ _ _ _ A _ _ _ _ _ _ _ _ _ _"
  ,
  "B _ _ _ _ _ _ _ S _ _ _ _"
  ,
  "C _ _ _ _ _ _ _ B _ _ _"
  ,
  "C _ _ _ _ _ _ _ P _ _ _ _"
  ,
  "C _ _ _ _"
  ,
  "C _ _ _ _ _ _ _ _ _ _ _ _"
  ,
  "D _ _ _ _ _ C _ _ _ _ _ _ T _ _ _"
  ,
  "E _ _ _ _ _"
  ,
  "H _ _ _ _ _ _ _ V _ _ _ _ _"
  ,
  "H _ _ _ _"
  ,
  "J _ _ _ _ _ _ _"
  ,
  "M _ _ _ W _ _ _ _"
  ,
  "O _ _ _ _ _ _ _ _ _ _"
  ,
  "R _ _ _ _ _ _ _ _ _"
  ,
  "S _ _ _ _ _ _ _ O _ _ _ _ _"
  ,
  "U _ _ _ _ W _ _"
  ,
  "D _ _ _ _ _ _ _"
  ,
);

//only for the question
  $random_word1 = $random_questions_medium[$random_number201];
  $random_word2 = $random_questions_medium[$random_number202];
  $random_word3 = $random_questions_medium[$random_number203];
  $random_word4 = $random_questions_medium[$random_number204];
  $random_word5 = $random_questions_easy[$random_number301];
  $random_word6 = $random_questions_hard[$random_number1];

  $random_hints1 = $random_hints_medium[$random_number201];
  $random_hints2 = $random_hints_medium[$random_number202];
  $random_hints3 = $random_hints_medium[$random_number203];
  $random_hints4 = $random_hints_medium[$random_number204];
  $random_hints5 = $random_hints_easy[$random_number301];
  $random_hints6 = $random_hints_hard[$random_number1];
//only for answer
  $_SESSION['random_answer_word1'] = $random_answers_medium[$random_number201];
  $_SESSION['random_answer_word2'] = $random_answers_medium[$random_number202];
  $_SESSION['random_answer_word3'] = $random_answers_medium[$random_number203];
  $_SESSION['random_answer_word4'] = $random_answers_medium[$random_number204];
  $_SESSION['random_answer_word5'] = $random_answers_easy[$random_number301];
  $_SESSION['random_answer_word6'] = $random_answers_hard[$random_number1];
  //$_SESSION['random_answer4'] = $random_answers[$random_number4];
  //$_SESSION['random_answer5'] = $random_answers[$random_number5];

?>

          <style>
          .answerbelow {
            line-height: 130px;
            font-family: arial;
            font-size: 20px;
            padding-left: 30px;
          }

          .question-box input[type=text] {
            line-height: auto;
            width:10%;
            border: 2px solid #aaa;
            border-radius:3px;
          }

          p{
            padding-left: 50px;
            font-size: 11x;
          }

          #popup1{display:none; background:#efefef; border:1px solid black; width:30%; height:20px; margin-left: 50px;}
          #popup2{display:none; background:#efefef; border:1px solid black; width:30%; height:50px; margin-left: 50px;}
          #popup3{display:none; background:#efefef; border:1px solid black; width:30%; height:50px; margin-left: 50px;}
          #popup4{display:none; background:#efefef; border:1px solid black; width:30%; height:50px; margin-left: 50px;}
          #popup5{display:none; background:#efefef; border:1px solid black; width:30%; height:50px; margin-left: 50px;}
          #popup6{display:none; background:#efefef; border:1px solid black; width:30%; height:50px; margin-left: 50px;}

          div input.lable{
            width: 7.6%;
            margin-left: : 50px;
            /*font-size: 28px;
            padding: 100px;위에 왜 안되는지 모르겠음*/
          }

          .lable2{
            margin-left: 30px;
          }

          .hint {
            color: green;
            background:#efefef; border:1px solid black; width:6%; border-radius: 10px;
            font-size: 14px;
          }

          .box {
            background:#efefef; border:1px solid black; width:50%; border-radius: 10px;
            font-size: 14px; line-height: 40px;
          }

          .wide {
            width: 300%;
          }

        </style>
<form action="03.wordguessing-2.php" method="get" autocomplete="off">
</br>
<a class="answerbelow"> 02. 단어 (I)
</br>
</a>


<div class="question-box">
    <p> 08. <?php echo $random_word1?></p>
    <p class="wide"><input type="text" placeholder="Enter" name="w1"/></p>
    <p><input type= "colar" class="hint" onclick="alert('<?php echo $random_hints1 ?>')" value=" 1번 힌트"></p></br>
        <!--<div class="hint1">
        <p><color class="box" onclick="document.getElementById('popup1').style.display='block'">1번 힌트</button></br>
        <div id="popup1">
        <?php //echo  $random_hints1?>
        <color class="box" onclick="document.getElementById('popup1').style.display='none'">문제로 복귀</button></p>
        </div>-->


    </br><p> 09. <?php echo $random_word2?></p>
    <p class="wide"><input type="text" placeholder="Enter" name="w2"/></p>
    <p><input type= "colar" class="hint" onclick="alert('<?php echo $random_hints2?>')" value=" 2번 힌트"></p></br>

    </br><p> 10. <?php echo $random_word3?></P>
    <p class="wide"><input type="text" placeholder="Enter" name="w3"/></p>
    <p><input type= "colar" class="hint" onclick="alert('<?php echo $random_hints3?>')" value=" 3번 힌트"></p></br>

    </br><p> 11. <?php echo $random_word4?></P>
    <p class="wide"><input type="text" placeholder="Enter" name="w4"/></p>
    <p><input type= "colar" class="hint" onclick="alert('<?php echo $random_hints4?>')" value=" 4번 힌트"></p></br>

    </br><p> 12. <?php echo $random_word5?></P>
    <p class="wide"><input type="text" placeholder="Enter" name="w5" autocomplete="off"/></p>
    <p><input type= "colar" class="hint" onclick="alert('<?php echo $random_hints5?>')" value=" 5번 힌트"></p></br>

    </br><p> 13. <?php echo $random_word6?></P>
    <p class="wide"><input type="text" placeholder="Enter" name="w6"/></p>
    <p><input type= "colar" class="hint" onclick="alert('<?php echo $random_hints6?>')" value=" 6번 힌트"></p></br>

    </br><p><input type="Submit" value="다음 페이지">
  </div>
  </form>
</div>
  </br></br></br>
<!--<div class="hint-box">--!>
