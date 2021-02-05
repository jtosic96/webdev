<?php 
if(isset($_POST['submit'])){
    $to = "j.tosic96@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " napisao je sljedeće:" . "\n\n" . $_POST['message'];
    $message2 = "Ovo je kopija vaše poruke: " . $first_name . "\n\n" . $_POST['message'];

    $headers = "Od:" . $from;
    $headers2 = "Od:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Poruka poslana. Puno zahvaljujemo " . $first_name . ", kontaktirat ćemo vas u najkraćem mogućem roku.";
    }
?>

<!doctype html>
<html>

	<head>
		
		<meta name="viewport" content="width=device-width">
		<title>PRISM SPECTRUM</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="proizvodi.html" rel="stylesheet">
		<link href="katalog.html" rel="stylesheet">
		<link href="cjenik.html" rel="stylesheet">
		<link href="kontakt.php" rel="stylesheet">
		
		
	</head>

	<body>
	
		<div id="header">
			
			
			<div id="menu">
				<img id="logo" src="img/logo01.svg">
				<a class="menulink" href="index.html">NASLOVNICA</a>						
				<a class="menulink" href="proizvodi.html">PROIZVODI</a>
				<a class="menulink" href="katalog.html">KATALOG</a>
				<a class="menulink" href="cjenik.html">CJENIK</a>
				<a class="menulink" href="kontakt.php"><b>KONTAKT</b></a>
			</div>
		</div id="header">
		
		
		<div id="main">
			 
			<div id="contactform" class="textbox">
				 
				 <p>PRISM SPECTRUM Computers</p>
				 <p>OIB:12345678901</p>
				 <br>
				 <p>Trg kralja Tomislava 11</p>
				 <p>Opuzen, Republika Hrvatska</p>
				 <br>
				 <p>tel: 090 000 000</p>
				 
				 <img src="img/lokacija01.png" class="lokacija">
				 <img src="img/lokacija02.png" class="lokacija">
				 <img src="img/lokacija03.png" class="lokacija">
				 <hr><br>
				 
				 
				 <form action="" method="post">
					Ime: <input type="text" name="first_name"><br>
					Prezime: <input type="text" name="last_name"><br>
					E-mail: <input type="text" name="email"><br>
					Vaš upit:<br><textarea rows="5" name="message" cols="30"></textarea><br>
					<input type="submit" name="submit" value="Pošalji">
					<input type="submit"  id="clear" value="Poništi">
				</form>
				 
				
				 
			</div> 
			
			<div id="map" class="textbox">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1031.3725748166144!2d17.56301835796675!3d43.01697370788444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba7488ce17fb1%3A0x8ae35d9e7376941b!2sTrg%20kralja%20Tomislava%2011%2C%2020355%2C%20Opuzen!5e0!3m2!1shr!2shr!4v1593121307992!5m2!1shr!2shr" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0">
				</iframe>
			</div>
			
			
		</div>
				
		
		<div id="footer">
			PRISM SPECTRUM Computers | Seminarski rad za POU Algebra-Web dizajn | Lipanj, 2020.
		</div id="footer">
	
	</body>

</html>
