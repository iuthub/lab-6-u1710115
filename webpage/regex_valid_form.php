<?php 
// .{2,}   2 more chars
	$pattern="";
	$text="";
	$replaceText="";
    $replaced_text = ""; 
	$match="Not checked yet.";


if ($_SERVER["REQUEST_METHOD"]=="POST") {
	

	$pattern=$_POST["pattern"];
	$text=$_POST["text"];
	$replaceText=$_POST["replaceText"];

	$replaced_text = preg_replace($pattern, $text, $replaceText);

	preg_match($pattern, $text, $matched);

	if(preg_match($pattern, $text)) {
						$match="Match!";
						$replaced_text = $matched[1];
						print_r($matched);
					} else {
						$match="Does not match!";
	//$not_digit = "[^\d\]";				
	}
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>
			
			<dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>
			
			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>

			<dt>Output Text</dt>
			<dd><?=	$replaced_text ?></dd>
			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>
		
	</form>
</body>
</html>