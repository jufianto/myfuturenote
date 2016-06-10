<?php
require_once "header.php";
require_once "config/conn.php";
require_once "class/class.label.php";
$label = new label($connect);

if (isset($_POST['add'])){
	$level 	= $_POST['level'];
	$name 	= $_POST['name'];
	if($label->createData($name,$level))
	{
		header('location:label.php?inserted');
	}else{
		header('location:label.php?failure');
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
				<label for="name">Nama Prioritas</label>
				<input type="text" id="name" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="level">Level Prioritas</label>
				<input type="text" id="level"  name="level" class="form-control" required>
			</div>

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