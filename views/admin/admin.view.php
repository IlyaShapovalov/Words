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
            <?php endforeach;?>
        </div>
    <?php endif;?>
</div>
<div class="flow">
    <a class="fc-main ff-fancy fs-600 add-term add-an" href="./create.php">+ Add new word</a>
    <?php foreach ($model as $objekt): ?>
        <div  class="card bg-light cards-admin-an">
            <h2 class="card-term fc-main fs-600 ff-fancy "><?=$objekt->term?></h2>
            <p class="card-definition fs-500 letter-spacing-3"><?=$objekt->definition?></p>
            <div class="flex link-wraper links-an">
                <a class="fc-main ff-fancy fs-600 def-link" href="./edit.php?key=<?=$objekt->term?>">edit</a>
                <a class="fc-main ff-fancy fs-600 def-link" href="./delete.php?delete=<?=$objekt->term?>">delete</a>
            </div>
        </div>
    <?php endforeach;?>
</div>
