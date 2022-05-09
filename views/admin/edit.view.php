<div>  
    <h4>Edit term</h4>
    <form action="" method="post">
        <input type="hidden" value="<?= $_GET['key'] ?>" name="original-term" />
        <div class="form-group">
            <label for="term" id="term">Edit term:</label>
            <input type="text" class="form-control" name="edited-term" id="edited-term" value="<?= $view_bag['term']; ?>" cols="20" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="edited-description" id="edited-description">Edit description:</label>
            <textarea class="form-control" name="edited-description" id="edited-description" cols="20" rows="5"><?= $view_bag['def']; ?></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="edit" value="Edit" >
        </div>
    </form>
</div>