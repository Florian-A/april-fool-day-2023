<?php

$choices = array('rock', 'paper', 'scissors');

echo "Please choose rock, paper, or scissors: ";
$user_choice = strtolower(trim(fgets(STDIN)));

if (!in_array($user_choice, $choices)) {
    echo "Invalid choice ! Please choose rock, paper, or scissors !\n";
    exit();
}

$computer_choice = $choices[array_rand($choices)];

if ($user_choice == $computer_choice) {
    echo "It's a TIE! You and the computer chose $user_choice.\n";
} elseif (($user_choice == 'rock' && $computer_choice == 'scissors') || ($user_choice == 'paper' && $computer_choice == 'rock') || ($user_choice == 'scissors' && $computer_choice == 'paper')) {
    echo "Congratulations! You WON! The computer chose $computer_choice.\n";
} else {
    echo "Sorry, you LOSE. The computer chose $computer_choice.\n";
}

?>
