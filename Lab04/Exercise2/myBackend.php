<?php
$answer1 = $_POST['Q1']; 
$answer2 = $_POST['Q2']; 
$answer3 = $_POST['Q3']; 
$answer4 = $_POST['Q4']; 
$answer5 = $_POST['Q5']; 

$correct = 0; 

if ($answer1 == "Fish")
{          
    $correct = $correct+1;    
}

if ($answer2 == "Chihuahua")
{          
    $correct = $correct+1;    
}

if ($answer3 == "Albatross")
{          
    $correct = $correct+1;    
}

if ($answer4 == "Blue Whale")
{          
    $correct = $correct+1;    
}

if ($answer5 == "Cows")
{          
    $correct = $correct+1;    
}

echo "Question 1: What type of animal is a seahorse?<br>";
echo "	You answered: $answer1 <br>";
echo "	Correct answer: Fish <br><br>";

echo "Question 2: Which of the following dogs is the smallest?<br>";
echo "	You answered: $answer2 <br>";
echo "	Correct answer: Chihuahua <br><br>";

echo "Question 3: What existing bird has the largest wingspan?<br>";
echo "	You answered: $answer3 <br>";
echo "	Correct answer: Albatross <br><br>";

echo "Question 4: What is the biggest animal that has ever lived?<br>";
echo "	You answered: $answer4 <br>";
echo "	Correct answer: Blue Whale <br><br>";

echo "Question 5: What are female elephants called?<br>";
echo "	You answered: $answer5 <br>";
echo "	Correct answer: Cows <br><br>";

if($correct == 0)
{
echo "Grade: 0% <br>";
}

if($correct == 1)
{
echo "Grade: 20% <br>";
}

if($correct == 2)
{
echo "Grade: 40% <br>";
}

if($correct == 3)
{
echo "Grade: 60% <br>";
}

if($correct == 4)
{
echo "Grade: 80% <br>";
}

if($correct == 5)
{
echo "Grade: 100% <br>";
}

?>










