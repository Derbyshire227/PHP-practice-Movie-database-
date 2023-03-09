function readNumber() {
   
    $choice = (int)readline("Please select from below what action you would like to take:");
    if (is_int($choice)) {
        switch (readNumber()){

            case "1"; // delete movie
        echo "Loading...";
        //enter code/function 
        break;

    case "2"; //look for specific movie, go thorugh movies etc... 
        echo "Loading...";
        //enter code/function
         break;

    case "3"; // would be best to write code for this function first as this can lay down the ground work,
        echo "Loading...";
        new_movie($movie_name,$year,$price,$run_time);// create new movie and save to document. 
        break;

    default:
    echo "Please select a option from the menu";

        }
    } else {
        throw new Exception("Please enter a number on the menu!");
    }
}

//html menu, showing what each case is for. 


function new_movie($movie_name,$year,$price,$run_time){
    $movie_name = (string)readline("What is the name of the movie?"); 
    $year = (int)readline("Please enter the year the movie was released?"); 
    $run_time = (int)readline("Please enter the run time for the movie (in minutes/rounded up");

}
