<h2><?= $title ?></h2>
<p>Posts...</p>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class="post-thumb" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
        </div>
        <div class="col-md-9">
            <!-- maak een custom css en gebruik class post-date 
            maak assets folder in root -->
            <small class="post-date">posted on: <?php echo $post['p_created']; ?>
            in <strong><?php echo $post['c_name']; ?></strong></small>
            <!-- word_limiter is een functie van text (in config/autoload/helper) -->
            <?php echo word_limiter($post['body'], 50); ?><br><br>
            <p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a></p>
        </div>
    </div>
<?php endforeach; ?>