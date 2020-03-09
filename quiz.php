<!Doctype html>
<html lang="en">
<head>

 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial scaleb=1.0">
    <title>PHP Quiz</title>
     <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="soccer">
                <h1>Let The Games Begin</h1>
<?php

$Question = array(
    1=> array(
    'Question'=>'Which is the first African country to host the world cup?',
    'Answers' => array(
    'A'=>"Senegal",
    'B'=>"Namibia",
    'C'=>"South Africa",
    'D'=>"Zimbabwe"
    ),
    'CorrectAnswer'=> 'C'
),

    2=> array(
    'Question'=>'Which club does Cristiano Ronaldo play for?',
    'Answers'=> array(
     'A'=>"Ajax",
     'B'=>"Juventus",
     'C'=>"Everton",
     'C'=>"Manchester United",
     ),
     'CorrectAnswer'=> 'B'
    ),
      
    3=> array(
    'Question' => 'Bend it like Beckham is a phrase popular for which England player?',
     'Answers' =>  array(
    'A'=> "David Beckham",
    'B'=> "Gareth Bale",
    'C'=> "Neymer Junior",
    'D'=> "Sergio Ramos"
     ),
     'CorrectAnswer'=> 'A'
    ),

    4=> array(
    'Question'=> 'Who won the last world cup?',
    'Answers' => array(
    'A'=> "Spain",
    'B'=> "Portugal",
    'C'=> "Nigeria",
    'D'=> "France"
    ),
    'CorrectAnswer'=> 'D'
),
     5=> array(
    'Question'=> 'Which club has won the most Uefa Trophies?',
    'Answers'=> array(
    'A'=> "Inter Milan",
    'B'=> "Bayern Munich",
    'C'=> "Real Madrid",
    'D'=> "Barcelona"
    ),
    'CorrectAnswer'=> 'C'
),

     6=> array(
   'Question'=>'How many African countries are allowed to play in the world cup ?',
   'Answers'=> array(
    'A'=> "six",
    'B'=> "four",
    'C'=> "twelve",
    'D'=> "one"
   ),
   'CorrectAnswer'=> 'B'
),
    
    7=> array(
   'Question'=>'Which soccer player has won the most Ballandor?',
   'Answers'=> array(
    'A'=> "Cristiano Ronaldo",
    'B'=> "Lionel Messi",
    'C'=> "Antonio Griezman",
    'D'=> "Iniesta"
   ),
   'CorrectAnswer'=> 'A'
),
    8=> array(
   'Question'=>'Which sport is Brazil recognized by?',
   'Answers' => array(
    'A'=> "Tennis",
    'B'=> "Golf",
    'C'=> "Cricket",
    'D'=> "Soccer"
   ),
   'CorrectAnswer'=>'D'
),

    9=> array(
   'Question'=>'Which country has its national  team called Samba boys',
   'Answers'=>array(
     'A'=> "Australia",
     'B'=> "America",
     'C'=> "Brazil",
     'D'=> "Mexico"
),
'CorrectAnswer'=> 'C'
),
    
    10=> array(
   'Question'=>'Which english team has been banned by UEFA?',
      'Answers' => array(
     'A'=> "Manchester City",
     'B'=> "Bournemouth",
     'C'=> "Getafe",
     'D'=> "Tottenham"
      ),
      'CorrectAnswer'=> 'A'
    ),

    11=> array(
   'Question'=> 'Which former Chelsea player is now the head coach of Chelsea?',
   'Answers'=> array(
     'A'=> "John Terry",
     'B'=> "Didier Drogba",
     'C'=> "Frank Lampard",
     'D'=> "Theory Henry"
    ),
    'CorrectAnswer'=> 'C'
),
    12=> array(
   'Question'=>'Who is the highest paid soccer player of 2019?',
   'Answers'=> array(
      'A'=> "Sterling",
      'B'=> "Rashford",
      'C'=> "Luiz Suarez",
      'D'=> "Cristiano Ronaldo"
    ),
    'CorrectAnswer'=> 'D'
),
     13=> array(
   'Question'=>'Old Trafford belongs to which club?',
   'Answers'=> array(
    'A'=>"Manchester United",
    'B'=>"Chelsea",
    'C'=>"Crystal Palace",
    'C'=>"Watford",
    ),
    'CorrectAnswer'=> 'A'
),
    
    14=> array(
    'Question'=>'Which club does Zinedine Zidane coach?',
    'Answers'=> array(
      'A'=> "Atletico Madrid",
      'B'=> "Real Madrid",
      'C'=> "AC Milan",
      'D'=> "Wolves"
    ),
     'CorrectAnswer'=> 'B'
),
    15=>array(
     'Question'=>'Who is the current Fifa President?',
     'Answers'=> array(
      'A'=> "Eden Hazard",
      'B'=> "Isco",
      'C'=> "Gianni Infantino",
      'D'=> "Sepp Blatter"
      ),
     'Correct Answer'=> 'C'
),
     16=>array(
     'Question'=> 'Who is famously known for the hand of God?',
     'Answers'=> array(
      'A'=> "Pepe",
      'B'=> "Ronaldhino",
      'C'=> "Diego Maradona",
      'D'=> "Diego Costa"
     ),
     'CorrectAnswer'=> 'C'
    ),

       17=>array(
      'Question'=>'Who opened the 2010 world cup?',
      'Answers'=> array(
       'A'=> "Shakira and FreshlyGround",
       'B'=> "The Parlotones",
       'C'=> "AKA",
       'D'=> "Ricky Rick"
        ),
        'CorrectAnswer'=> 'A'
    ),
       18=>array(
       'Question'=>'Who hosted the last world cup?',
       'Answers'=> array(
       'A'=> "Greece",
       'B'=> "China",
       'C'=> "Russia",
       'D'=> "America"
       ),
       'CorrectAnswer'=> 'C'
    ),
   
       19=>array(
        'Question'=>'Who has the highest paid transfer?',
        'Answers'=> array(
       'A'=> "Ozil",
       'B'=> "Giroud",
       'C'=> "Modric",
       'D'=>"Neymer"
        ),
        'CorrectAnswer'=>'D'
    ),
       
      20=>array(
      'Question'=>'Which Barcelona player used to be known for biting other players?',
      'Answers'=> array(
       'A'=>"Rakatic",
       'B'=>"Antoine Griezmann",
       'C'=>"Lionel Messi",
       'D'=>"Luis Suarez"
      ),
      'CorrectAnswer'=>'D'
      )

);

if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    foreach ($Question as $QuestionNo => $Value){
        // Echo the question
        echo $Value['Question'].'<br />';

        
        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
             echo 'You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
             echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
        } else {
            echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
            echo 'You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; $counter++;

        }
    
        

        echo '<br /><hr>'; 
                                if ($counter=="") 
                                { 
                                $counter='0';
                                $results = "Your score: $counter/20"; 
                                }
                                else 
                                { 
                                $results = "Your score: $counter/20"; 
                                }
                    }
                                 echo $results;

                                 if ($answers <= '10')
                                 {  
                                      $results="Perhaps you should do your history!";
                                 }
                                  
                                 
                                         
} else {  
?>
    <form action="quiz.php" method="post" id="quiz">
    <?php foreach ($Question as $QuestionNo => $Value) { ?>

        <h3><?php echo $Value['Question']; ?></h3>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
        ?>
        <div>
            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?>

    <?php } ?>
    <input type="submit" value="Submit Quiz" />
    </form>
<?php 
}
?>
</body>
</html>


