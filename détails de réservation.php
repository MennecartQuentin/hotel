<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hôtel Hypnos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="margin-top:50px;">
<?php
      include('barre de menu.php')
  ?>
    <div class="container-fluid">
        <!--Primary Id-->
        <h1 class="text-center text-primary">[ Les détails de réservation ]</h1><br>
        <div class="container">
            <div class="row">
                <table class="table table-striped table-bordered table-hover table-responsive" style="height:150px;">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Numéro de téléphone</th>
                        <th>Addresse</th>
                        <th>Pays</th>
                        <th>Type de la chambre</th>
                        <th>Vérifier la date d'entrée</th>
                        <th>Vérifier le temps d'entrée</th>
                        <th>Vérifier la date de sortie</th>
                        <th>Occupation</th>
                        <th>Annuler</th>
                    </tr>

                    <?php 
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid' "); 
while($result=mysqli_fetch_assoc($sql))
{
$oid=$result['id'];
echo "<tr>";
echo "<td>".$result['name']."</td>";
echo "<td>".$result['email']."</td>";
echo "<td>".$result['phone']."</td>";
echo "<td>".$result['address']."</td>";
echo "<td>".$result['country']."</td>";
echo "<td>".$result['room_type']."</td>";
echo "<td>".$result['check_in_date']."</td>";
echo "<td>".$result['check_in_time']."</td>";
echo "<td>".$result['check_out_date']."</td>";
echo "<td>".$result['Occupancy']."</td>";
echo "<td><a href='annuler la réservation.php?order_id=$oid' style='color:Red'>Cancel</a></td>";
echo "</tr>";
}                         
               ?>
                </table>

            </div>
        </div>
    </div>
    <?php
  include('bas de page.php')
?>
</body>

</html>