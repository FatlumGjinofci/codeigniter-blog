<h3><?= $title ?></h3>

<?php echo validation_errors() ?>

<?php echo form_open_multipart('categories/create'); ?>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" placeholder="Enter name">
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
</form> 
