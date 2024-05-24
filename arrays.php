<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Array used for storing data
    //Indexed array-Arranged using indices(using brackets)
    $color=["Black","Green","Yellow"];
    print_r($color);

    //Using keyword array
    $user= array("Alex","Peter","Anne");
    print "<br>";
    print $user[2];
    print "<br>";
    print "<br>";

    //Associative arrays
$user_data=[
    "User"=>array(
    "fullname"=>"Alex Okama",
    "email"=>"AOkama@yahoo.com",
    //Multidimentional Arrays
    "phone"=>[
        "Home"=>"+254735470271",
        "Work"=>"+254786424092",
        "Mobile"=>"+254788627533"
    ]
    )
    ];
$user_detail=[
    "Director"=>array(
        "fullname"=>"Alex Okama",
        "address"=>"Mada",
        "email"=>"AOKama@yahoo.com",
        "phone"=>[
            "Home"=>"+254700805357",
            "Work"=>"+254789765432"]
    )
        ];    
print_r ($user_detail)

print ($user_detail)["Director"]["phone"]["Home"];




//Multidimentional Arrays

  ?>
  <pre>
    <?php print_r($user);?>
</pre>

</body>
</html>