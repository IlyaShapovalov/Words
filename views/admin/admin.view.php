<?php require  APP_ROOT . "/views/search.view.php"?>

<div class="flow">
    <a class="fc-main ff-fancy fs-600 add-term add-an" href="./create.php">+ Add new word</a>
    <?php foreach ($model as $objekt): ?>
        <div  class="card bg-light cards-admin-an">
            <h2 class="card-term fc-main fs-600 ff-fancy "><?= e($objekt->term) ?></h2>
            <p class="card-definition fs-500 letter-spacing-3"><?= e($objekt->definition) ?></p>
            <div class="flex link-wraper links-an">
                <a class="fc-main ff-fancy fs-600 def-link" href="./edit.php?key=<?= e($objekt->term) ?>">edit</a>
                <a class="fc-main ff-fancy fs-600 def-link" href="./delete.php?delete=<?= e($objekt->term) ?>">delete</a>
            </div>
        </div>
    <?php endforeach;?>
</div>
