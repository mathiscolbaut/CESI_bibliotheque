<h1 class="text-blue-600 text-3xl text-center">Page 1</h1>
<br/>
<?php foreach($datas as $ligne) : ?>
    <br/>
    -------------------------
    <br/>
    Information 1 : <?= $ligne["titre"]; ?>
    <br/>
    Information 2 : <?= $ligne["contenu"]; ?>
    <br/>
    --------------------------
    <br/>
<?php endforeach; ?>