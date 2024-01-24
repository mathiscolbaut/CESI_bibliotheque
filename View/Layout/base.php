<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">
    <title><?= $page_title; ?></title>
    <link href="<?= URL ?>Public/css/mains.css" rel ="stylesheet" />
    <?php if(!empty($page_css)) : ?>
        <?php foreach($page_css as $fichier_css) : ?>
            <link href="<?= URL ?>Public/css/<?= $fichier_css ?>" rel=stylesheet" />
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (!empty($page_javascript)) : ?>
    <?php foreach ($page_javascript as $fichier_javascript) : ?>
        <script src="<?= URL ?>public/Assets/JS/<?= $fichier_javascript ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white py-6">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold"><?= $page_title; ?></h1>
        </div>
    </header>
    <main class="container mx-auto px-6 py-10">
        <!-- Contenu principal de la page -->
        <?php require_once ('View/Layout/header.php');?>
        <?php try {
            Toolbox::displayAlert();
        }
        catch (Exception $e){
            throw new \RuntimeException($e->getMessage());
        }
        ?>
        <?= $page_content; ?>
        <script src="Public/javascript/navbar.js"> </script>
    </main>
    <?php require_once ('View/Layout/footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.3.1/dist/cdn.min.js" defer></script>
</body>
</html>