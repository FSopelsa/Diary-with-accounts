<?php ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
// ________________________________________________________________________________________,
// Kopplar upp mot databas genom att skicka med inloggningsuppgifter till 
// mysqli_connect-funktionen, och sparar sedan ihopkopplingen med servern i varibeln $conn.

    $servername = "localhost";
    $my_username = "fn222hn";
    $my_password = "Jtrvsk";
    $conn = mysqli_connect($servername, $my_username, $my_password, $my_username);
?>
<!----------------------------------------------------------------------------html-->

<html>
	<head>
		<meta charset="UTF-8">
		<title>Webbteknik 4 - Inlämningsuppgift. -Felix Sopelsa Nilsson</title>
		<link rel="stylesheet" type="text/css" href="css/layout.css">
	</head>
	<body>
		<header>
			<h1>Dagbok</h1>
		</header>
		<main>
			<div>	
<!---->
               	<?php 
// ________________________________________________________________________________________,
// Med hjälp av det ID som skickats med i $_GET (genom att klicka på länken) väljs rätt inlägg ut från databasen.
// Sedan skrivs inläggets olika delar ut på sidan i varsit element, och stilsätts av css.

                    $this_post = $_GET['id'];
                    $post = mysqli_query($conn, "SELECT * FROM diary WHERE ID = $this_post");
                    while ($post_parts = mysqli_fetch_array($post)) {
                        echo "<div class='posts'>" . 
					         "<h2>" . $post_parts['headline'] . "</h2> 
                             <h3>" . $post_parts['content'] . "</h3>
                             <p>Signatur: " . $post_parts['signature'] . "<br>
                             Publicerat: " . $post_parts['timestamp'] . "</p> <br>
                             </div>";
                        } 
                    ?>
<!----------------------------------------------------------------------------html-->

			</div>	
            <div>
                <h3><a href="ingångssida.php"> Tillbaka till Ingångssidan</a></h3>
            </div>
		</main>
	</body>
	<footer>
		<p>Webbteknik 4 - Inlämningsuppgift -Felix Nilsson</p>
	</footer>
</html>
<!---->