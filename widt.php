<?php 
require_once "config/conn.php";
require_once "class/class.widt.php";
$widt = new widt($connect);
require_once "header.php";
if(isset($_GET['remove'])) /* If on url have remove or if data was succes remove*/
 {
 	$idmd5 = $_GET['remove']; /* encrypt id with md5*/
 	echo $idmd5 . "<br>";
 	/* Search Id and if data was find remove data*/
 	foreach ($widt->getAllData() as $jf) {		
 		if ($idmd5 == md5($jf->id))
 		{
 			$widt->remove($jf->id);
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
		<a href="widtAdd.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah</a> 
		<br>
		<br>
     	<table class="table">
     		<tr>
     		    <th>No </th>
     			<th>widt</th>
     			<th>date</th>
     			<th colspan="2">Aksi</th>
     		</tr>

				<?php $no = 1;
     			foreach ($widt->getAllData() as $key) { 
     				?>
     		<tr> 
     			<td><?= $no++ ?></td>
     			<td><?= $key->wid ?></td>
     			<td><?= $key->date ?></td>
				<td><a href="widt.php?remove=<?php echo md5($key->id); ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
     		</tr>
     		<?php } ?>
     	</table>




     		
     	</div>

     	<div class="col-md-2"></div>
     </div>


    </div>


</body>


<?php require_once "footer.php";
