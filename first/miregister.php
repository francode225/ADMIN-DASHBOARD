<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miregister</title>
</head>
<body>
    <header id="tout">
        <!-- premier bloc du menu -->
        
            <section id= "bloc1">
                    <div class="menu">
                        <ul>
                            <li class="btn">
                                <a href="#">Acceuil </a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu">
                        <ul>
                            <li class="btn">
                                <a href="#">Services</a>
                            </li>
                        </ul>
                    </div>
               
            </section>

            <!-- deuxieme bloc du menu -->
            
        
            <section id= "bloc2">
                <div class="menud">
                    <ul>
                        <li class="btn">
                            <a href="#">A propos </a>
                        </li>
                    </ul>
                </div>

                <div class="menud">
                    <ul>
                        <li class="btn">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
           
            </section>

    </header>

    <section id="cta">
        <div class="btn1">
            <button> <a href="index.php">Se connecter</a>  </button>
        </div>
        <div class="vide"></div>
        <div class="btn2">
            <button>  <a href="inscription.php">S'inscrire </a> </button>
        </div>
    </section>
    <style>
        body{
    display: flex;
    flex-direction: column;
    margin: 0%;
    background: url(image/fond.png) no-repeat ;
    
}
/* le header  */
header#tout{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
    width: 1360px;
    height:640px;
    
    background-position: fixed;
    background-size: cover;
}
/* premier bloc du menu 1 */
section#bloc1{
    display: flex;
    flex-direction: row;
    margin-left: 58%;
}
.menu{
    flex-direction: row;
}
.menu ul li{
    list-style: none;
}
.menu ul li a{
    text-decoration: none;
    color: blue;
    font-size: 20px;
    font-family:Impact, 'Arial Narrow Bold', sans-serif;
    font-weight: 900;
}

/* deuxieme bloc du menu 2 */
section#bloc2{
    display: flex;
    flex-direction: row;
    margin-right: 140px;

}
.menud{
    flex-direction: row;
}
.menud ul li{
    list-style: none;
}
.menud ul li a{
    text-decoration: none;
    color: white;
    font-size: 20px;
    font-family:Impact, 'Arial Narrow Bold', sans-serif;
    font-weight: 500;
}

/* les boutons */

section#cta{
    display: flex;
    flex-direction: row;
    margin-left: 300px;
    padding: 20px;

}

.btn1 button {
                width: 180px;     
                outline: 5px white;
                border: 5px white;
                padding: 15px 30px;
                background-color: blue;
                border-radius: 10px;
                transition: 0.3s;
                margin: 20px;
                font-size: 17px;
                color: white;  

}
.btn1 button a{
    text-decoration: none;
    font-family:"Raleway", "Open sans", "Trebuchet ms", sans-serif;
                color:white;
                font-size: 17px;
}
.btn2 button {
                width: 180px;     
                outline: none;
                border: none;
                padding: 15px 30px;
                background-color: white;
                border-radius: 10px;
                transition: 0.3s;
                margin: 20px;
                font-size: 17px;
                color: blue; 

}
.btn2 button a{
    text-decoration: none;
    font-family:"Raleway", "Open sans", "Trebuchet ms", sans-serif;
                color:blue;
                font-size: 17px;
}
.vide{
    
}



    </style>
</body>
</html>