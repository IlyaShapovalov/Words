<div>
    <?php if (isset($_GET['search'])): ?>
        <h2>Search list:</h2>
        <div class="flow">
            <?php $found_items = Data::search_results($_GET['search']);?>
            <?php foreach ($found_items as $objekt): ?>
                <div  class="card bg-light">
                    <h2 class="card-term fc-main fs-600 ff-fancy "><?=$objekt->term?></h2>
                    <p class="card-definition fs-500 letter-spacing-3"><?=$objekt->definition?></p>
                </div>  
            <?php endforeach ?>
        </div>
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
