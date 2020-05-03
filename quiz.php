<!Doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial scaleb=1.0">
    <title>PHP Quiz</title>
     <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class="container">
        <div class="row">
          <div class="col-12">
            <div class="soccer">
            <header>
                <h1>Let The Games Begin</h1>
</header>

<?php

$question = array(
    1=> array(
    'Question'=>'1)Which is the first African country to host the world cup?',
    'Answers' => array(
    'A'=>"Senegal",
    'B'=>"Namibia",
    'C'=>"South Africa",
    'D'=>"Zimbabwe"
    ),
    'CorrectAnswer'=> 'C'
),

    2=> array(
    'Question'=>'2)Which club does Cristiano Ronaldo play for?',
    'Answers'=> array(
     'A'=>"Ajax",
     'B'=>"Juventus",
     'C'=>"Everton",
     'D'=>"Manchester United"
     ),
     'CorrectAnswer'=> 'B'
    ),
      
    3=> array(
    'Question' => '3)Bend it like Beckham is a phrase popular for which England player?',
     'Answers' =>  array(
    'A'=> "David Beckham",
    'B'=> "Gareth Bale",
    'C'=> "Neymer Junior",
    'D'=> "Sergio Ramos"
     ),
     'CorrectAnswer'=> 'A'
    ),

    4=> array(
    'Question'=> '4)Who won the last world cup?',
    'Answers' => array(
    'A'=> "Spain",
    'B'=> "Portugal",
    'C'=> "Nigeria",
    'D'=> "France"
    ),
    'CorrectAnswer'=> 'D'
),
     5=> array(
    'Question'=> '5)Which club has won the most Uefa Trophies?',
    'Answers'=> array(
    'A'=> "Inter Milan",
    'B'=> "Bayern Munich",
    'C'=> "Real Madrid",
    'D'=> "Barcelona"
    ),
    'CorrectAnswer'=> 'C'
),

     6=> array(
   'Question'=>'6)How many African countries are allowed to play in the world cup ?',
   'Answers'=> array(
    'A'=> "six",
    'B'=> "four",
    'C'=> "twelve",
    'D'=> "one"
   ),
   'CorrectAnswer'=> 'B'
),
    
    7=> array(
   'Question'=>'7)Which soccer player has won the most Ballandor?',
   'Answers'=> array(
    'A'=> "Cristiano Ronaldo",
    'B'=> "Lionel Messi",
    'C'=> "Antonio Griezman",
    'D'=> "Iniesta"
   ),
   'CorrectAnswer'=> 'A'
),
    8=> array(
   'Question'=>'8)Which sport is Brazil recognized by?',
   'Answers' => array(
    'A'=> "Tennis",
    'B'=> "Golf",
    'C'=> "Cricket",
    'D'=> "Soccer"
   ),
   'CorrectAnswer'=>'D'
),

    9=> array(
   'Question'=>'9)Which country has its national  team called Samba boys?',
   'Answers'=>array(
     'A'=> "Australia",
     'B'=> "America",
     'C'=> "Brazil",
     'D'=> "Mexico"
),
'CorrectAnswer'=> 'C'
),
    
    10=> array(
   'Question'=>'10)Which english team has been banned from UEFA for two years?',
      'Answers' => array(
     'A'=> "Manchester City",
     'B'=> "Bournemouth",
     'C'=> "Getafe",
     'D'=> "Tottenham"
      ),
      'CorrectAnswer'=> 'A'
    ),

    11=> array(
   'Question'=> '11)Which former Chelsea player is now the head coach of Chelsea?',
   'Answers'=> array(
     'A'=> "John Terry",
     'B'=> "Didier Drogba",
     'C'=> "Frank Lampard",
     'D'=> "Theory Henry"
    ),
    'CorrectAnswer'=> 'C'
),
    12=> array(
   'Question'=>'12)Who is the highest paid soccer player of 2019?',
   'Answers'=> array(
      'A'=> "Sterling",
      'B'=> "Rashford",
      'C'=> "Luiz Suarez",
      'D'=> "Cristiano Ronaldo"
    ),
    'CorrectAnswer'=> 'D'
),
     13=> array(
   'Question'=>'13)Old Trafford belongs to which club?',
   'Answers'=> array(
    'A'=>"Manchester United",
    'B'=>"Chelsea",
    'C'=>"Crystal Palace",
    'D'=>"Watford",
    ),
    'CorrectAnswer'=> 'A'
),
    
    14=> array(
    'Question'=>'14)Which club does Zinedine Zidane coach?',
    'Answers'=> array(
      'A'=> "Atletico Madrid",
      'B'=> "Real Madrid",
      'C'=> "AC Milan",
      'D'=> "Wolves"
    ),
     'CorrectAnswer'=> 'B'
),
    15=>array(
     'Question'=>'15)Who is the current Fifa President?',
     'Answers'=> array(
      'A'=> "Eden Hazard",
      'B'=> "Isco",
      'C'=> "Gianni Infantino",
      'D'=> "Sepp Blatter"
      ),
     'Correct Answer'=> 'C'
),
     16=>array(
     'Question'=> '16)Who is famously known for the hand of God?',
     'Answers'=> array(
      'A'=> "Pepe",
      'B'=> "Ronaldhino",
      'C'=> "Diego Maradona",
      'D'=> "Diego Costa"
     ),
     'CorrectAnswer'=> 'C'
    ),

       17=>array(
      'Question'=>'17)Who opened the 2010 world cup?',
      'Answers'=> array(
       'A'=> "Shakira and FreshlyGround",
       'B'=> "The Parlotones",
       'C'=> "AKA",
       'D'=> "Ricky Rick"
        ),
        'CorrectAnswer'=> 'A'
    ),
       18=>array(
       'Question'=>'18)Who hosted the last world cup?',
       'Answers'=> array(
       'A'=> "Greece",
       'B'=> "China",
       'C'=> "Russia",
       'D'=> "America"
       ),
       'CorrectAnswer'=> 'C'
    ),
   
       19=>array(
        'Question'=>'19)Who has the highest paid transfer?',
        'Answers'=> array(
       'A'=> "Ozil",
       'B'=> "Giroud",
       'C'=> "Modric",
       'D'=>"Neymer"
        ),
        'CorrectAnswer'=>'D'
    ),
       
      20=>array(
      'Question'=>'20)Which Barcelona player used to be known for biting other players?',
      'Answers'=> array(
       'A'=>"Rakatic",
       'B'=>"Antoine Griezmann",
       'C'=>"Lionel Messi",
       'D'=>"Luis Suarez"
      ),
      'CorrectAnswer'=>'D'
      )
    
); 


 //if (isset($_POST['answers'])){
  // $answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    // foreach ($question as $questionNo => $value){
       // Echo the question
      //  echo $value['Question'].'<br />';
        
        
     //   if ($answers[$questionNo] != $value['CorrectAnswer']){
          //  echo 'You answered: <span style="color: red;">'.$value['Answers'][$answers[$questionNo]].'</span><br>'; // Replace style with a class
         //   echo 'Correct answer: <span style="color: green;">'.$value['Answers'][$value['CorrectAnswer']].'</span>';
       // } else {
          //  echo 'Correct answer: <span style="color: green;">'.$value['Answers'][$answers[$questionNo]].'</span><br>'; // Replace style with a class
           // echo 'You are correct: <span style="color: green;">'.$value['Answers'][$answers[$questionNo]].'</span>';$counter++;
       // }                
     // } 
     //}  
                                                                 
                            
      echo '<br /><hr>'; 
                            
                       if ($counter="");
                         {
                         ($counter++);
                         $results = "Your score: $counter/20"; 
                         }
                        
                        echo $results;                         
                                        
        
         ?>                           

    <form action="quiz.php" method="post" id="quiz">
    <?php foreach ($question as $questionNo => $value) { ?>

        <h3><?php echo $value['Question']; ?></h3>
        <?php 
            foreach ($value['Answers'] as $letter => $answer){ 
            $label = 'question-'.$questionNo.'-answers-'.$letter;
        ?>
        <div>
            <input type="radio" name="answers[<?php echo $questionNo; ?>]" id="<?php echo $label; ?>" value="<?php echo $letter; ?>" />
            <label for="<?php echo $label; ?>"><?php echo $letter; ?>) <?php echo $answer; ?> </label>
        </div>
        <?php } ?>

    <?php } ?>
    <input type="submit" value="Submit Quiz" />
    </form>
<?php 

?>
<?php 

?>

</div>
 </div>
 </div>
 </div>
 

 </body>
 </html>
 
  
  
