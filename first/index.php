<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="Yeo François" content="Mi_Register"/>
            <title>Connexion</title>
        </head>
        <body>
        
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
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
                height:350px;
                margin-bottom: 15px;
                background: white;
                box-shadow: 0px 2px 2px ;
                padding: 80px;
                
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