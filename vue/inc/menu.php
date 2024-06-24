<div id="menu">
    <h1>Catégories</h1><hr width="20%">
    <ul>
        <li> <a href="index.php">Tout</a>
        <?php foreach ($categories as  $categorie): ?>
            <li> <a href="index.php?categorie&id=<?= $categorie->id ?>"><?=  $categorie->libelle ?></a> </li>
        <?php endforeach; ?>
</div>