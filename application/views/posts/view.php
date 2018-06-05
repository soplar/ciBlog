<h2><?php echo $post['title'] ?></h2>
<small class="post-date">posted on: <?php echo $post['created']; ?></small>
<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
<div class="post-body">
    <?php  echo $post['body'] ?>
</div>

<hr>
<!-- Zie voor meer info over form_open het bestand create in deze map
-->
<a class="btn btn-default pull-left" 
    href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'];?>">
    Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']);?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
