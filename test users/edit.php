<?php
	require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifier Clients</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form method="post" action="user.php">
        <div class="form-group">
            <label class="col-sm-4">Prénom</label>
            <div class="col-sm-8">
                <input type="text" name="prenom" class="form-control" value="<?php echo $row['prenom']; ?>"
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4">Nom</label>
            <div class="col-sm-8">
                <input type="text" name="nom" class="form-control" value="<?php echo $row['nom']; ?>"
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4">Adresse</label>
            <div class="col-sm-8">
                <input type="text" name="adresse" class="form-control" value="<?php echo $row['adresse']; ?>"
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4">Téléphone</label>
            <div class="col-sm-8">
                <input type="text" name="tel" class="form-control" value="<?php echo $row['tel']; ?>"
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="bt_update" >Mettre à jour</button><br>
		<button type="button" class="btn btn-default" >Fermer</button>
    </form>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>