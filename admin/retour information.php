<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this Feedback ?"))
		{
		window.location.href='supprimer commentaires.php?id='+id;	
		}
	}
</script>
<table class="table table-striped table-hover">
	<h1>Commentaires</h1><hr>
	<tr>
		<th>Numéro</th>
		<th>Nom</th>
		<th>Email</th>
		<th>Téléphone</th>
		<th>Message</th>
		<th>Supprimer</th>
	</tr>
<?php 
$i=1;
$con=mysqli_connect("localhost","id18817619_hypnos_hotel","Qsm16051998*","id18817619_hotel") or die('La connexion à la base de données a échoué');
$sql=mysqli_query($con,"select * from feedback");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$name=$res['name'];
$email=$res['email'];
$mobile	=$res['mobile'];
$message=$res['message'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['message']; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
</table>