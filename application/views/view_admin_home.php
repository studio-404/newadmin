<?php
@include("application/views/parts/header.php");
@include("application/views/parts/top.php");

if(empty($all_userdata["username"])){
	@include("application/views/parts/loginform.php");
}else{
	?>
		<div class="container content_container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Welcome to Website: "Gio" CMS</h3><br />
					
					<p><b>Website Name:</b> Gio website</p>
					<p><b>Website Address:</b> <a href="http://redis.404.ge" target="_blank">www.redis.404.ge</a></p>
					<p><b>User:</b> Gio (administrator)</p>
					<p><b>CMS version:</b> 1.0.0</p>
					<p><b>Your IP Address:</b> 176.73.234.42</p>
				</div>
				<div class="col-lg-4">
					<h4>Site managment</h4>
					
					<p><b>Top menu</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
					<p><b>Main menu</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
					<p><b>Aditional menu</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
					<p><b>Menu managment</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
				</div>
				<div class="col-lg-4">
					<h4>Users</h4>					
					<p><b>User list</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
					<p><b>User rights</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
					<p><b>Site user</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
				</div>
				<div class="col-lg-4">
					<h4>Settings</h4>
					<p><b>Change password</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
					<p><b>Site settings</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
					<p><b>Backups</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
					<p><b>logs</b> <a href="#" class="editlink"><i class="fa fa-pencil-square-o"></i></a></p>
				</div>
			</div>	

		</div>
	<?php
}

@include("application/views/parts/footer.php");
?>