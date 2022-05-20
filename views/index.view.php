<div class="search-container flex ">
    <form class="flex bg-light search-form" action="" method="GET" >
        <input class="search-bar bg-light" type="text" name="search" id="search">
        <input type="hidden" value="Search" >
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.7em" height="1.7em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="#f68888" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0z"/></svg>
    </form>
</div>
<div>
    <?php if (isset($_GET['search'])): ?>
        <br>
        <h3>Search list:</h3>
        <table  class="table">
        <?php $found_items = Data::search_results($_GET['search']);?>
        <?php foreach ($found_items as $objekt): ?>
            <tr>
               <td><?=$objekt->term?></td>
               <td><?=$objekt->definition?></td>
            </tr>
        <?php endforeach;?>
        </table>
    <?php endif;?>
</div>
<div>
    <br>
    <table  class="table">
    <?php foreach ($model as $objekt): ?>
        <tr>
            <td><?=$objekt->term?></td>
            <td><?=$objekt->definition?></td>
        </tr>
    <?php endforeach;?>
    </table>
</div>
