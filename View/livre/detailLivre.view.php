<?php


?>
<section class="py-4 py-xl-5">
    <div class="container">
        <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="text-white p-4 p-md-5">
                        <h2 class="fw-bold text-white mb-3">   <?php echo $livreById['titre'] ?></h2>
                        <p class="mb-4">   <?php echo $livreById['description'] ?></p>

                        <p>   <?php echo $livreById['Auteur'] ?></p>
                        <p>   <?php echo $livreById['ISBN'] ?></p>
                        <p>   <?php echo $livreById['poids'] . " g" ?></p>
                        <p>   <?php echo $livreById['taille'] ?></p>
                        <p>   Piste audio: <?php echo ($livreById['pisteAudio'] == 1 ? "oui" : "non"); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 order-first order-md-last" style="min-height: 250px; max-height: 10%; max-width: 30%"><img class="w-100 h-100 fit-cover" src="<?php echo $livreById['image'] ?>" /></div>
            </div>
        </div>
    </div>
</section>