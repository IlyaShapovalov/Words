<div class="flex crud-wraper">
    <h2 class="ff-fancy fs-700 fc-main crud-message">Do you really think <span><?= $_GET['delete'] ?></span> is not graceful enough?</h2>
    <form  class="crud-form " method="post">
        <input type="hidden" value="<?= $_GET['delete'] ?>" name="deleted-term" />    
        <input class="crud-form-submit fs-600" type="submit" name="delete" value="DELETE" >
    </form>
</div>