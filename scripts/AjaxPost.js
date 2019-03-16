/*function keyPressed(){
    alert("Vous avez appuyez sur une touche");
}*/

function keyPressed() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200); {
            document.getElementById("etudiants").innerHTML = xhr.responseText;
        }
    }

    var prenom = document.getElementById("prenom").value;
    xhr.open('POST', 'controllers/script_etudiants_apost.php');
    xhr.send("prenom=" + prenom);

}