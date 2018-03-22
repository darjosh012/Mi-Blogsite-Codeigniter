<h1 style="margin-bottom: 0;"><?=$title?></h2>
<?php foreach($posts as $post) :?>
    <h3 style= "padding-top: 12px;"><?php echo $post['title']; ?></h3> 
    <small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small> <br>
    <?php echo word_limiter(strip_tags($post['body'], 50)) ?> <br></br>
    <p><a class="btn btn-primary btn-md" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read more</a></p>
    <?php endforeach; ?> 