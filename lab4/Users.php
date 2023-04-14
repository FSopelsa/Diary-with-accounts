<?php
$names = array("Felix","Kajsa-Stina", "Sot");
$usernames = array("Felix_un","Kajsa-Stina_un", "Sot_un");
$passwords = array("password", "lösen", "mjao");

//Klass 
class User {
    //Egenskaper
    public $name;
    public $username;
    public $password;

    public function __construct(&$name, &$username, &$password) {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
    }
}
//Skapar ett objekt per användare och fyller detta med info med hjälp av indexering
$nummer = count($names);
for ($i=0; $i<$nummer; $i++) {
    $account[$i] = new User($names[$i], $usernames[$i], $passwords[$i]);
    var_dump($account[$i], "<br>"."<br>");
}    

?>