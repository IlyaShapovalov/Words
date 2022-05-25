<div>
    <?php if (isset($_GET['search'])): ?>
        <?php $found_items = Data::search_results($_GET['search']);?>
        <?php if ($found_items): ?>
            <div class="flow crud-form-an">
                <h2 class="ff-fancy fs-600 fc-main crud-title">Search list:</h2>
                <?php foreach ($found_items as $objekt): ?>
                    <div  class="card bg-light">
                        <h2 class="card-term fc-main fs-600 ff-fancy "><?=$objekt->term?></h2>
                        <p class="card-definition fs-500 letter-spacing-3"><?=$objekt->definition?></p>
                    </div>  
                <?php endforeach ?>
                <form class="crud-form" action="/index.php" method="POST">
                    <input class="crud-form-submit fs-600" type="submit" name="back" value="BACK">
                </form>
            </div>
        <?php else: ?>
            <h2 class="ff-fancy fs-600 fc-main crud-message">Sorry, can't find <span><?= $_GET['search']; ?></span> in this data source.</h2>
            <form class="crud-form" action="/index.php" method="POST">
                 <input class="crud-form-submit fs-600" type="submit" name="back" value="BACK">
            </form>
        <?php endif ?>
        <?php exit ?>
    <?php endif ?>
</div>
<div class="flow cards-home-an">
    <?php foreach ($model as $objekt): ?>
        <div  class="card bg-light">
            <h2 class="card-term fc-main fs-600 ff-fancy "><?=$objekt->term?></h2>
            <p class="card-definition fs-500 letter-spacing-3"><?=$objekt->definition?></p>
        </div>
    <?php endforeach ?>
</div>
