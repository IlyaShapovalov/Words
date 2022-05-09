<div>
    <br>
    <form style=" font-family: Arial, Helvetica, sans-serif; padding-left:4rem;" action="" method="GET" >
    <input type="text" name="search" id="search">
    <input type="submit" value="Search" >
    </form>
    <br>
</div>
<div style=" font-family: Arial, Helvetica, sans-serif; padding-left:4rem;">
    <?php if (isset($_GET['search'])): ?>
        <br>
        <h3>Search list:</h3>

        <table  class="table">
        <?php $found_items = search_results($_GET['search']);?>
        <?php foreach ($found_items as $objekt): ?>
            <tr>
               <td> <a href="/detail.php?term=<?=$objekt->term?>"> <?=$objekt->term?></a> </td>
               <td><?=$objekt->definition?></td>
            </tr>
        <?php endforeach;?>
        </table>
    <?php endif;?>
</div>

<div style=" font-family: Arial, Helvetica, sans-serif; padding-left:4rem;">
    <a href="./create.php">Add new term</a>
    <br> <br>
   
    <table  class="table">
    <?php foreach ($model as $objekt): ?>
        <tr>
            <td><a href="./edit.php?key=<?=$objekt->term?>">edit</a></td>
            <td> <a href= "<?= '/detail.php?term=' . $objekt->term ?>"> <?=$objekt->term?></a> </td>
            <td><?=$objekt->definition?></td>
            <td><a href="./delete.php?delete=<?=$objekt->term?>">delete</a></td>
        </tr>
    <?php endforeach;?>
    </table>
</div>
