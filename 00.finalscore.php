<?php
include 'header.php';
//1번
    $string_s_1 = $_SESSION['random_answer_sentence1'];;
    $string_s_2 = $_SESSION['s1'];
    similar_text($string_s_1, $string_s_2, $similarity_s_1);
    echo "1번 $similarity_s_1 점</br>";
    echo '1번 정답 ' . $_SESSION['random_answer_sentence1'] . ' 학생 기입 답안 ' .$string_s_2. '</br></br>';
    //echo "<h4>  1번 정답 </h4>I am on fire <h4> 학생 기입 답안</h4> $string2</br></br>";
//2
    $string_s_3 = $_SESSION['random_answer_sentence2'];
    $string_s_4 = $_SESSION['s2'];
    similar_text($string_s_3, $string_s_4, $similarity_s_2);
    echo "2번 $similarity_s_2 점</br>";
    echo '2번 정답 ' . $_SESSION['random_answer_sentence2'] . ' 학생 기입 답안 ' .$string_s_4. '</br></br>';
//3
    $string_s_5 = $_SESSION['random_answer_sentence3'];
    $string_s_6 = $_SESSION['s3'];
    similar_text($string_s_5, $string_s_6, $similarity_s_3);
    echo "3번 $similarity_s_3 점</br>";
    echo '3번 정답 ' . $_SESSION['random_answer_sentence3'] . ' 학생 기입 답안 ' .$string_s_6. '</br></br>';
//4
    $string_s_7 = $_SESSION['random_answer_sentence4'];
    $string_s_8 = $_SESSION['s4'];
    similar_text($string_s_7, $string_s_8, $similarity_s_4);
    echo "4번 $similarity_s_4 점</br>";
    echo '4번 정답 ' . $_SESSION['random_answer_sentence4'] . ' 학생 기입 답안 ' .$string_s_8. '</br></br>';
//5
    $string_s_9 = $_SESSION['random_answer_sentence5'];
    $string_s_10 = $_SESSION['s5'];
    similar_text($string_s_9, $string_s_10, $similarity_s_5);
    echo "5번 $similarity_s_5 점</br>";
    echo '5번 정답 ' . $_SESSION['random_answer_sentence5'] . ' 학생 기입 답안 ' .$string_s_10. '</br></br>';
//5
    $string_s_11 = $_SESSION['random_answer_sentence6'];
    $string_s_12 = $_SESSION['s6'];
    similar_text($string_s_11, $string_s_12, $similarity_s_6);
    echo "6번 $similarity_s_6 점</br>";
    echo '6번 정답 ' . $_SESSION['random_answer_sentence6'] . ' 학생 기입 답안 ' .$string_s_12. '</br></br>';
//5
    $string_s_13 = $_SESSION['random_answer_sentence7'];
    $string_s_14 = $_SESSION['s7'];
    similar_text($string_s_13, $string_s_14, $similarity_s_7);
    echo "7번 $similarity_s_7 점</br>";
    echo '7번 정답 ' . $_SESSION['random_answer_sentence7'] . ' 학생 기입 답안 ' .$string_s_14. '</br></br>';
//6
    $string_w_1 = $_SESSION['random_answer_word1'];
    $string_w_2 = $_SESSION['w1'];
    similar_text($string_w_1, $string_w_2, $similarity_w_1);
    echo "8번 $similarity_w_1 점</br>";
    echo '8번 정답 ' . $_SESSION['random_answer_word1'] . ' 학생 기입 답안 ' .$string_w_2. '</br></br>';
//7
    $string_w_3 = $_SESSION['random_answer_word2'];
    $string_w_4 = $_SESSION['w2'];
    similar_text($string_w_3, $string_w_4, $similarity_w_2);
    echo "9번 $similarity_w_2 점</br>";
    echo '9번 정답 ' . $_SESSION['random_answer_word2'] . ' 학생 기입 답안 ' .$string_w_4. '</br></br>';
//8
    $string_w_5 = $_SESSION['random_answer_word3'];
    $string_w_6 = $_SESSION['w3'];
    similar_text($string_w_5, $string_w_6, $similarity_w_3);
    echo "10번 $similarity_w_3 점</br>";
    echo '10번 정답 ' . $_SESSION['random_answer_word3'] . ' 학생 기입 답안 ' .$string_w_6. '</br></br>';
//9
    $string_w_7 = $_SESSION['random_answer_word4'];
    $string_w_8 = $_SESSION['w4'];
    similar_text($string_w_7, $string_w_8, $similarity_w_4);
    echo "11번 $similarity_w_4 점</br>";
    echo '11번 정답 ' . $_SESSION['random_answer_word4'] . ' 학생 기입 답안 ' .$string_w_8. '</br></br>';
//10
    $string_w_9 = $_SESSION['random_answer_word5'];
    $string_w_10 = $_SESSION['w5'];
    similar_text($string_w_9, $string_w_10, $similarity_w_5);
    echo "12번 $similarity_w_5 점</br>";
    echo '12번 정답 ' . $_SESSION['random_answer_word5'] . ' 학생 기입 답안 ' .$string_w_10. '</br></br>';
//1
    $string_w_11 = $_SESSION['random_answer_word6'];
    $string_w_12 = $_SESSION['w6'];
    similar_text($string_w_11, $string_w_12, $similarity_w_6);
    echo "13번 $similarity_w_6 점</br>";
    echo '13번 정답 ' . $_SESSION['random_answer_word6'] . ' 학생 기입 답안 ' .$string_w_12. '</br></br>';
//11
    $string_w2_1 = $_SESSION['random_answer_word2-1'];
    $string_w2_2 = $_SESSION['w2-1'];
    similar_text($string_w2_1, $string_w2_2, $similarity_w2_1);
    echo "14번 $similarity_w2_1 점</br>";
    echo '14번 정답 ' . $_SESSION['random_answer_word2-1'] . ' 학생 기입 답안 ' .$string_w2_2. '</br></br>';
//12
    $string_w2_3 = $_SESSION['random_answer_word2-2'];
    $string_w2_4 = $_SESSION['w2-2'];
    similar_text($string_w2_3, $string_w2_4, $similarity_w2_2);
    echo "15번 $similarity_w2_2 점</br>";
    echo '15번 정답 ' . $_SESSION['random_answer_word2-2'] . ' 학생 기입 답안 ' .$string_w2_4. '</br></br>';
//13
    $string_w2_5 = $_SESSION['random_answer_word2-3'];
    $string_w2_6 = $_SESSION['w2-3'];
    similar_text($string_w2_5, $string_w2_6, $similarity_w2_3);
    echo "16번 $similarity_w2_3 점</br>";
    echo '16번 정답 ' . $_SESSION['random_answer_word2-3'] . ' 학생 기입 답안 ' .$string_w2_6. '</br></br>';
//14
    $string_w2_7 = $_SESSION['random_answer_word2-4'];
    $string_w2_8 = $_SESSION['w2-4'];
    similar_text($string_w2_7, $string_w2_8, $similarity_w2_4);
    echo "17번 $similarity_w2_4 점</br>";
    echo '17번 정답 ' . $_SESSION['random_answer_word2-4'] . ' 학생 기입 답안 ' .$string_w2_8. '</br></br>';
//15
    $string_w2_9 = $_SESSION['random_answer_word2-5'];
    $string_w2_10 = $_SESSION['w2-5'];
    similar_text($string_w2_9, $string_w2_10, $similarity_w2_5);
    echo "18번 $similarity_w2_5 점</br>";
    echo '18번 정답 ' . $_SESSION['random_answer_word2-5'] . ' 학생 기입 답안 ' .$string_w2_10. '</br></br>';
//15
    $string_w2_11 = $_SESSION['random_answer_word2-6'];
    $string_w2_12 = $_SESSION['w2-6'];
    similar_text($string_w2_11, $string_w2_12, $similarity_w2_6);
    echo "19번 $similarity_w2_6 점</br>";
    echo '19번 정답 ' . $_SESSION['random_answer_word2-6'] . ' 학생 기입 답안 ' .$string_w2_12. '</br></br>';
//15
    $string_w2_13 = $_SESSION['random_answer_word2-7'];
    $string_w2_14 = $_SESSION['w2-7'];
    similar_text($string_w2_13, $string_w2_14, $similarity_w2_7);
    echo "20번 $similarity_w2_7 점</br>";
    echo '20번 정답 ' . $_SESSION['random_answer_word2-7'] . ' 학생 기입 답안 ' .$string_w2_14. '</br></br>';
    //$string31 = 'irection';
    //$string32 = $_SESSION['w2-1'];
    //similar_text($string31, $string32, $similarity16);
    //echo "16번 $similarity16 점</br>";

    //echo "<h4>  16번 정답 </h4> direction <h4> 학생 기입 답안</h4> d$string32</br></br>";

    //$string33 = 'pproaching';
    //$string34 = $_SESSION['w2-2'];
    //similar_text($string33, $string34, $similarity17);
    //echo "score is $similarity17%";

    //$string35 = 'able';
    //$string36 = $_SESSION['w2-3'];
    //similar_text($string35, $string36, $similarity18);
    //echo "score is $similarity18%";

    //$string37 = 'eading';
    //$string38 = $_SESSION['w2-4'];
    //similar_text($string37, $string38, $similarity19);
    //echo "score is $similarity19%";

    //$string39 = 'ookout';
    //$string40 = $_SESSION['w2-5'];
    //similar_text($string39, $string40, $similarity20);
    //echo "score is $similarity20%</br></br>";

    $string41 = 'way point';
    $string42 = $_GET['i1'];
    similar_text($string41, $string42, $similarity21);
    echo "21번 $similarity21 점</br>";
    echo "21번 정답 way point 학생 기입 답안 $string42</br></br>" ;

    $string43 = 'ivoting point';
    $string44 = $_GET['i2'];
    similar_text($string43, $string44, $similarity22);
    echo "22번 $similarity22 점</br>";
    echo '22번 정답 .... 학생 기입 답안' .$string44. '</br></br>';

    $result_sentences=$similarity_s_1+$similarity_s_2+$similarity_s_3+$similarity_s_4+$similarity_s_5+$similarity_s_6+$similarity_s_7;
    echo "문장 $result_sentences 점 </br>";
    $result_word1=$similarity_w_1+$similarity_w_2+$similarity_w_3+$similarity_w_4+$similarity_w_5+$similarity_w_6;
    echo "단어 1 $result_word1 점</br>";
    $result_word2=$similarity_w2_1+$similarity_w2_2+$similarity_w2_3+$similarity_w2_4+$similarity_w2_5+$similarity_w2_6+$similarity_w2_7;
    echo "단어 2 $result_word2 점</br>";
    $result_illustration=$similarity21+$similarity22;
    echo "교과서 $result_illustration 점</br>";

    $score_middle=$similarity_s_1+$similarity_s_2+$similarity_s_3+$similarity_s_4+$similarity_w_1+$similarity_w_2+$similarity_w_3+$similarity_w_4+$similarity_w2_1+$similarity_w2_2+$similarity_w2_3+$similarity_w2_4;
    $score_easy=$similarity_s_5+$similarity_s_6+$similarity_w_5+$similarity_w2_5;
    $score_hard=$similarity_s_7+$similarity_w_6+$similarity_w2_6+$similarity_w2_7;
    echo '난이도 중 평균 ' .$score_middle. '</br>';
    echo '난이도 하 평균 ' .$score_easy. '</br>';
    echo '난이도 상 평균 ' .$score_hard. '</br>';

    $final_number=$result_sentences+$result_word1+$result_word2;
    echo  "총점 $final_number 점</br>";


    $str="result_sentences={$result_sentences}&result_word1={$result_word1}&result_word2={$result_word2}&result_illustration={$result_illustration}&result_easy={$score_easy}&result_middle={$score_middle}&result_hard={$score_hard}";


    ?>
   <!--<a href="http://127.0.0.1/students/includes/00.scoreprocessing.php?<?php echo $str; ?>">-->
<h2><a href="includes/00.scoreprocessing.php?<?php echo $str; ?>">
     결과 제출 <==(좌측 글자를 눌러주세요)</a>

</body>

<!--<a href="http://127.0.0.1/loginsystem/index2.html">Click</a>
<a href="http://127.0.0.1/loginsystem/simu3.php">Click</a>-!>
