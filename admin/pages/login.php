<div class="container">
    <div class="row">
        <div class="col l4 m6 s12 offset-l4 offset-m3">
            <div class="card-panel">
                <div class="row">
                    <div class="col s6 offset-s3">
                        <img src="imgs/admin.png" alt="Administrateur" width="100%"/>
                    </div>
                </div>
                <h4 class="center-align">Se connecter</h4>
                 <?php
                    if(isset($_POST['submit'])):
                        $login = trim($_POST['login']);
                        $pass = trim($_POST['pass']);
                
                        $errors = [];
                
                        if(empty($login) || empty($pass)):
                            $errors['empty'] = "Tous les champs n'ont pas été remplis";                        
                        elseif($login != "admin" && $password != "admin"):
                            $errors['fail'] = "paramètres erronés";
                        endif;    
                        
                        
                        if(!empty($errors)): ?>                       
                        <p>
                        <?php
                            foreach($errors as $val):
                                echo $val;
                            endforeach;
                        ?>
                        </p> 
                        <?php   
                        else:
                            $_SESSION['login'] = $login;
                            header('location:index.php?menu=dashboard');
                        endif;
                    
                    endif;

                ?>
                <form method="post">
                    <div class="row">
                        <div class="input-field col m12 s12">
                            <input type="text" id="login" name="login">
                            <label for="login">Votre login</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col m12 s12">
                            <input type="password" id="pass" name="pass">
                            <label for="pass">Mot de passe</label>
                        </div>
                    </div>

                    <center>
                        <button type="submit" name="submit" class="waves-effect waves-light btn teal">
                            <i class="material-icons left">perm_identity</i>
                            Se connecter
                        </button>
                        <br/><br/>
                        <a href="">Nouveau modérateur</a>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>