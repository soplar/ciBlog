<h2><?= $title; ?></h2>
<!-- voor validatie moet je in de libraries in config/autoload
'form_validation' aanzetten en daarna in controller de validation
regels instellen
-->
<?php echo validation_errors() ?>
<!-- in config autoload kun je de form helper aanzetten (form)
Dan kun je gebruik maken van php form
ipv normale form tag (dan maakt hij meteen juiste pad naar action etc)
-->
<?php echo form_open('posts/update'); ?>
<!-- maak hidden input voor id om mee tegen met update -->
  <input type="hidden" name="id" value="<?php echo $post['id']?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" 
      class="form-control" 
      name="title" 
      placeholder="Add title"
      value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add body"><?php echo $post['body'];?></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>