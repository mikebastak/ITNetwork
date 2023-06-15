<?php
include '../ovladac/ovladac.php';
include '../ovladac/formular.php';

$formular = new formular();
$ovladac = new ovladac();

include '../zobrazeni/Header.html';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pojištěnci Aplikace</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Stranka.css">
</head>


<body>

<h1>
    Pojištěnci
</h1>


<?php
$ovladac->nactiPojistence();
?>
<h1>
    Nový pojištěnec
</h1>
<?php
$formular->show();
?>

</body>


</html>
