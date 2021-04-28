<?php
	require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table des Clients</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section class="main-content">
		<div class="container">
			<h1>Clients de SENCLOUD</h1>
			<br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Ajouter Client
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="post" action="user.php">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Ajout Client</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nom</label><br>
                                <input type="text" name="nom"><br>
                            </div>
							<div class="form-group">
                                <label>Prénom</label><br>
                                <input type="text" name="prenom"><br>
                            </div>
                            <div class="form-group"²>
                                <label>Adresse</label><br>
                                <input type="text" name="adresse"><br>
                            </div>
                            <div class="form-group">
                                <label>Téléphone</label><br>
                                <input type="text" name="tel"><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                          <button type="button" class="btn btn-primary" name="bt_save">Enregistrer</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
			<br>

			<table class="table">
				<thead>
					<tr>
						<th>Utilisateur</th>
						<th>Status</th>
						<th>Emplacement</th>
						<th>Téléphone</th>
						<th>Contacter</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="user-info">
								<div class="user-info__img">
									<img src="img\téléchargement.png" height="50px" width="50px">
								</div>
								<div class="user-info__basic">
									<h5 class="mb-0"><?php echo $row['prenom']?></h5>
									<p class="text-muted mb-0">@<?php echo $row['prenom']?><?php echo $row['nom']?></p>
								</div>
							</div>
						</td>
						<td>
							<span class="active-circle bg-success"></span> Active
						</td>
						<td><?php echo $row['adresse']?></td>
						<td><?php echo $row['tel']?></td>
						<td>
							<button class="btn btn-primary btn-sm">Contacter</button>
						</td>
						<td>
							<div class="dropdown open">
								<a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="triggerId1">
									<a class="dropdown-item" href="edit.php"><i class="fa fa-pencil mr-1"></i> Edit</a>
									<a class="dropdown-item text-danger" name="bt-delete" href="user.php"><i class="fa fa-trash mr-1"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>