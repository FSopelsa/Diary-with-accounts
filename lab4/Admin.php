<?php
$names = array("Felix","Kajsa-Stina", "Sot");
$usernames = array("Felix_un","Kajsa-Stina_un", "Sot_un");
$passwords = array("password", "lösen", "mjao");
$admin_access = "access_key";

//Klass 
class Admin {
    //Egenskaper
    public $name;
    public $username;
    public $password;
    public $admin_key;

    public function __construct(&$name, &$username, &$password, $admin_access) {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->admin_key = $admin_access;
    }
}
//Skapar ett objekt per användare och fyller detta med info med hjälp av indexering
$nummer = count($names);
for ($i=0; $i<$nummer; $i++) {
    $account[$i] = new Admin($names[$i], $usernames[$i], $passwords[$i], $admin_access);
    var_dump($account[$i], "<br>"."<br>");
}    

?>
<?php
/*$users = array(
    $user0 = array("name"=>"Felix",      "username"=>"Felix_un",      "password"=>"password"),
    $user1 = array("name"=>"Kajsa-Stina","username"=>"Kajsa-Stina_un","password"=>"lösen"),
    $user2 = array("name"=>"sot",        "username"=>"sot_un",        "password"=>"mjao")
);

class User {
    //Egenskaper
    public $name;
    public $username;
    public $password;

    public function __construct($name, $username, $password) {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
    }
}
//Skapar ett objekt per användare och fyller detta med info med hjälp av indexering
$nummer = count($users);
for ($i=0; $i<$nummer; $i++) {
    $account = "";
    $account[$i] = new User($users[$i][0], $users[$i][1], $users[$i][2]);
    var_dump($account[$i], "<br>"."<br>");
}
var_dump($users);


coppy?>*/
?>