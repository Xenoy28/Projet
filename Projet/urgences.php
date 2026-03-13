<?php

$urgences = [
    ["titre"=>"Numéro d'Urgence Européen","numero"=>"112","icon"=>"☎","desc"=>"Pour toutes les urgences (police, pompiers, ambulance)"],
    ["titre"=>"SAMU (Urgence Médicale)","numero"=>"15","icon"=>"🚑","desc"=>"En cas de problème médical urgent"],
    ["titre"=>"Pompiers","numero"=>"18","icon"=>"🔥","desc"=>"Incendies, accidents, fuites de gaz"],
    ["titre"=>"Police / Gendarmerie","numero"=>"17","icon"=>"👮","desc"=>"Danger, agression ou vol"]
];

$soutien = [
    ["titre"=>"SOS Amitié","numero"=>"09 72 39 40 50","icon"=>"🎧","desc"=>"Service d'écoute anonyme et confidentiel 24h/24"],
    ["titre"=>"Fil Santé Jeunes","numero"=>"3224","icon"=>"💬","desc"=>"Écoute et conseils pour les jeunes"],
    ["titre"=>"Croix-Rouge Écoute","numero"=>"0 800 858 858","icon"=>"🤝","desc"=>"Ligne de soutien psychologique"]
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <title>Urgences | Serenity</title>

    <link rel="stylesheet" href="style.css">

    <style>

        .container{
            max-width:1100px;
            margin:auto;
            padding:60px 20px;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
            margin-top:30px;
        }

        .info-card{
            text-align:center;
            padding:30px 20px;
        }

        .info-icon{
            font-size:32px;
            margin-bottom:10px;
        }

        .info-num{
            font-size:36px;
            font-weight:900;
            color:var(--blue);
            margin:10px 0;
        }

        .info-desc{
            color:var(--text-muted);
            font-size:.9rem;
        }

    </style>

</head>

<body>

<div class="container">

    <h1 class="sec-title">Urgences et Numéros Importants</h1>
    <p class="sec-sub">En cas d'urgence ou de besoin d'aide immédiate, contactez les services appropriés.</p>

    <div class="grid">

        <?php foreach($urgences as $u){ ?>

            <div class="s-card info-card">

                <div class="info-icon"><?php echo $u['icon']; ?></div>

                <h3><?php echo $u['titre']; ?></h3>

                <div class="info-num"><?php echo $u['numero']; ?></div>

                <p class="info-desc"><?php echo $u['desc']; ?></p>

            </div>

        <?php } ?>

    </div>


    <div class="blue-line"></div>


    <h2 class="sec-title">Soutien Psychologique et Écoute</h2>

    <div class="grid">

        <?php foreach($soutien as $s){ ?>

            <div class="s-card info-card">

                <div class="info-icon"><?php echo $s['icon']; ?></div>

                <h3><?php echo $s['titre']; ?></h3>

                <div class="info-num"><?php echo $s['numero']; ?></div>

                <p class="info-desc"><?php echo $s['desc']; ?></p>

            </div>

        <?php } ?>

    </div>

    <div style="text-align:center; margin-top:40px;">
        <a href="index.php" class="btn-hero-outline">
            ← Retour à l'accueil
        </a>
    </div>

</div>

</body>
</html>