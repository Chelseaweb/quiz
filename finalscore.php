<?php
function finalscore($counter)
                 {
                    if ($counter < 10) {
                        echo "<h1 class=\"text-center\">YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<h2 class=\"text-center\"PLEASE TRY AGAIN TO IMPROVE YOUR SCORE</h2>";
                        echo "<p class=\"text-left\">Take time to learn a bit more about it? Try again</p>";
                    } else if ($counter <= 15) {
                        echo "<h1 class=\"text-center\">YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<h2 class=\"text-center\">THE SCORE WAS AVERAGE</h2>";
                    } else {
                        echo "<h1 class=\"text-center\">YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<h2 class=\"text-center\">CONGRATULATION FOR KNOWING YOUR SOCCER HISTORY</h2>";
                    }
                 }

            