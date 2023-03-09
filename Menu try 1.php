<?php 

// Random project.. try making a application that will act as a database for storing movies. 

function readNumber() {
   
    $choice = (int)readline("Please select from below what action you would like to take:");
    if (is_numeric($choice)) {
        $numberChoose = floatval($choice);
    } else {
        throw new Exception("Please enter a number on the menu!");
    }
}



$choice = (int)readline("Please select from below what action you would like to take:");

switch ($choice) {
    case "View Movie list (1)";
        //enter code/function 
        break;

    case "Look for specific movie (2)";
    //enter code/function
    break;

    case "Enter new Movie (3)";
    //enter code/function
    break;

    default:
    echo "Please select a option from the menu";











}

