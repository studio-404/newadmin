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

		<div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Top menu</div>

      <div class="panel-body">
      	<button type="button" class="btn btn-success">Add</button>
      </div>

      <?php 
      echo $module_menu;
      ?>
    </div>
    </div>
    </div>
    </div>

	<?php
}

@include("application/views/parts/footer.php");
?>