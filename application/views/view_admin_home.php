<?php
@include("application/views/parts/header.php");
@include("application/views/parts/top.php");
?>
	<div class="login-form">
		<div class="login-header">
			Please log in
		</div>
		<form class="navbar-form navbar-left" role="search">
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="username" />
		  </div><div class="clearer"></div>
		   <div class="form-group">
		    <input type="text" class="form-control" placeholder="password" />
		  </div><div class="clearer"></div>
		  <button type="submit" class="btn btn-default">Log in</button>
		</form>
		<div class="clearer"></div>
	</div>
<?php
@include("application/views/parts/footer.php");
?>