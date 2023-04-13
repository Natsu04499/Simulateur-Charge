<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulator charge</title>
</head>
<body>
    <div>
        <h1>Simulateur de charge pour auto-entreprise</h1>
    </div>
    <form action="resultat.php" method="POST">
    <div>
        <label for="CAmarchandise"> CA Marchandise :</label>
        <input id="CAmarchandise" name="CAmarchandise" type="text">
    </div>
    <div>
        <label for="CAprestationprof"> CA prestation de services et professions libéral</label>
        <input id="CAprestationprof" name="CAprestationprof" type="text">
    </div>
    <div>
        <label for="CAprestationcommercial"> CA prestation de service commercial et artisanal</label>
        <input id="CAprestationcommercial" name="CAprestationcommercial" type="text">
    </div>
    <div>
        <label for="ACCRE"> Bénéficiez vous de l'ACCRE</label>
        <input id="ACCRE" name="ACCRE" type="radio" value="Oui">Oui
        <input  id="ACCRE" name="ACCRE" type="radio" value="Non">Non
    </div>
    <div>
        <input type="submit" value="Envoyer">
    </div>
    </form>
</body>
</html>