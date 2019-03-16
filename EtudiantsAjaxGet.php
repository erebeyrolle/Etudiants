<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Etudiants avec AJAX</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
     <script src="scripts/AjaxGet.js"></script>
</head>
<body>
     <form action="controllers/scripts_etudiants_aget.php" method="get">
          <table>
               <tr>
                    <td><br/></td>
                         <tr>
                              <td><label for="prenom">PRENOM</label> : </td>
                              <td><input oninput="keyPressed()" type="text" name="prenom" id="prenom" /></td>
                         </tr>
                    <td><br/></td>
               </tr>
          </table>
     </form>

<p id="etudiants"></p>

</body>
</html>