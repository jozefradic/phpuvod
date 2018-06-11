<html>
<head>
<title>Calculator</title>
</head>
<body>
<form method="POST" action="calc.php">
    <p align="center"><b>Enter the first number :</b><br/><input type="text" name="num1" size="20"><br>
</p>
    <p align="center"><select name = "function">
      <option value="+">Add [+]</option>
      <option value="-">Subtract[-]</option>
      <option value="*">Multiple[*]</option>
      <option value="/">Divide[/]</option>
    </select></p>
	<p align="center"><b>Enter the second number : </b><br/><input type="text" name="num2"    size="20"></p>
	<p align="center"><input type="checkbox" name="checkbox" id="check" value="false">Suhlasim s vypoctom</p>
	<p align="center"><input type="radio" name="radio" value="old">Som dospely</p>
	<p align="center"><input type="radio" name="radio" value="young">Niesom dospely</p>
	<p align="center"><input type="submit" value="Calculate" name="calculate"></p>
	<p align="center"><input type="reset" value="Reset" name="Reset"></p>
	<p align="center"><button type="history" value="History" name="History">History</button> </p>
</form>
</body>
</html>
