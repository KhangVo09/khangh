<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Example</title>
	<link rel="stylesheet" href="style.css">
<?php
if (!isset($_POST['val1'])) {
	include 'templates/form.html.php';
} else {
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$calc = $_POST['calc'];

	switch ($calc) {
	case "add":$result = $val1 + $val2;
		break;
	case "sub":$result = $val1 - $val2;
		break;
	case "multi":$result = $val1 * $val2;
	    break;
	case "div":$result = $val1 / $val2;
	}
	$output = "Calculation result:" . $result;
	include 'templates/result.html.php';
}
?>