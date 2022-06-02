<?php require  APP_ROOT . "/views/search.view.php"?>

<div class="flow cards-home-an">
    <?php foreach ($model as $objekt): ?>
        <div  class="card bg-light">
            <h2 class="card-term fc-main fs-600 ff-fancy "><?=e($objekt->term)?></h2>
            <p class="card-definition fs-500 letter-spacing-3"><?=e($objekt->definition)?></p>
        </div>
    <?php endforeach ?>
</div>
