<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style_forum.css">
	<title>Forum</title>
</head>
<body class="row">
<main class="container-fluid">
	<header>
		<div class="col-lg-2
				    block01">
			<img src="img/logo.png" alt="logo" width="155px" height="150px">
		</div>
		<div class="col-lg-5
					block02">
			<h1> Forum For Real V...</h1>
			<h3>Slogan</h3>
		</div>
		<div class="col-lg-5
					block03">
				<!--<img src="img/forum.png" alt="logo" width="600px" height="130px">-->
		</div>
	</header>
<!--
	<nav>
		<ul>
			<li>01</li>
			<li>01</li>
			<li>01</li>
			<li>01</li>
			<li>01</li>
		</ul>
	</nav>
-->

<form action="register.php" method="POST"
	  class="col-lg-2">
	<label for="email">   Email : <input type="text" name="email" id="email"/></label>
	<label for="password">Password : <input type="password" name="password" id="password"/></label>
	<button type="submit">S'inscrire</button>
</form>

</main>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>