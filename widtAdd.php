<?php
require_once "header.php";
require_once "config/conn.php";
require_once "class/class.widt.php";
$widt = new widt($connect);

if (isset($_POST['add'])){
	$wid 	= $_POST['wid'];
	//$name 	= $_POST['name'];
	if($widt->createData($wid))
	{
		header('location:widt.php?inserted');
	}else{
		header('location:widt.php?failure');
	}
}
?>
<body>
<?php require_once "menu.html"; ?>

<div class="row">
     	
     	<div class="col-md-2"></div>

     	<div class="col-md-8">	
     	<!-- Start Content -->
     	<div class="col-md-6">
     	<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Apa Yang anda Lakukan ?</label>
				<textarea required class="form-control TA" rows="3" name="wid"></textarea>
			</div>

			<!-- <div class="form-group">
				<label for="level">Level Prioritas</label>
				<input type="text" id="level"  name="level" class="form-control" required>
			</div> -->

			<button class="btn btn-primary" type="submit" name="add">Tambah</button>
			<button class="btn btn-default" type="reset">Reset</button>


		</form>
		</div>
		<div class="col-md-6"></div>
     	<!-- End Content -->
     	</div>

     	<div class="col-md-2"></div>
     </div>


    </div>