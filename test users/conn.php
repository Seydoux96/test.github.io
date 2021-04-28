<?php
    function connect (){
	$servername = '127.0.0.1';
	$username = '';
	$password = '';
	$db='sencloud';
	
	// Create connection
	
		$conn = mysqli_connect($servername,$username,$password,$db);
	// Check connection
		if (!$conn) 
		{
		die("Echec de Connexion: " . mysqli_connect_error());
		} 	 
		else 
		{
		//echo 'Connexion reussie à la Base de donnéees des OP'.'<br>';
		}
		mysqli_select_db($conn,$db);
		return $conn;
	}
    
    function fermerconnexion($conn)
		{
			mysqli_close($conn);
		}
    
    function insert_user($nom,$prenom,$adresse,$tel)
		{
            $sql = "INSERT INTO `users`(`nom`, `prenom`, `adresse`, `tel`) VALUES (".$nom.",".$prenom.",".$adresse.",".$tel.")";
			
			$conn=connect();
			$exe=mysqli_query($conn,$sql);
			return $exe;
		}	
	
		function list_user()
		{
			$sql="SELECT * FROM `users`";
			
			$conn=connect();
			$exe=mysqli_query($conn,$sql);
			return $exe;
		}
		
		function edit_user($id_users)
		{
			$sql="SELECT * FROM `users`  WHERE ID_USER =".$id_users;
			
			$conn=connect();
			$exe=mysqli_query($conn,$sql);
			return $exe;
		}
        
        function update_user($nom,$prenom,$adresse,$tel)
        {
            $sql="UPDATE `users` SET `nom`=".$nom.",`prenom`=".$prenom.",`adresse`=".$adresse.",`tel`=".$tel." WHERE `id_users`=".$id_users."";
            
            $conn=connect();
			$exe=mysqli_query($conn,$sql);
			return $exe;
        }
        
        function delete_user($id_users)
        {
            $sql = "DELETE FROM `users` WHERE ID_USER =".$id_users."";
            
            $conn=connect();
			$exe=mysqli_query($conn,$sql);
			return $exe;
        }
?>