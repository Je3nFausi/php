<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "LOOPS";
    print"<br>";
    //While-loop
    print "while loop";
    print"<br>";
    $in=0;
    while($in<10){
        print $in."<br>";
        $in++;
    }
    print"<br>";
    print"<br>";

    //do-while loop
    print "do-while loop";
    print "<br>";
    $s=55;
    do{
        print $s . "<br>";
        $s++;
    }while($s < 15);
    print"<br>";
    print"<br>";

    //for loop
    print "for loop";
    print"<br>";
    for($f=45; $f<55; $f++){
        print $f . "<br>";
    }
    print"<br>";
    print"<br>";

    //foreach to loop btn a string
    print "Foreach";
    print"<br>";
    $months=["January","February","March","April","May","June","July","August","September","October","November","December"];
    foreach($months AS $month){
        print $month . "<br>";
    }
    print"<br>";
    print"<br>";
 ?>


    <form action="">
        <select name="" id="">
            <option value=""><?php print date('Y')?></option>
            <?php
            foreach($months AS $month){
                print "<option value=''>$month</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>