<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$func = $_POST['function'];
$check = $_POST['checkbox'];
$radio = $_POST['radio'];
if (!$radio ="young")
{
    die("Too young");
}
else if (!$num1="" || !$num2="" || !$num1!=0 || !$num2!=0 || !$check=='false'|| !$radio=='old')
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
