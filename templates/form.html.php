<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Example</title>
	<link rel="stylesheet" href="style.css">
</head>
<form action="index.php" method="post">
Value 1: <input type="text" name="val1" size=10>
Value 2: <input type="text" name="val2" size=10>
    <hr />
Calculation:<br />

<input type="radio" name="calc" value="add" checked>Add
<input type="radio" name="calc" value="sub" checked>Subtract
<input type="radio" name="calc" value="multi" checked>Mutiply
<input type="radio" name="calc" value="div" checked>Divide
<br />

<input type="submit" value="Calculate">
<input type="reset" value="Clear">
</form>