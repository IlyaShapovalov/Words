<div class="flex crud-wraper">
    <h2 class="ff-fancy fs-700 fc-main crud-message">Do you really think <span><?= $_GET['delete'] ?></span> is not graceful enough?</h2>
    <form  class="delete-submit" method="post">
        <input type="hidden" value="<?= $_GET['delete'] ?>" name="deleted-term" />    
        <input class="delete-submit-button fs-600" type="submit" name="cancel" value="CANCEL">
        <input class="delete-submit-button fs-600" type="submit" name="delete" value="DELETE" >
    </form>
</div>