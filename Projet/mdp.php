<?php
session_start();

// ── Doit être connecté ──
if (!isset($_SESSION['utilisateur'])) {
    header('Location: login.php');
    exit;
}
require('connexion.php');
$user = $_SESSION['utilisateur'];

$erreur  = '';
$success = '';

// ── Traitement du formulaire ──
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $actuel  = $_POST['mot_de_passe_actuel']   ?? '';
    $nouveau = $_POST['mot_de_passe_nouveau']   ?? '';
    $confirm = $_POST['mot_de_passe_confirm']   ?? '';

    if (empty($actuel) || empty($nouveau) || empty($confirm)) {
        $erreur = 'Veuillez remplir tous les champs.';
    } elseif (strlen($nouveau) < 6) {
        $erreur = 'Le nouveau mot de passe doit contenir au moins 6 caractères.';
    } elseif ($nouveau !== $confirm) {
        $erreur = 'Les nouveaux mots de passe ne correspondent pas.';
    } elseif ($actuel === $nouveau) {
        $erreur = 'Le nouveau mot de passe doit être différent de l\'ancien.';
    } else {
        // Récupérer le hash actuel en BDD
        $stmt = $pdo->prepare('SELECT mot_de_passe FROM utilisateur WHERE id_utilisateur = ?');
        $stmt->execute([$user['id']]);
        $row = $stmt->fetch();

        if (!$row || !password_verify($actuel, $row['mot_de_passe'])) {
            $erreur = 'Le mot de passe actuel est incorrect.';
        } else {
            // Hash + mise à jour
            $hash = password_hash($nouveau, PASSWORD_DEFAULT);
            $pdo->prepare('UPDATE utilisateur SET mot_de_passe = ? WHERE id_utilisateur = ?')
                ->execute([$hash, $user['id']]);
            $success = 'Mot de passe modifié avec succès !';
        }
    }
}

$logoB64 = '/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAFpAWkDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD5Sooor0jkCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAoo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';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERENITY – Changer le mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class="page-login">
<div style="width:100%;max-width:440px;">

    <div class="login-card">

        <!-- Header -->
        <div class="login-header">
            <div class="logo-wrap">
                <img src="data:image/jpeg;base64,<?= $logoB64 ?>" alt="SERENITY">
            </div>
            <h1>SERENITY</h1>
            <p>Modifier mon mot de passe</p>
        </div>

        <!-- Body -->
        <div class="login-body">

            <!-- Info utilisateur -->
            <div style="background:var(--blue-pale);border:1px solid var(--border);border-radius:10px;padding:12px 16px;margin-bottom:20px;display:flex;align-items:center;gap:10px;">
                <i class="bi bi-person-circle" style="color:var(--blue);font-size:1.2rem;"></i>
                <div>
                    <div style="font-size:.78rem;color:#64748B;">Connecté en tant que</div>
                    <div style="font-size:.9rem;color:#E2E8F0;font-weight:600;">
                        <?= htmlspecialchars($user['prenom'].' '.$user['nom']) ?>
                    </div>
                </div>
            </div>

            <?php if ($erreur): ?>
                <div class="alert-dark-danger mb-4 d-flex align-items-center gap-2">
                    <i class="bi bi-exclamation-circle flex-shrink-0"></i>
                    <?= htmlspecialchars($erreur) ?>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert-dark-success mb-4 d-flex align-items-center gap-2">
                    <i class="bi bi-check-circle flex-shrink-0"></i>
                    <?= htmlspecialchars($success) ?>
                </div>
            <?php endif; ?>

            <form method="POST" novalidate>

                <!-- Mot de passe actuel -->
                <div class="mb-3">
                    <label class="form-label">Mot de passe actuel <span style="color:#F87171">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" id="pwd0" name="mot_de_passe_actuel"
                               class="form-control" placeholder="••••••••" required>
                        <button type="button" class="toggle-pwd" onclick="togglePwd('pwd0','eye0')">
                            <i class="bi bi-eye" id="eye0"></i>
                        </button>
                    </div>
                </div>

                <div class="divider"><span>nouveau</span></div>

                <!-- Nouveau mot de passe -->
                <div class="mb-3">
                    <label class="form-label">Nouveau mot de passe <span style="color:#F87171">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="pwd1" name="mot_de_passe_nouveau"
                               class="form-control" placeholder="Min. 6 caractères"
                               oninput="checkStrength(this.value)" required>
                        <button type="button" class="toggle-pwd" onclick="togglePwd('pwd1','eye1')">
                            <i class="bi bi-eye" id="eye1"></i>
                        </button>
                    </div>
                    <!-- Barre de force -->
                    <div style="margin-top:8px;">
                        <div style="height:4px;border-radius:4px;background:var(--border);overflow:hidden;">
                            <div id="strengthBar" style="height:100%;width:0%;border-radius:4px;transition:width .3s,background .3s;"></div>
                        </div>
                        <div id="strengthText" style="font-size:.75rem;color:#64748B;margin-top:4px;"></div>
                    </div>
                </div>

                <!-- Confirmer nouveau mot de passe -->
                <div class="mb-4">
                    <label class="form-label">Confirmer le nouveau mot de passe <span style="color:#F87171">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="pwd2" name="mot_de_passe_confirm"
                               class="form-control" placeholder="Répétez le nouveau mot de passe"
                               oninput="checkMatch()" required>
                        <button type="button" class="toggle-pwd" onclick="togglePwd('pwd2','eye2')">
                            <i class="bi bi-eye" id="eye2"></i>
                        </button>
                    </div>
                    <div id="matchMsg" style="font-size:.75rem;margin-top:4px;"></div>
                </div>

                <button type="submit" class="btn-serenity">
                    <i class="bi bi-shield-check me-2"></i>Enregistrer le nouveau mot de passe
                </button>
            </form>

        </div>

        <div class="card-footer-link">
            <a href="index.php"><i class="bi bi-arrow-left me-1"></i>Retour à l'accueil</a>
        </div>
    </div>

    <div class="security-badge">
        <i class="bi bi-shield-check" style="color:var(--blue)"></i>
        Connexion sécurisée — Données protégées
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function togglePwd(inputId, iconId) {
        const i = document.getElementById(inputId);
        const e = document.getElementById(iconId);
        i.type = i.type === 'password' ? 'text' : 'password';
        e.className = i.type === 'password' ? 'bi bi-eye' : 'bi bi-eye-slash';
    }

    function checkStrength(val) {
        const bar  = document.getElementById('strengthBar');
        const text = document.getElementById('strengthText');
        let score  = 0;
        if (val.length >= 6)  score++;
        if (val.length >= 10) score++;
        if (/[A-Z]/.test(val)) score++;
        if (/[0-9]/.test(val)) score++;
        if (/[^A-Za-z0-9]/.test(val)) score++;

        const levels = [
            { w: '0%',   bg: 'transparent', label: '' },
            { w: '25%',  bg: '#EF4444',     label: '🔴 Très faible' },
            { w: '50%',  bg: '#F97316',     label: '🟠 Faible' },
            { w: '75%',  bg: '#EAB308',     label: '🟡 Moyen' },
            { w: '90%',  bg: '#22C55E',     label: '🟢 Fort' },
            { w: '100%', bg: '#0087FF',     label: '🔵 Très fort' },
        ];
        bar.style.width      = levels[score].w;
        bar.style.background = levels[score].bg;
        text.textContent     = levels[score].label;
        checkMatch();
    }

    function checkMatch() {
        const v1  = document.getElementById('pwd1').value;
        const v2  = document.getElementById('pwd2').value;
        const msg = document.getElementById('matchMsg');
        if (!v2) { msg.textContent = ''; return; }
        if (v1 === v2) {
            msg.style.color = '#22C55E';
            msg.textContent = '✓ Les mots de passe correspondent';
        } else {
            msg.style.color = '#EF4444';
            msg.textContent = '✗ Les mots de passe ne correspondent pas';
        }
    }
</script>
</body>
</html>