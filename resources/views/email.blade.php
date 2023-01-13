<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Email</title>
</head>
<body>
<h1 style="border-color: #849460; border-style:solid;
border-width: 2px; border-radius: 10px;">Merci {{ $mailData['Prenom'] }} d'avoir passée commande chez nous !</h1>
<p>Nom: {{ $mailData['Nom'] }}</p>
<p>Prenom: {{ $mailData['Prenom'] }}</p>
<p>Commande passée à : {{ $mailData['HeureRetrait'] }}</p>
<p>Code de retrait: {{ $mailData['Code'] }}</p>
<h1>Détails de la commande</h1>
@foreach($mailData['Produit']->composer as $contenuCommande)
    <p>Produit: {{ $contenuCommande->produit['NOM_PRODUIT'] }}</p>
@endforeach
</body>
</html>



