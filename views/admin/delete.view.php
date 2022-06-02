<div class="flex crud-wraper">
    <h2 class="ff-fancy fs-700 fc-main crud-message">Do you really think <span><?= e($_GET['delete']) ?></span> is not graceful enough?</h2>
    <form  class="submit-group" method="post">
        <input type="hidden" value="<?= e($_GET['delete']) ?>" name="deleted-term" />    
        <input class="submit-button fs-600" type="submit" name="cancel" value="CANCEL">
        <input class="submit-button fs-600" type="submit" name="delete" value="DELETE" >
    </form>
</div>