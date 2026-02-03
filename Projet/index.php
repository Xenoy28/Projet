<?php
$currentPage = 'accueil';
include 'header.php';
?>

<section class="hero-strip fade-up">
    <h1>Bienvenue sur ta plateforme</h1>
    <p>Un espace bienveillant pour t'accompagner dans ton parcours étudiant. Quel que soit ce que tu traverses, tu trouveras ici du soutien, des ressources et une communauté.</p>
    <div class="hero-actions">
        <a href="communaute.php" class="btn btn-primary">💬 Parler à un bot</a>
        <a href="ressources.php" class="btn btn-outline">📚 Besoin d'aide !</a>
    </div>
</section>

<div style="display:grid; grid-template-columns:1fr 1fr; gap:24px; margin-bottom:36px; align-items:start;">

    <div class="card fade-up delay-1">
        <div class="card-body" style="text-align:center;">
            <h3 style="font-size:1rem; font-weight:600; margin-bottom:4px;">Comment te sens-tu aujourd'hui ?</h3>
            <p style="font-size:.82rem; color:#7a756f; margin-bottom:12px;">Choisis une émotion</p>
            <div class="mood-row">
                <div class="mood-btn" onclick="selectMood(this)">😢<span class="mood-label">Très mal</span></div>
                <div class="mood-btn" onclick="selectMood(this)">😟<span class="mood-label">Mal</span></div>
                <div class="mood-btn active" onclick="selectMood(this)">😐<span class="mood-label">Moyen</span></div>
                <div class="mood-btn" onclick="selectMood(this)">🙂<span class="mood-label">Bien</span></div>
                <div class="mood-btn" onclick="selectMood(this)">😄<span class="mood-label">Très bien</span></div>
            </div>
        </div>
    </div>

    <div class="card fade-up delay-2">
        <div class="card-body" style="padding:16px;">
            <div class="video-placeholder">
                <div class="video-play"></div>
                <span class="video-caption">Vidéo d'intro : Tu n'es pas seul(e)</span>
            </div>
        </div>
    </div>
</div>

<div class="section-header fade-up delay-2">
    <h2 class="section-title">Catégories par thématique</h2>
    <p class="section-subtitle">Explorez les domaines qui vous concernent</p>
</div>

<div class="cat-grid">
    <?php
    $categories = [
        ['icon'=>'🧠', 'title'=>'Santé mentale',     'desc'=>'Stress, anxiété, dépression',       'link'=>'ressources.php'],
        ['icon'=>'👁️', 'title'=>'Handicap invisible', 'desc'=>'Comprendre et vivre avec',         'link'=>'ressources.php'],
        ['icon'=>'💰', 'title'=>'Précarité',          'desc'=>'Aides financières & logement',     'link'=>'ressources.php'],
        ['icon'=>'🌙', 'title'=>'Isolement',          'desc'=>'Rompre la solitude',               'link'=>'ressources.php'],
        ['icon'=>'🎓', 'title'=>'Orientation',        'desc'=>'Parcours académique & pro',        'link'=>'ressources.php'],
        ['icon'=>'🏃', 'title'=>'Bien-être physique', 'desc'=>'Vie saine & équilibrée',           'link'=>'ressources.php'],
    ];
    foreach ($categories as $i => $c):
        ?>
        <a href="<?= $c['link'] ?>" class="cat-card fade-up delay-<?= min($i+1,6) ?>">
            <div class="cat-icon"><?= $c['icon'] ?></div>
            <h4><?= $c['title'] ?></h4>
            <p><?= $c['desc'] ?></p>
        </a>
    <?php endforeach; ?>
</div>

<!-- ===== TESTIMONIAL PREVIEW ===== -->
<div class="section-header fade-up" style="margin-top:48px;">
    <h2 class="section-title">Témoignages étudiants</h2>
    <p class="section-subtitle">Découvrez les expériences partagées par d'autres étudiants</p>
</div>

<div class="testimonial-grid">
    <?php
    $previews = [
        ['text'=>'Solitude au self – Je me sentais vraiment seul au début de ma première année…', 'tag'=>'Isolement',   'tagClass'=>'tag-blue',   'author'=>'Étudiant(e) en L1, Paris'],
        ['text'=>'Stress d\'examen – Les techniques de gestion du stress m\'ont vraiment aidé à traverser les partiels…', 'tag'=>'Stress', 'tagClass'=>'tag-red',    'author'=>'Étudiant(e) en L3, Bordeaux'],
        ['text'=>'Handicap invisible – Je ne savais pas où chercher de l\'aide. Cette plateforme m\'a orienté…', 'tag'=>'Handicap', 'tagClass'=>'tag-purple', 'author'=>'Étudiant(e) en L2, Nantes'],
    ];
    foreach ($previews as $i => $t):
        ?>
        <div class="testimonial-card fade-up delay-<?= min($i+1,6) ?>">
            <div class="quote-mark">&ldquo;</div>
            <span class="tag <?= $t['tagClass'] ?>"><?= $t['tag'] ?></span>
            <p><?= $t['text'] ?></p>
            <div class="testimonial-meta">
                <span class="author"><?= $t['author'] ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div style="text-align:center; margin-top:24px;">
    <a href="testimonials.php" class="btn btn-outline">Voir tous les témoignages →</a>
</div>

<?php include 'footer.php'; ?>
<script>
    function selectMood(el) {
        document.querySelectorAll('.mood-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }
</script>