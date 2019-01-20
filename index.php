<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GACHA CHECK</title>
</head>
<body>

    <?php
    //
    // [ID, 表示名, レア度, 確率]

    require_once("raritycollection.php");
    require_once("unitcollection.php");
    require_once("data.php");

    print_r("<br>"."///////////////"."<br>");
    echo "<br>";
    // /***
    if(@$_POST['gacha'] == True){
        $v = filter_input(INPUT_POST, 'gacha');
        $results = $unit_array->SelectUnit($rarities, $v);

        foreach ($results as $key => $value) {
            print_r(($key+1).". ".$value."<br>");
        }
    }
    // ***/

    echo "<br>"."///////////////"."<br>";
    echo "以上のアイテムをGETだぜ!！";

    ?>


    <div>
        <form method="POST" action="index.php">
            <input type = "hidden" name="gacha" value="1" />
            <input type="submit" value="単発" />
        </form>

        <form method="POST" action="index.php">
            <input type = "hidden" name="gacha" value="10" />
            <input type="submit" value="10連" />
        </form>
    </div>
</body>
</html>
