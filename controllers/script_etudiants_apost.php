<?php
if(isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
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