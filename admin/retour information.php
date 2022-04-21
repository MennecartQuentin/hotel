<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this Feedback ?"))
		{
		window.location.href='supprimer message.php?id='+id;	
		}
	}
</script>
<table class="table table-striped table-hover">
	<h1>Contact</h1><hr>
	<tr>
		<th>Numéro</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Email</th>
		<th>Option</th>
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
$lastname=$res['prenom'];
$email=$res['email'];
$mobile	=$res['option'];
$message=$res['message'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['prenom']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['option']; ?></td>
		<td><?php echo $res['message']; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
</table>