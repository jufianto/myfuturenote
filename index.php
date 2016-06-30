<?php 
require_once "config/conn.php";
require_once "class/class.note.php";
$note = new note($connect);
require_once "header.php";
if(isset($_GET['remove'])) /* If on url have remove or if data was succes remove*/
 {
  $idmd5 = $_GET['remove']; /* encrypt id with md5*/
  echo $idmd5 . "<br>";
  /* Search Id and if data was find remove data*/
  foreach ($note->getAllData() as $jf) {   
    if ($idmd5 == md5($jf->id))
    {
      $note->remove($jf->id);
    }   
  }
 }
?>

<body>
<?php include "menu.html"; ?>

<div class="row">

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->


     <div class="row">
     	
     	<div class="col-md-2"></div>

     	<div class="col-md-8">
		<button class="btn btn-default" style="margin-bottom: 10px;" type="submit">Tambah</button>

     	<table class="table">
     		<tr>
          <th>No</th>
     			<th>Idea</th>
     			<th>Label</th>
          <th>Info</th>
     		</tr>

     		<?php $no = 1;
          foreach ($note->getAllData() as $key) { 
            ?>
        <tr> 
          <td><?= $no++ ?></td>
          <td><?= $key->idea ?></td>
          <td><?= $note->getLabel($key->label_id) ?></td>
          <td><?= $note->getStart($key->starting) ?></td>
          <td><a href="noteEdit.php?id=<?= $key->id ?>"><span class="glyphicon glyphicon-edit" id="edit"></span></a><label for="edit">Edit</label> </td>
        <td><a href="note.php?remove=<?php echo md5($key->id); ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
        <?php } ?>
     	</table>




     		
     	</div>

     	<div class="col-md-2"></div>
     </div>


    </div> <!-- /container -->
</div>
</body>



    <?php require_once "footer.php"; ?>
