<?php
if(isset($_GET['inserted']))		
 {
 	echo "
 	<div class='container'>
 	
 	<div class='alert alert-success col-md-8'>
 	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  	<strong>Success!</strong> Data Telah Di Insert
	</div>
	</div> ";

	/* If data was deleted make notification*/
 }else if (isset($_GET['removed']))
 {
 	echo "
 	<div class='container'>
 	
	<div class='alert alert-warning col-md-8 '>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  	<strong>Success!</strong>Data Telah Di hapus
  	</div>
	</div> ";
 }else if (isset($_GET['updated'])){
 	echo "
 	<div class='container'>
 	
	<div class='alert alert-success col-md-8 '>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  	<strong>Success!</strong>Data Telah Di Update
  	</div>
	</div> ";
 }else if (isset($_GET['Failure'])){
 	echo "
 	<div class='container'>
 	
	<div class='alert alert-warning col-md-8 '>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  	<strong>Success!</strong> GAGAL Melakukan Aksi
  	</div>
	</div>
 	";
 }
 ?>