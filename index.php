<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>AlgoStats</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
	<script src="./js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 class="header">AlgoStats</h1>
		</div>
		<div class="col-md-6 formulaire">
			<form action="./home.php" method="POST">
				<label class="mr-sm-2" for="inlineFormCustomSelect">AlgoStats</label>
				<select name="choix" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
					<option value="1">Tri par insertion</option>
 					<option value="2">Tri par par sélection</option>
			    	<option value="3">Tri à bulles</option>
			    	<option value="4">Tri Shell</option>
			    	<option value="5">Tri Fusion</option>
			    	<option value="6">Tri Rapide</option>
			    	<option value="7">Tri Peigne</option>
				</select>
				<br><br>
			</label>
			<div class="form-group">
				<input type="text" name="nombres" class="form-control" value="2;5;6;1;2;4;">
			</div>
			<button type="submit" class="btn btn-primary">Go !</button>
		</form>
	</div>
</div>
</body>
</html>