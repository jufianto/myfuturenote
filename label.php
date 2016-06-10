<?php 
require_once "config/conn.php";
require_once "class/class.label.php";
$label = new label($connect);
require_once "header.php";
if(isset($_GET['remove'])) /* If on url have remove or if data was succes remove*/
 {
 	$idmd5 = $_GET['remove']; /* encrypt id with md5*/
 	echo $idmd5 . "<br>";
 	/* Search Id and if data was find remove data*/
 	foreach ($label->getAllData() as $jf) {		
 		if ($idmd5 == md5($jf->id))
 		{
 			$label->remove($jf->id);
 		} 	
 	}
 }
?>

<body>
<?php include "menu.html"; ?>

<div class="row">
     	
     	<div class="col-md-2"></div>

     	<div class="col-md-8">
     	<?php require_once "notifSS.php"; ?>
		<a href="labelAdd.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah</a> 
		<br>
		<br>
     	<table class="table">
     		<tr>
     		    <th>No </th>
     			<th>Label</th>
     			<th>Prioritas</th>
     			<th colspan="2">Aksi</th>
     		</tr>

				<?php $no = 1;
     			foreach ($label->getAllData() as $key) { 
     				?>
     		<tr> 
     			<td><?= $no++ ?></td>
     			<td><?= $key->name ?></td>
     			<td><?= $key->level ?></td>
     			<td><a href="labelEdit.php?id=<?= $key->id ?>"><span class="glyphicon glyphicon-edit" id="edit"></span></a><label for="edit">Edit</label> </td>
				<td><a href="label.php?remove=<?php echo md5($key->id); ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
     		</tr>
     		<?php } ?>
     	</table>




     		
     	</div>

     	<div class="col-md-2"></div>
     </div>


    </div>


</body>


<?php require_once "footer.php";
