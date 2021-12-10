<?php 
    if (isset($_SESSION['USR_name']))
    {
        echo '<meta http-equiv="refresh" content="1;?page=connect" />';
        
        session_destroy(); ?>
<div class="container">
    <img src="design/Logo.png" class="img-fluid" alt="Logo Gestion Travaux">
    <div class="row justify-content-center mt-1">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card shadow">
                <div class="card-title text-center border-bottom"></div>
                <div class="card-body ">
                    <style>
                        .loader {
                            text-align:center;
                            margin-left:40%;
                            margin-right:40%;
                            border: 6px solid #32363A;
                            border-radius: 50%;
                            border-top: 6px solid #0F74BA;
                            width: 60px;
                            height: 60px;
                            -webkit-animation: spin 1s linear infinite; /* Safari */
                            animation: spin 1s linear infinite;
                        }

                        /* Safari */
                        @-webkit-keyframes spin {
                            0% { -webkit-transform: rotate(0deg); }
                            100% { -webkit-transform: rotate(360deg); }
                        }

                        @keyframes spin {
                            0% { transform: rotate(0deg); }
                            100% { transform: rotate(360deg); }
                        }
                    </style>

                    <div class="loader"></div>
                    <div>
                        <h2>Déconnexion </h2>
                        <p>Vous êtes déconnecté.<br />
                            <a href="?page=connect" class="Stitre">Cliquez ici pour vous reconnecté...</a>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <?php
    }
    
 
?>