<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$func = $_POST['function'];
$check = $_POST['checkbox'];
$radio = $_POST['radio'];
if (!$num1="" || !$num2="" )
{
    die("Input is empty");
}
else if (!$num1!=0 || !$num2!=0 || !$check=='false')
{
die("Number is null");
exit();
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
}
?>
