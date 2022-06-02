<div>
    <?php if (isset($_GET['search'])): ?>
        <?php $found_items = Data::search_results($_GET['search']);?>
        <?php if ($found_items): ?>
            <div class="flow crud-form-an">
                <h2 class="ff-fancy fs-600 fc-main crud-title">Search list:</h2>
                <?php foreach ($found_items as $objekt): ?>
                    <div  class="card bg-light">
                        <h2 class="card-term fc-main fs-600 ff-fancy "><?=e($objekt->term)?></h2>
                        <p class="card-definition fs-500 letter-spacing-3"><?=e($objekt->definition)?></p>
                        <?php if (current_page() == 'admin'): ?>
                            <div class="flex link-wraper links-an">
                                <a class="fc-main ff-fancy fs-600 def-link" href="./edit.php?key=<?=e($objekt->term)?>">edit</a>
                                <a class="fc-main ff-fancy fs-600 def-link" href="./delete.php?delete=<?=e($objekt->term)?>">delete</a>
                            </div>
                        <?php endif ?>
                    </div>  
                <?php endforeach ?>
                <form class="crud-form" action="<?= current_page() == 'index' ? '/index.php' : '/admin/admin.php' ?>" method="POST">
                    <input class="crud-form-submit fs-600" type="submit" name="back" value="BACK">
                </form>
            </div>
        <?php else: ?>
            <h2 class="ff-fancy fs-600 fc-main crud-message">Sorry, can't find <span><?= $_GET['search']; ?></span> in this data source.</h2>
            <form class="crud-form" action="<?= current_page() == 'index' ? '/index.php' : '/admin/admin.php' ?>" method="POST">
                 <input class="crud-form-submit fs-600" type="submit" name="back" value="BACK">
            </form>
        <?php endif ?>
        <?php die() ?>
    <?php endif ?>
</div>