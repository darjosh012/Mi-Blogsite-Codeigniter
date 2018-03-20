<h1><?=$title; ?></h1>

<div class="alert alert-dismissible alert-warning sr-only" id="formCard">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Wait!</h4>
  <p class="mb-0"></p>
</div>

<?php echo validation_errors(); ?>
<?php echo form_open('posts/update')?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label for="Title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="Body">Body</label>
      <textarea id="body-editor"class="form-control" name= "body" placeholder="Add Body"><?php echo $post['body'];?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
    