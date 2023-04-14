<?php
session_start();
$a = intval($_GET['a']);
$b = intval($_GET['b']);

if (!isset($_GET['a']))
$a = intval(0);

if (!isset($_GET['b']))
$b = intval(0);

//if (isset($_GET['a']) && isset($_GET['b'])) {
  //  $summa = $a + $b ;
    echo $a + $b ;
//}
    
?>


<form class="form-signin" role="form" method="get">
<input type="text" class="form-control" name="a"><br>
<input type="text" class="form-control" name="b"><br>
          <button type="submit" name="addera">Addera</button>
</form>