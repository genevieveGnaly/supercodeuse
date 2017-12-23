<?php include('connexion.php');
$msg="";
if (isset($_POST['btnvalider'])){
	$sql="INSERT INTO categorie (libelle,description) VALUES ('".$_POST['libelle']."','".$_POST['description']."')";
	$result=mysqli_query($link,$sql);
	if ($result){
		$msg='insertion reussite';
	} else{$msg=mysqli_error($link);
	}
}
 ?>


<!DOCTYPE html>

<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-comptable" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content=" c'est une boutique de vente en ligne d'article">
	<meta name="author" content=" Gnaly Genevieve">

	 <title> boutique admin</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>







<div class="container">

		<form role=form action="" name="form1" method="Post" >
			<legend>formulaire de categorie</legend>
			<span> <?php echo $msg; ?></span>

			<div class="form-group">
               <label for=""> Libelle </label > <input type="text" name="libelle" class="form-control" value="" placeholder="">
           </div>

		 <div class="form-group"> 
		 <label for=""> Description</label> <input type="text" 	name="description" class="form-control"  value="" placeholder="">
		</div>
         <input type="submit" class="btn btn-block btn-lg btn-success" id="btnvalider" value="valider" name="btnvalider">
		</form>

		<div class="row">
			<table class="table">

				<thead>
					<tr>
						<th> numero</th>
						<th> libelle</th>
						<th> desciption</th>
						<th> action</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<?php 
						$n=1;
						$list="SELECT *FROM categorie";
						$res=mysqli_query($link,$list);
		while ($data=mysqli_fetch_array($res)) {
						
						
						  ?>
						<tr>
						<td> <?php echo $n; ?> </td>
						<td> <?php echo $data['libelle'] ?></td>
						<td> <?php echo $data['description'] ?></td>
						<td></td>
					</tr>
					<?php $n++;
				} ?>
				</tbody>



			</table>
</div>
</div>

</body>
</html>