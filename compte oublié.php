<?php 
include('connection.php');
error_reporting(1);
extract($_REQUEST);
if(isset($submit))
{
  $sql=mysqli_query($con,"select * from create_account where email='$email' ");
    if(mysqli_num_rows($sql))
    {
     $res=mysqli_fetch_assoc($sql); 
    $error= "<h3 style='color:blue'>votre mot de passe est :".$res['password']."</h3>"; 
    }
    else
    {
    $error= "<h3 style='color:red'>détails invalides</h3>"; 
    }  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hôtel en ligne</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="margin-top:50px;">
<?php
      include('barre de menu.php')
  ?>
    <div class="container-fluid" id="primary">
        <!-- Primary Id-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h1 style="margin-top:50px;padding-top:50px;">Compte oublié</h1>
                    <hr>
                    <?php echo  @$error; ?>
                    <p class="text-center">Veuillez saisir votre email ou votre numéro de téléphone pour trouver votre compte.</p><br><br>
                    <form method="post">
                        <div class="form-group">
                            <input type="Email" name="email" class="form-control" id="#" placeholder="Email ou numéro de téléphone" required>
                        </div>
                        <hr>
                        <input type="submit" value="submit" name="submit" class="btn btn-primary btn-group-justified" required>
                    </form><br><br><br><br>
                </div>
            </div>
        </div>
    </div>

    <?php
  include('bas de page.php')
?>
</body>

</html>