<?php
		if($_post){//submit the form
			$userNom = $_post['nom'];
			$userPrenom = $_post['prenom'];
			$userEmail = $_post['mail'];
			$userAdresse = $_post['adresse'];
			$userPhone = $_post['téléphone'];

			$to = "morocco.gamingrepublic@gmail.com"
			$body = "";

			$body .= "De la part de": ".$userName" ".userPrenom" "\r\n";
			$body .= "Email": ".$userEmail" "\r\n";
			$body .= "Adresse": ".$userAdresse" "\r\n";
			$body .= "Téléphone": ".$userPhone" "\r\n";


			//mail($to,$messageSubject,$body)}
			//submit the form
			$userNom = $_post['nom'];
			$userPrenom = $_post['prenom'];
			$userEmail = $_post['mail'];
			$userAdresse = $_post['adresse'];
			$userPhone = $_post['téléphone'];

			$to = "morocco.gamingrepublic@gmail.com"
			$body = "";

			$body .= "De la part de": ".$userName" ".userPrenom" "\r\n";
			$body .= "Email": ".$userEmail" "\r\n";
			$body .= "Adresse": ".$userAdresse" "\r\n";
			$body .= "Téléphone": ".$userPhone" "\r\n";


			//mail($to,$messageSubject,$body)
?>