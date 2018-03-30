<h1><?php echo $post['title']; ?></h1>
 <small class="post-date">Posted on: <?php echo $post['created_at']; ?> </small> <br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>


<hr>
  <div class="row float-right">
    <a class="btn btn-info" href="<?php echo base_url();?>/posts/edit/<?php echo $post['slug']; ?>">Edit</a>
    <?php echo form_open ('/posts/delete/'.$post['id']); ?>
    <input type="submit" id="deleteButton" value="Delete" class="btn btn-danger">
    </form>
   </div>
<br><br>
<hr>
<h3>Comments</h3>
<?php if($comments): ?>
    <?php foreach($comments as $comment) : ?>
       <div class="alert alert-secondary">
            <div class="col-md-3">
            <img class="userimg" src="<?php echo base_url(); ?>/assets/images/usertile.svg">
            </div>
            <div class="col-md-9">
            <h5><strong><?php echo $comment['name']; ?>: </strong><?php echo $comment['body']; ?></h5>
            </div>
        </div>
    <?php endforeach ?>
<?php else : ?>
    <div class="alert alert-primary">
        <p>No comments yet. Be the first to comment!</p>
    </div>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
    <?php echo validation_errors(); ?>
    <?php echo form_open('comments/create/'.$post['id']); ?>
        <div class="form-group">
            <label>Name </label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Email </label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Body </label>
            <textarea name="body" class="form-control"></textarea>
            <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>"><br>
            <button class="btn btn-primary float-right" type="submit">Submit</button>
        </div>
    </form>