<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Skatboard (#1)</h1>
    <h1>Basketbal (#2)</h2>
    <h1>Skeelers (#3)</h3>
    <form action="cart.php" method="get">
        Keuze: <input type="number" name="keuze" min="1" max="3"> 
        <input type="submit">
    </form>
    
</body>
</html>

<?php   
session_start();
if(isset($_GET["keuze"]) || $_GET["keuze"] <= 3) {
    $_SESSION['keuze'] = $_GET["keuze"];
    echo"Gekozen item:". $_SESSION["keuze"];
   

}


?>