<?php ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
// ________________________________________________________________________________________,
// Skapar och testar uppkoppling mot databas.
$servername = "localhost";
$my_username = "fn222hn";
$my_password = "Jtrvsk";
$conn = mysqli_connect($servername, $my_username, $my_password, $my_username);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

//_____________________________________________________________________________________________________
// -Skapar ett objekt per användare med parametrarna ID($users[0]), användarnamn($users[1]) och lösenord($users[2])
// -Lägger även in användare och användarnamn i varsin array för jämförelse vid inloggningsförsök
$user_array = [];
$username_array = [];
$result = mysqli_query($conn, "SELECT * FROM users");

while ($users = mysqli_fetch_array($result)) {
    $account = new User($users[0], $users[1], $users[2]);
    array_push($user_array, $account);
    array_push($username_array, $users[1]);
}
mysqli_free_result($result);

//Klass 
class User {
    //Egenskaper
    public $ID;
    public $username;
    public $password;

    public function __construct($ID, $username, $password) {
        $this->ID = $ID;
        $this->username = $username;
        $this->password = $password;
    }
}
$nummer = count($user_array);
if (isset($_POST['username'])) {
    for ($i=0; $i<$nummer; $i++) {
        if ($_POST['username']==$user_array[$i]->username && $_POST['password']==$user_array[$i]->password) {
            $_SESSION['status'] = "logged_in";
            $_SESSION['signature'] = $_POST['username'];
            
            break;
        }    
        else if (!in_array($_POST['username'], $username_array)){
            $_SESSION['status'] = "logged_out";
            $_SESSION['signature'] = "";
            echo '<p>There is no user named ' . $_POST['username'] . '.</p>';
            session_destroy();
            break;
        }
    }
}
?>