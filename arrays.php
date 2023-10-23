<form action="arrays.php" method="GET">
    <input type="text" name="xname">
    <input type="submit">
</form>
<?php 
$xname = $_GET["xname"];


//$family = array("Father", "Mother");

//Associative Array

$family = [
    "Bandar" => [
        "Score" => "90" , 
        "Grade" => "A"
    ],
    "Ali" => [
        "Score" => "70" ,
        "Grade" => "C"
    ],
    "Anas" => [
        "Score" => "20" ,
        "Grade" => "F" 
        ]  
    ];

echo "Score: " . $family[$xname]["Score"]; 
echo "<br>";
echo "Grade: " . $family[$xname]["Grade"];
?>