<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="Yeo François" content="Mi_Register"/>
            <title>Inscription</title>
        </head>
        <body>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                <div class="form-control">
                    <input type="text" name="Nom_Prenoms " class="form-control" placeholder="Nom et Prénoms" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="saisissez à nouveau le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="formulaire">
                    <select name="niveau" id="niveau" class= form-control required="required" autocomplete="off">
                        <option value="Licence 1"> Licence 1 </option>
                        <option value="Licence 2"> Licence 2 </option>
                        <option value="Licence 3"> Licence 3 </option>
                        <option value="Master 1"> Master 1 </option>
                        <option value="Master 2"> Master 2 </option>
                    </select>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>   
                
            </form>
        </div>
        <style>
            body{
                background: #50BFF0;
            }
            .alert{
                background-color: red;
                text-align: center;
                font-family: "Raleway", "Open sans", "Trebuchet ms", sans-serif;
            }
            .login-form {
                width: 450px;
                margin: 50px auto;
                border: none;
                outline: none;
                
                
            }
            .login-form form {
                height:500px;
                margin-bottom: 15px;
                background: white;
                box-shadow: 0px 2px 2px ;
                padding: 60px;
                
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 40px;
                width: 300px;
                margin : 10px;
                outline: none;
            }
            .btn {   
                width: 150px;     
                outline: none;
                border: none;
                padding: 15px 30px;
                background-color: #50BFF0;
                border-radius: 9999px;
                transition: 0.3s;
                margin: 20px;
                font-size: 17px;
                color: white;
            }

            .btn:hover {
                    transform: rotate(5deg);
            }
            h2.text-center{
                width: 150px;
                height: 30px;
                transition: 0.3s;
                margin: 20px;
                text-align: center;
                font-family: "Raleway", "Open sans", "Trebuchet ms", sans-serif;
            }
            .text-center a{
                text-decoration: none;
                font-family:"Raleway", "Open sans", "Trebuchet ms", sans-serif;
                color:#50BFF0;
                font-size: 17px;
            }
            .text-center a:hover{
                
                transform: rotate(5deg);
            }
             p.text-center {
                width : 100px;
                outline: none;
                border: none;
                padding: 15px 30px;
                background-color: white;
                border-radius: 9999px;
                transition: 0.3s;
                margin: 20px;
                text-align : center;
                
            }
            p.text-center :hover {
                    
            }

        </style>
        
        </body>
</html>
