 <!DOCTYPE html>
 <html>
 <head>
 <title>Quiz On Soccer</title>
 <link rel="stylesheet"  type="text/css" href="css/style.css">
<div class="container">
        <div class="row">
          <div class="col-12">
            <div class="soccer">
            <header>
                <h1>Let The Games Begin</h1>

                </header>
<?php 
        include "questions.php";

                if (isset($_POST['answers'])) {

                    $answers = $_POST['answers'];  //===========GET SUBMITTED ANSWERS==================//     
                    $counter = 0;  //=============COUNTING CORRECT ANSWERS AS FROM ZERO================//     
                    echo "<h1 id=\"reportHeading\">YOUR QUIZ REPORT </h1>";
                    include "quizReport.php";
                     quizReport($questions,$answers,$counter); //=====FUNCTION GIVING FINAL REPORT=====// 
                   
                }
                else {
                ?>

                 <!--================= RADIO BUTTON FORM L0OPING ARRAY OF QUESTIONS ===========================-->
                 
                 <form  class=" h-200" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                              
                            <?php foreach ($questions as $questionNo => $value){ ?>     
                                             
                                <h5 id="questionsInBlack"><?php echo $value['Question']; ?></h5>
                                <?php                               
                                    foreach ($value['Answers'] as $letter => $answer){
                                    $label = 'question-'.$questionNo.'-answers-'.$letter;                               
                                ?>
                                <div id="line" class="wow bounceInRight">
                                    <input " type="radio" name="answers[<?php echo $questionNo; ?>]" id="<?php echo $label; ?>" value="<?php echo $letter; ?>"required/>
                                    <label for="<?php echo $label; ?>"><?php echo $letter; ?>) <?php echo $answer; ?> </label>                              
                                </div>                             
                                <?php } ?>
                                <hr>                      
                            <?php } ?>                    
                            <input class="btn btn-success btn-lg" type="submit" value="SUBMIT" /> 
          
                    </form> <!-- END OF FORM -->
                <?php 
                }
                ?>
</div>
 </div>
  </div>
    </div>
     </body>
     </html>