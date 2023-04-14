 <?php
$servername = "localhost";
$username = "fn222hn";
$password = "Jtrvsk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $username);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

$result = mysqli_query($conn, "SELECT NAME FROM artist");
$artist = mysqli_fetch_array($result);
echo $artist["NAME"];

while ($artist = mysqli_fetch_array($result)) { // go through each row that was returned in $result
    //var_dump ($artist);
    echo($artist[0] . "<br>");                  // print what was returned on that row.
}
// Free result set
mysqli_free_result($result);


?> 


<html>
    <head>
        <title>Artists</title>
    </head>
    <body>
        <h1>Artists</h1>
        <h2><?php $result = mysqli_query($conn, "SELECT NAME FROM artist");
                  $artist = mysqli_fetch_array($result);
                  echo $artist["NAME"];?>
        </h2>
        <p>Here are some albums from this artist:</p>
        <ul>
            <li><a href="album.php?id=1">The Dark Side of the Moon (1973)</a></li>
        </ul>
    </body>
</html>