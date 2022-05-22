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
        <?php endforeach ?>
        </table>
    <?php endif;?>
</div>
<div >
    <a href="./create.php">Add new term</a>
    <br> <br>
    <table  class="table">
    <?php foreach ($model as $objekt): ?>
        <tr>
            <td><a href="./edit.php?key=<?=$objekt->term?>">edit</a></td>
            <td><?=$objekt->term?></td>
            <td><?=$objekt->definition?></td>
            <td><a href="./delete.php?delete=<?=$objekt->term?>">delete</a></td>
        </tr>
    <?php endforeach ?>
    </table>
</div>
