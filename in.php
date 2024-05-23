<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print"This is my first php code";//To display with using php
    print"<br>";
    echo"This is my first php code";//To display with using echo
    print"<br>";
    print"Today is Thursday";//Using html's <br> to break a line
    print"<br>";
    print"<br>";
    print 1999;//To add integer
    print"<br>";
    print "5475";//Will be  a String
    print"<br>";
    print"<br>";
    print date('l');//To display current day of the week

    print "<br>";
    //PHP also works great with php
    print"Today is <span style='color:red ; text-transform:uppercase;'>Thursday";

    //To display tomorrow's date
    print"<br>";
    print"<br>";
    print date('l', strtotime('+1 day'));

    //To display the year and date
    print"<br>";
    print"<br>";
    print date('d/m/Y');
    print"<br>";
    print date('d/m/Y',strtotime('+ 2 months'));//To display date 2 months from now
    print"<br>";
    print"<br>";
    //To write the Month in full
    print date('l,F jS Y');
    print"<br>";
    print date('l,F jS Y',strtotime('+ 5 months'));
    //To set Time zones
    date_default_timezone_set("Africa/Nairobi");//To get the correct time of current place
    print"<br>";
    print"<br>";
    //To add hours, minutes and seconds
    print date('l, F jS Y H:i:s');
    print"<br>";
    print"<br>";
    //To add strings to a function
    print"Today is ".date('l, F jS Y H:i:s');
    print"<br>";
    print"<br>";


    //Variable declarations
    //Creating/declaring a variable
    $fname="Alex";//Is a string so put quotation marks
    $yob=1999;//Declaration of integer, no quotation marks
    //To print the variable
    print $fname;
    print"<br>";
    print $yob;
    print"<br>";
    print"<br>";

    $current_year=date('Y');
    echo $current_year;
    print"<br>";
    print"<br>";

    //Variable computations
    $age=$current_year-$yob;
    print $age;
    print"<br>";
    print"<br>";

    //POINT TO NOTE
    print"45+96";//Will output as it is coz it is a string
    print"<br>";
    print 45+96;//Will output result of computation since it is integer
    print"<br>";print"<br>";

    //To add strings to variables
    print $fname ." was born in " .$yob;
    print"<br>";
    print"<br>";
    $user_dob="1999-05-26";
    echo $fname ." was actually born in " .$user_dob;

    print "<br>";
    print "<br>";
    echo $fname ." was actually born on " .date('l,F jS Y',strtotime($user_dob));
    print "<br>";
    print "<br>";

    //To store variables in an object
    $birthday = new DateTime($user_dob);
    $today = new DateTime('today');
    //To get difference
    $interval = $birthday->diff($today);
    //Then print
    echo'<pre>';
    print_r($interval);
    echo'<pre>';
    
    
    print "<br>";
    print "<br>";

    //Now output
    print $fname ." is actaully " .$interval->y ." years " .$interval->m. " months, and " .$interval->d. " days old. ";
    
    print "<br>";
    print "<br>";
    print "<br>";


    //The if-else statement
    $adult_age=18;
    if($interval->y >$adult_age){
        print $fname ." is an adult";
    }else{
        print $fname ." is NOT an adult";
    }
    print "<br>";
    print "<br>";


    //Variable characteristics
    $last_name="Okama";
    print "My last name is $last_name";//Not used concatation, and will output correctly
    print "<br>";
    print 'My last name is $last_name';//prints as it is
    print "<br>";
    print 'My last name is '.$last_name;//Outputs the correct way
    print "<br>";
    print "<br>";

    //Will not print built-in-functions btw!!!!!!!!!!


    //Using call to output
    $call['lname']="Okama";
    print $call['lname'];
    print "<br>";
    print "<br>";

    define('LNAME','0kama');
    echo LNAME;
    ?>
</body>
</html>