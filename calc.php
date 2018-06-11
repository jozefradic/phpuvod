<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$func = $_POST['function'];
$check = $_POST['checkbox'];
$radio = $_POST['radio'];
if (!isset($num1) || trim($num1) == '' || !isset($num2) || trim($num2) == '')
{

    die("Input is empty");  
    echo "test echo";  
    exit();

}
else if (!$num1!=0 || !$num2!=0)
{
die("Number is null");
exit();
}
else if (!$check=='false' || !$radio=='false'){
    die("Please select options");
    exit();
}
else if (!$radio==young || !$func=='+'){
    $result = $_POST['num1'] + $_POST['num2'];
}
else if (!$radio==young || !$func=='-'){
    $result = $_POST['num1'] - $_POST['num2'];
}
else
{
switch ($func) {
    case "+":
       $result = $_POST['num1'] + $_POST['num2'];
        break;
    case "-":
       $result = $_POST['num1'] - $_POST['num2'];
        break;
    case "*":
        $result = $_POST['num1'] * $_POST['num2'];
        break;
    case "/":
        $result = $_POST['num1'] / $_POST['num2'];
}
echo $result;

$dotaz="INSERT INTO history (valA,valB) VALUES(".$a.",".$b.")";
$conn = mysqli_connect("localhost:3306","root","","phpcalc");
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
    }
    echo "Connected successfully";
    if ($conn->query($dotaz) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
