<?php ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
// ________________________________________________________________________________________,
// Startar en session för användningstillfället där t.ex. variabler kan sparas.
// Dess huvudsakliga syfte i denna app är att flagga användaren som inloggad om giltiga
// uppgifter fyllts i - därmed får användaren tillgång till författarverktyget.	
	session_start(); 

// ________________________________________________________________________________________,
// Kopplar upp mot kursens server genom att skicka med inloggningsuppgifter till 
// mysqli_connect-funktionen, och sparar sedan ihopkopplingen med servern i varibeln $conn.
//   	Sedan hämtas alla inlägg som lagrats i databasen, för att till slut sparas 
// i en array ($posts) i kronologisk ordning (sorterat efter publicerings-timestamp).

	$servername = "localhost";
	$my_username = "fn222hn";
	$my_password = "Jtrvsk";
	$conn = mysqli_connect($servername, $my_username, $my_password, $my_username);
		if (!$conn) { 
			die("Connection failed: " . mysqli_connect_error());
		}
		
	$diary = mysqli_query($conn, "SELECT * FROM diary ORDER BY `timestamp` DESC");
	$posts = mysqli_fetch_array($diary);
?>

<!----------------------------------------------------------------------------html-->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Inlämningsuppgift Webbteknik 4 - Felix Sopelsa Nilsson</title>	 
		<link rel="stylesheet" type="text/css" href="css/layout.css">
	</head>
	<body>
		<header>
			<h1>Dagbok</h1>
<!---->
				<?php 	
// __________________________________________________________________________________________________________,							
// Styr huruvida fält för inloggning, eller länkar till författarverktyget ska visas i sidans <head>-del.
// Den inkluderade filen 'login.php' avgör användarens status, och beroende på om sessionen där flaggats med -
// "logged_in" eller "logged_out" renderas respektive element på sidan.												 	

					include 'login.php';
					if (!isset($_SESSION['status']) || $_SESSION['status'] == "logged_out") {
						echo "<form method=\"post\">
							<input type=\"text\" name=\"username\" placeholder=\"Användarnamn\" required/>
							<input type=\"password\" name=\"password\" placeholder=\"Lösenord\" required/>
							<input type=\"submit\" value=\"Logga in\" />";
					} 
					else if ($_SESSION['status'] == "logged_in") {
						echo "<a href=\"författarverktygssida.php\"> Skriv ett inlägg</a>";
						echo "<a href=\"logout.php\"> Logga ut</a>";
					}
				?>

		</header>
		<main>
			<?php 
// ________________________________________________________________________________________,
// Går igenom de inlägg som laddats ned och sparats i $posts och skriver ut dem i 
// den ordning de sparats eftersom de redan är sorterade i kronologisk ordning.
// Inläggens rubriker görs till länkar, som leder till dess unika sida genom att inkuldera unikt ID.
                while ($posts = mysqli_fetch_array($diary)) {
					echo "<div class='posts'>" . 
						 "<h2> <a href='inläggssida.php?id=" .$posts['ID']. "'>" . $posts['headline'] . "</a> </h2> 
						 <h3 id=\"content\">" . $posts['content'] . "</h3>
						 <p>Signatur: " . $posts['signature'] . "<br>
						 Publicerat: " . $posts['timestamp'] . "</p> <br>
						 </div>";
                }   
            ?>
<!----------------------------------------------------------------------------html-->
		</main>
	</body>
	<footer>
		<p>Inlämningsuppgift Webbteknik 4 - Felix Sopelsa Nilsson</p>
	</footer>
</html>
<!---->