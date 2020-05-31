<?php
function quizReport($questions,$answers,$counter)
                {
                   
                    foreach($questions as $questionNo => $value) {
                        // Echo the question
                        echo $value['Question'].'<br>';
                        if ($answers[$questionNo] != $value['CorrectAnswer']) {
                           
                            echo 'You answered: <span class="wronganswerColor">'.$value['Answers'][$answers[$questionNo]].'</span><br>';
                            echo 'Correct answer: <span class="correctAnswerColor">'.$value['Answers'][$value['CorrectAnswer']].'</span>';
                        } 
                        else {
                            
                            echo 'You answered: <span class="guesAnswerColor">'.$value['Answers'][$answers[$questionNo]].'</span><br>';
                            echo 'You are correct: <span class="correctAnswerColor">'.$value['Answers'][$answers[$questionNo]].'</span>';
                            $counter++;
                        }
                        echo '<br /><hr>';
                    }
                    include "finalscore.php";
                    finalScore($counter); //=====FUNCTION CALL FOR DISPLAYING FINAL SCORE=====// 

                    
                    echo "<a class='btn btn-success btn-lg' href='quiz.php' role='button'>Try again</a>";
                  
                }
                
                ?>