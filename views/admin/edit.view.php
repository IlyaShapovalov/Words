<div class="flex crud-wraper">  
    <h2 class="ff-fancy fs-600 fc-main crud-title">Edit term:</h2>
    <form class="crud-form crud-form-an" action="" method="post">
        <input type="hidden" value="<?= $_GET['key'] ?>" name="original-term" />
        <input type="text" class="crud-form-input crud-form-term bg-light fs-500 letter-spacing-3" autocomplete="off" name="edited-term" id="edited-term" value="<?= $view_bag['term']; ?>"/>
        <textarea class="crud-form-input crud-form-def bg-light fs-500 letter-spacing-3" name="edited-description" id="edited-description" cols="20" rows="5"><?= $view_bag['def']; ?></textarea>
        <div class="submit-group">
           <input class="submit-button fs-600" type="submit" name="cancel" value="CANCEL">
            <input class="submit-button fs-600" type="submit" name="edit" value="EDIT" >
        </div>
    </form>
</div>