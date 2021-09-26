<?php 
	error_reporting(0);
	session_start(); 	
	if(isset($_POST['submit'])) {
		$_SESSION['background_color'] = $_POST['background_color'];					
		$_SESSION['font_color'] = $_POST['font_color'];
		$_SESSION['font_size'] = $_POST['font_size'];
	}	
?> 
<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8" lang="ru">
		<meta name="description" content="This is 6 lab">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="lab6.css" type="text/css">
		<title>Test</title>		
	</head>	
	<body style="background-color: <?php if(isset($_SESSION['background_color'])) echo $_SESSION['background_color'].";"; else echo "#ffffff;";?>
			color: <?php if(isset($_SESSION['font_color'])) echo $_SESSION['font_color'].";"; else echo "#ffffff;";?>
			font-size: <?php if(isset($_SESSION['font_size'])) echo $_SESSION['font_size']."px;"; else echo "10px;";?>">				
		<main style="font-size: 20px;">
			<form method="post">	
				<div class="background_color">
					<p>Выберите цвет фона:</p>
					<input name="background_color" class="color" type="color" value="<?php if(isset($_SESSION['background_color'])) echo $_SESSION['background_color']; else echo "#ffffff";?>">
				</div>
				<div class="font_color">
					<p>Выберите цвет шрифта:</p>
					<input name="font_color" class="color" type="color" value="<?php if(isset($_SESSION['font_color'])) echo $_SESSION['font_color']; else echo "#ffffff";?>">				
				</div>		
				<div class="font_size">				
					<p>Выберите размер шрифта:</p>
					<input name="font_size" class="number" type="number" value="<?php if(isset($_SESSION['font_size'])) echo $_SESSION['font_size']; else echo "10";?>" min="10" max="100" required>
				</div>	
				<button name="submit" type="submit">Отправить</button>				
			</form>	
		</main>		
		<h1>This is 6 lab</h1>
		<span>Test string</span>    
	</body>
</html>		