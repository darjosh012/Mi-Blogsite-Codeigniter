<h1><?=$title; ?></h1>

<div class="alert alert-dismissible alert-warning sr-only" id="formCard">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Wait!</h4>
  <p class="mb-0"></p>
</div>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create')?>
  <div class="form-group">
    <label for="Title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
  <label>Category</label>
      <select name="category_id" class="form-control">
          <?php foreach ($categories as $category): ?>
              <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php endforeach; ?>
      </select>
  </div>
  <div class="form-group">
    <label for="Body">Body</label>
      <textarea id="body-editor" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <label>Image Upload Cover</label>
   <div class="custom-file">
    <input type="file" accept=".jpg,.gif,.png" class="custom-file-input " name="userfile" id="validatedCustomFile">
    <small><b>Experimental:</b> rename filename to img. Use <strong>small</strong> resolution images only.</small>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
  <button type="submit" id="toSubmit" class="btn btn-primary float-right">Submit</button>
  
  
  
    