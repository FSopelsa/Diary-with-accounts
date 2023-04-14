<?php ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
// ________________________________________________________________________________________,
// Ser till att användaren är inloggad. Om sessionens 'status' inte är satt, eller
// om den är satt till 'logged_out', så öppnas istället ingångssidan.

session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] == "logged_out") {
  header("location: ingångssida.php");
  exit();
} 

// ________________________________________________________________________________________,
// Skapar och testar uppkoppling mot databas.
	$servername = "localhost";
	$my_username = "fn222hn";
	$my_password = "Jtrvsk";
	$conn = mysqli_connect($servername, $my_username, $my_password, $my_username);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		} 

// ________________________________________________________________________________________,
// När användaren klickar på publicera-knappen sparas den text som fylts i det html-renderade
// formuläret i varsin variabel, som sedan används i datainsättningen mysqli_query($conn, $query)".

if (isset($_POST['publish'])){
        $headline = $_POST['headline'];
        $content = $_POST['content'];
        $signature = $_SESSION['signature'];

        $query = "INSERT INTO diary (`headline`, `content`, `signature`) VALUES ('$headline','$content','$signature')";
        $run = mysqli_query($conn, $query);
        mysqli_close($conn);
      }
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
		</header>
		<main>
			<h3>Skriv ett inlägg</h3>
			<div class="posts">	
                <form method="post" action="författarverktygssida.php">
                    <input type="text" name="headline" placeholder="Rubrik" id="headline" required/>
				    <textarea type="text" name="content" placeholder="Skriv inlägg..." rows="15" cols="92" id="content_window" required></textarea>
				    <input type="submit" name="publish" value="Publicera" id="submit_button"/>
			    </form>
                <a href="ingångssida.php"> Tillbaka till startsidan</a>
			</div>
		</main>
	</body>
	<footer>
		<p>Inlämningsuppgift Webbteknik 4 - Felix Sopelsa Nilsson</p>
	</footer>
</html>
<!---->