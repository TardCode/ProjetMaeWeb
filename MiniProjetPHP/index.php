<?php

include('Vue/headHTML.php'); 


if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require 'Controller/ConnectToBDD.php';

//Tableau des pages autorisées à l'include
$pagesOK['accueil'] = 'Page d\'accueil du site web';
$pagesOK['login'] = 'Login/Connexion';
$pagesOK['test'] = 'Test';
$pagesOK['contact'] = 'Page contact';
$pagesOK['deconnect']= 'Deconnexion de l\'utilisateur';



//Page par defaut
$page = 'connect';
$infos = 'GESTION TRAVAUX Bienvenue';


//Si le $_GET['page'] est dans les keys du tableau $pagesOK
if(!empty($_GET['page'])
&& array_key_exists($_GET['page'], $pagesOK))
{
    //Remplace la valeur par defaut par celle de l'URL
    $page = $_GET['page'];
	$infos = $pagesOK[$page];
}

// ---------------------- HEADER
if ($page != 'connect')
            {
                include('Vue/header.php');  
            }

echo'<div id="main" class="'.$page.'">	
		<div id="contenu">';
// ---------------------- CONTENU
	include('Vue/'.$page.'.php');
echo'</div> 
</div>';
// ---------------------- FOOTER
if ($page != 'connect')
            {
                
                include('Vue/footer.php');  
                   
            }
	
?>
