<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title = "RentASnow - Snows";
?>
    <div class="span12" id="divMain">
<?php foreach ($snows as $snow) : ?>
    <?php $rows = 0; ?>
    <?php $rows++; ?>
    <?php if ($rows % 4) : // tests to have 4 items / line    ?>
    <div class="row-fluid">
    <ul class="thumbnails">
    <?php endif ?>
    <li class="span3">
        <div class="thumbnail">
            <a href="view/content/images/<?= $snow['code']; ?>.jpg" target="blank"><img src="<?= $snow['photo']; ?>" alt="<?= $snow['code']; ?>"></a>
            <div class="caption">
                <h3><a href="index.php?action=snow&code=<?= $snow['code']; ?>"><?= $snow['code']; ?></a></h3>
                <p><strong>Marque : </strong><?= $snow['brand']; ?></p>
                <p><strong>Modèle : </strong><?= $snow['model']; ?></p>
                <p><strong>Longueur : </strong><?= $snow['snowLength']; ?> cm</p>
                <p><strong>Prix :</strong> CHF <?= $snow['dailyPrice']; ?>.- / jour</p>
                <p><strong>Disponibilité : </strong><?= $snow['qtyAvailable']; ?></p>
                <?php if ($snow['active']) : ?>
                    <p><a href="index.php?action=snowLeasingRequest&code=<?= $snow['code']; ?>" class="btn btn-primary">Louer
                            ce snow</a></p>
                <?php else : ?>
                    <p><a class="btn btn-danger" disabled="disabled">Plus en location</a></p>
                <?php endif ?>
            </div>
        </div>
    </li>
<?php endforeach ?>


<?php
$content = ob_get_clean();
require "gabarit.php";