<?php 
$con=mysqli_connect("localhost","id18817619_hypnos_hotel","Qsm16051998*","id18817619_hotel") or die('La connexion à la base de données a échoué');
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from rooms where room_id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update rooms set room_no='$rno',type='$type',price='$price',details='$details' where room_id='$id' ");
header('location:tableau de bord.php?option=rooms');
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Numéro de la chambre</th>
		<td><input type="text"  name="rno" value="<?php echo $res['room_no']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Type de la chambre</th>
		<td><input type="text" name="type" value="<?php echo $res['type']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Prix</th>
		<td><input type="text" name="price"  value="<?php echo $res['price']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Détails</th>
		<td><textarea name="details"  class="form-control"><?php echo $res['details']; ?></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Modifier détails chambre" name="update"/>
		</td>
	</tr>
</table> 
</form>