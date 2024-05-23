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
    print date('F jS Y H:i:s');
    print"<br>";
    print"<br>";
    //To add strings to a function
    

    ?>
</body>
</html>