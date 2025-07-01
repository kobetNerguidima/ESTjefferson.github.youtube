<!DOCTYPE html>
<html lang="fr"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez l'Université ESTM JeffersonNerguidima</title>
</head>
<body>
    <?php
    if (isset($_POST["name"]) && isset($_POST["email"])  && isset($_POST["subject"]) && isset($_POST["message"])) {
        $name =($_POST["name"]); 
        $email =($_POST["email"]);
        $subject =($_POST["subject"]);
        $message =($_POST["message"]);

        $host = "localhost";
        $user = "root";
        $pwd = ""; 
        $db = "universite";
        $con = mysqli_connect($host, $user, $pwd, $db);
        if (!$con) {
    
            die("Erreur de connexion à la base de données : " . mysqli_connect_error());
        }
        
        $stmt = mysqli_prepare($con, "INSERT INTO remarque(name, email,subject, message) VALUES('$name','$email', '$subject','$message')");
        
        if ($stmt) {
            mysqli_stmt_bind_param($name, $email, $subject, $message);
    
            if (mysqli_stmt_execute($stmt)) {
                echo "<h2>Votre message a été envoyé avec succès !</h2>";
            } else {
                echo "<h2>Erreur lors de l'envoi du message :</h2>";
                echo "<p>" . mysqli_stmt_error($stmt) . "</p>"; 
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "<h2>Erreur interne : Impossible de préparer la requête.</h2>";
            echo "<p>" . mysqli_error($con) . "</p>"; 
        }
        
        mysqli_close($con);
        } else {
        echo "<h2>Erreur : Tous les champs du formulaire n'ont pas été remplis.</h2>";
        echo "<p>Veuillez revenir en arrière et compléter toutes les informations requises.</p>"
        
    }
    ?>
</body>
</html>