<table class="table table-bordered table-striped table-hover">
	<h1>Enregistrement d'utilisateur</h1><hr>
	<tr>
		<th>Numéro</th>
		<th>Nom</th>
		<th>Email</th>
		<th>Mot de passe</th>
		<th>Numéro de téléphone</th>
		<th>Adresse</th>
		<th>Genre</th>
		<th>Country</th>
		<th>Photo</th>
	</tr>
	<?php  
$i=1;
$con=mysqli_connect("localhost","id18817619_hypnos_hotel","Qsm16051998*","id18817619_hotel") or die('La connexion à la base de données a échoué');
$sql=mysqli_query($con,"select * from create_account");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['password']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['country']; ?></td>
		<td><?php echo $res['pictrure']; ?></td>
	</td>
	</tr>	
<?php 	
}
?>	