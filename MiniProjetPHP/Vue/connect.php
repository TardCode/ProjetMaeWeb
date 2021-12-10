<?php 
    if (isset($_SESSION['USR_name']))
    {
        echo '<meta http-equiv="refresh" content="1;?page=accueil" />';
    }
    else 
    {
        ?>
    <div class="container">
    <div class="row justify-content-center mt-1">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            
          </div>
          <div class="card-body ">
            <form method= "POST" action="index.php?page=login">
              <div class="mb-4" data-validate="le nom d'utilisateur est requis">
                <label for="username" class="form-label">Adresse Email</label>
                <input type="text" class="form-control" id="username" name="USR_mail" placeholder="Saisir le nom d'utilisateur"/>
              </div>
              <div class="mb-4" data-validate = "Mot de passe requis">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="USR_mdp" placeholder="Saisir le mot de passe"/>
              </div>
              <div class="d-grid">
                <button type="submit" name="submit" class="btn-dark text-light">Valider</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

	

        <?php

    }
	?>