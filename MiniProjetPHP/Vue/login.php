<?php

if(!isset($_SESSION)) 
    { session_start();
}

if (isset($_POST['submit']))
{
    $USR_mail = $_POST['USR_mail'];
    $USR_mdp = $_POST['USR_mdp'];

    
//Connexion à la bdd

require("Controller/ConnectToBDD.php");

//récupération du mdp du user  
$sql = 'SELECT * FROM utilisateur where UserMail = "'.$USR_mail. '"';


$result = $bdd->prepare($sql);
$result->execute();

$donnees = $result->fetch(); 

$iduser = $donnees['id'];
$droit = $donnees['Admin'];
$hash = $donnees['UserMdp'];
if($result->rowCount() != 0 ) 
{
    if ($USR_mdp === $hash)
    {echo '<meta http-equiv="refresh" content="1;?page=accueil" />';
        $_SESSION['USR_name'] = $donnees["UserName"];
        $_SESSION['USR_droit'] = $droit;
        $_SESSION['USR_id'] = $iduser;
        include ("Vue/connexionAuto.php");
    }
    else
    {
        echo '<div class="container">
        <div class="row justify-content-center mt-1">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card shadow">
                    <div class="card-title text-center border-bottom"></div>
                    <div class="card-body ">
                    <div class="danger"><style>
                    div {
                      margin-bottom: 15px;
                      padding: 4px 12px;
                    }
                    
                    .danger {
                      background-color: #ffdddd;
                      border-left: 6px solid #f44336;
                    }</style><h3>Mot de passe incorrect</h3></div>     </div>
                 ';
        echo '
        <br />
        <a href="?page=connect" class="Stitre">Cliquez ici pour vous reconnecté...</a>
        </div>
                </div>
            </div>
        </div> ';
    }
}
else
{
    echo '<div class="container">
    <div class="row justify-content-center mt-1">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card shadow">
                <div class="card-title text-center border-bottom"></div>
                <div class="card-body ">
                <div class="danger"><style>
                div {
                  margin-bottom: 15px;
                  padding: 4px 12px;
                }
                
                .danger {
                  background-color: #ffdddd;
                  border-left: 6px solid #f44336;
                }</style><h3>Mot de passe ou Username incorrect</h3></div>     </div>
             ';
    echo '
    <br />
    <a href="?page=connect" class="Stitre">Cliquez ici pour vous reconnecté...</a>
    </div>
            </div>
        </div>
    </div> ';
}
}

?>
?>