<h1><?php echo $post['title']; ?></h1>
 <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small> <br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>


<hr>
  <div class="row">
    <a class="btn btn-info" href="<?php echo base_url();?>/posts/edit/<?php echo $post['slug']; ?>">Edit</a>
    <?php echo form_open ('/posts/delete/'.$post['id']); ?>
    <input type="submit" id="deleteButton" value="Delete" class="btn btn-danger">
    </form>
   </div>