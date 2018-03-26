<h2><?=$title; ?></h2>


<?php echo validation_errors(); ?>


<?php echo form_open_multipart('categories/create'); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type ="text" class="form-control" name="name" placeholder="Category Name">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>