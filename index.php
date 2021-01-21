<?php
$x = 5;
$y = 10;

$polozky = array("Položka 1", "Položka 2", "Položka 3");

// Základní nejpoužívanější zápis podmínky
if ($x <= $y) {
    echo "pravda";
}

// jednořádkový zápis
if ($x <= $y) echo "pravda";

// Dvojtečka a endif
if ($x <= $y) :
    echo "pravda";
    echo "<br>";
    echo "Více řádků";
endif;

// Ternární výraz - jednořádkový zápis
$vysledek = ($x <= $y ? "Pravda" : "Nepravda");
echo $vysledek;

// Logické operátory
$a = 5;
$b = '5';
if (($a <= $b and $a === $b) or $a === $x) {
    echo "<h1>Podmínka platí</h1>";
}

$c = "";
// Vynechání logických operátorů
if ($c) {
    echo "Cčko platí";
}

$teplota = -11;

if ($teplota > 20) {
    // obleču si jen tričko
} elseif ($teplota > 10) {
    // vezmu si mikinu
} elseif ($teplota > 0) {
    // vezmu si bundu
} elseif ($teplota > -10) {
    // vezmu si hrubý kabát
} else {
    // nejdu ven
}

$den = "čtvrtek";

if ($den = "pondělí") {
    // jde se do školy
} elseif ($den = "úterý") {
    // dnes máme databáze
} elseif ($den = "středa") {
    // něco udělej
} elseif ($den = "čtvrtek") {
    // dnes máme prográmko
} elseif ($den = "pátek") {
    // něco udělej
} elseif ($den = "sobota") {
    // jde se kalit
} elseif ($den = "neděle") {
    // jde se do kostela
} else {
    // nic nedělej :-)
}

// číslo dne v týdnu
$cislo_dne_v_tydnu = date("w");

switch ($cislo_dne_v_tydnu) {
    case 1:
        $den = "pondělí";
        break;
    case 2:
        $den = "úterý";
        break;
    case 3:
        $den = "středa";
        break;
    case 4:
        $den = "čtvrtek";
        break;
    case 5:
        $den = "pátek";
        break;
    case 6:
        $den = "sobota";
        break;
    case 7:
        $den = "neděle";
        break;
    default:
        $den = "Asi žijete v jiné dimenzi, protože takové číslo dne u nás neexistuje :-)";
}

// Switch není úplně vhodný na hodně podmínek, proto to uděláme jinak :-)
$cislo_mesice = date("n");
$mesic = array(1 => "ledna", "února", "března", "dubna", "května", "června", "července", "srpna", "září", "řijna", "listopadu", "prosince");

echo "Dnes je " . $den . ", " . date("j") . ". " . $mesic[$cislo_mesice] . " " . date("Y");

$zbyva_hodin = 23 - date("G");
$text = "Do konce dne zbývá ";

switch ($zbyva_hodin) {
    case 1:
        $hodina = "hodina";
        break;
    case 2:
    case 3:
    case 4:
        $hodina = "hodiny";
        break;
    default:
        $hodina = "hodin";
        break;
}

echo "<h1>" . $text . $zbyva_hodin . " " . $hodina . "!</h1>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Podmínky</h1>
        <?php if ($x <= $y) : ?>
            <div><a href="#">Položka 1</a></div>
            <div><a href="#">Položka 2</a></div>
            <div><a href="#">Položka 3</a></div>
        <?php endif; ?>

        <?php
        if ($x <= $y) {
            echo "<div><a href=\"#\">Položka 1</a></div>";
            echo "<div><a href=\"#\">Položka 2</a></div>";
            echo "<div><a href=\"#\">Položka 3</a></div>";
        }
        ?>

        <?php foreach ($polozky as $p) : ?>
            <div><a href="#"><?php echo $p; ?></a></div>
        <?php endforeach; ?>

    </div>
</body>

</html>