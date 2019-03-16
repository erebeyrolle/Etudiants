<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Etudiants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="etudiants.php" method="get">
<table>
<tr>
<td><br/></td>
</tr>
    <tr>
        <td><label for="prenom">PRENOM</label> : </td>

        <td><input type="text" name="prenom" id="prenom" /></td>
        </tr>
<td><br/></td>
</tr>
<tr>
        <td></td>
        <td ><input type="submit" value="Valider" class="Valider" /></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];
}
function getOneStudent($prenom) {
    $connec = new PDO('mysql:host=localhost; dbname=Etudiants','root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM Students WHERE prenom
                                            LIKE '%$prenom%';");


    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

$response = getOneStudent($prenom);

foreach ($response as $key => $value):
    echo $value['nom']."\n";
    echo $value['prenom'].'<br/>';
endforeach;

?>