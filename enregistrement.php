<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["nom"]) &&isset($_POST["prenom"])  &&isset($_POST["date_naissance"]) &&isset($_POST["sexe"]) &&isset($_POST["nationalite"]) &&isset($_POST["adresse"]) &&isset($_POST["ville"]) &&isset($_POST["code_postal"]) &&isset($_POST["pays"]) &&isset($_POST["email"]) &&isset($_POST["telephone"]) &&isset($_POST["niveau_etude"]) &&isset($_POST["diplome_recent"]) &&isset($_POST["etablissement_precedent"]) &&isset($_POST["annee_obtention_diplome"]) &&isset($_POST["programme_choisi"]) &&isset($_POST["raison_choix"]) &&isset($_POST["cv"]) &&isset($_POST["lettre_motivation"]) &&isset($_POST["releves_notes"]) &&isset($_POST["consentement"])) {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $date_naissance=$_POST["date_naissance"];
        $sexe=$_POST["sexe"];
        $nationalite=$_POST["nationalite"];
        $adresse=$_POST["adresse"];
        $ville=$_POST["ville"];
        $code_postal=$_POST["code_postal"];
        $pays=$_POST["pays"];
        $email=$_POST["email"];
        $niveau_etude=$_POST["niveau_etude"];
        $diplome_recent = $_POST["diplome_recent"];
        $etablissement_precedent=$_POST["etablissement_precedent"];
        $annee_obtention_diplome=$_POST["annee_obtention_diplome"];
        $programme_choisi=$_POST["programme_choisi"];
        $raison_choix=$_POST["raison_choix"];
        $cv=$_POST["cv"];
        $lettre_motivation=$_POST["lettre_motivation"];
        $releves_notes=$_POST["releves_notes"];
        $consentement=$_POST["consentement"];
        $telephone=$_POST["telephone"];
        



       
        $host="localhost";
        $user="root";
        $pwd="";
        $db="universite";
        $con=mysqli_connect($host,$user,$pwd,$db);
        if (!$con) {
            die("Error connexion ...".mysqli_connect_error());
        }
        $req="INSERT INTO inscription(nom,prenom,date_naissance,sexe,nationalite,adresse,ville,code_postal,pays,email,niveau_etude,diplome_recent,etablissement_precedent,annee_obtention_diplome,programme_choisi,raison_choix,cv,lettre_motivation,releves_notes,consentement,telephone) VALUES('$nom','$prenom','$date_naissance','$sexe','$nationalite','$adresse','$ville','$code_postal','$pays','$email','$niveau_etude','$diplome_recent','$etablissement_precedent','$annee_obtention_diplome','$programme_choisi','$raison_choix','$cv','$lettre_motivation','$releves_notes','$consentement','$telephone')";
        if (mysqli_query($con,$req)) {
            echo"<h2>votre message a été envoyer avec succès</h2>";
        }
    }
?>

</body>
</html>









