<div>
    <br>
    <form  action="" method="GET" >
    <input type="text" name="search" id="search">
    <input type="submit" value="Search" >
    </form>
    <br>
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
