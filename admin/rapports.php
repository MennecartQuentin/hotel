<?php 
$i=1;
$con=mysqli_connect("localhost","root","","hotel") or die('La connexion à la base de données a échoué');
$sql=mysqli_query($con,"select * from admin");
while($res=mysqli_fetch_assoc($sql))
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel Hypnos</title>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body>
<h1 style="background-color:#ed2553;border-radius:50px;text-align:center;font-family: 'Baloo Bhai', cursive;box-shadow:5px 5px 9px black;text-shadow:2px 2px #fff;">Admin Profile</h1><br>
<center><img src="devlop/img2.png"style="width:180px;height:180px;background-color:blue;"class="img-circle"></center>
<div class="container"style="width:100%;">
  <form action="/page action.php">
    <div class="form-group">
      <label for="email">Nom :</label>
       <input type="text" id="username" value="<?php echo $res['username']; ?>" class="form-control" name="name" readonly="readonly"/>
    </div>
    <div class="form-group">
      <label for="pwd">Mot de passe :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Entrer mot de passe" name="pwd"value="<?php echo $res['password']; ?>">
    </div>
  </form>
</div>
<?php   
}
?>
</body>
</html>