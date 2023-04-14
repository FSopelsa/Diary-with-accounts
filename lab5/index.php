<?php
    $data = file_get_contents('Shopping_list.json');
    $json = json_decode($data);

    if (!empty($_POST)) {
        $number_of_items = count($json->items);
        $item_number = $number_of_items + 1;
        $item = new Item($_POST['item'], $item_number);
        $json_item = json_encode($item);

    //Lägg till $_POST['item'] i json-filen
        $file = fopen("Shopping_list.json","r+");
        fseek($file, -10, SEEK_END);
        fwrite($file, ",
            " . $json_item . "
    ]
}");qd
    }

    //Klass 
class Item {
    public function __construct(&$item, $item_number) {
        $this->item = $item;
    }
}
?>

<html>
    <head>
        <title>1ME324: Webbteknik 4 - Laboration: Dataformat</title>
    </head>
    <body>
        <h1>Shopping list</h1>
        <p>This is a list of things to be purchased.</p>
        <ul>
            <li> <?php 
                        if (!empty($json->items)) {
                            for($i=0; $i<$number_of_items; $i++) {
                                print_r ("<p><b>" . $json->items[$i]->item . "</b></p><br>");
                            }
                            echo "<p><b>" . $_POST['item'] . "</b></p><br>";
                    }
                ?>
            </li>
        </ul>
        <form action="index.php" method="post">
            <input type="text" name="item" placeholder="Product to buy" />
            <input type="submit" value="Add" />
        </form>
    </body>
</html>