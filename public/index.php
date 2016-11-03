<?php 
require_once '../private/header.php';
 ?>
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

<form action="../private/register.php" method="POST"
	  class="col-lg-2">
	  <h2>Register</h2>
	<label for="username">Name    : <input type="text" name="username" id="username"/></label>
	<label for="email">   Email    : <input type="email" name="email" id="email"/></label>
	<label for="password">Password : <input type="password" name="password" id="password"/></label>
	<button type="submit" name="submit">S'inscrire</button>
	<p class="col-lg-8"><a href="../private/forgot.php">Mot de passe oublié ?</a></p>
</form>


</main>

<footer class="container-fluid">
	<p>FOOTER</p>
</footer>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>