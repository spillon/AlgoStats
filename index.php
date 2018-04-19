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
			<form method="post">
				<label class="mr-sm-2" for="inlineFormCustomSelect">AlgoStats</label>
				<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
					<option value="3">Tri par insertion</option>
 					<option value="3">Tri par par sélection</option>
			    	<option value="1">Tri à bulles</option>
			    	<option value="2">Tri Shell</option>
			    	<option value="3">Tri Fusion</option>
			    	<option value="3">Tri Rapide</option>
			    	<option value="3">Tri Peigne</option>
				</select>
				<br><br>
				<input type="checkbox" class="custom-control-input">
			</label>
			<div class="form-group">
				<input type="text" name="user" class="form-control" id="login" aria-describedby="loginHelp" placeholder="1; 2; 3; 4">
			</div>
			<button type="submit" class="btn btn-primary">Go !</button>
		</form>
	</div>
</div>
</body>
</html>