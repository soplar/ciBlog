<h2><?= $title; ?></h2>
<!-- voor validatie moet je in de libraries in config/autoload
'form_validation' aanzetten en daarna in controller de validation
regels instellen
-->
<?php echo validation_errors() ?>
<!-- in config autoload kun je de form helper aanzetten (form)
Dan kun je gebruik maken van php form
ipv normale form tag (dan maakt hij meteen juiste pad naar action etc)
multipart is om een bestand te kunnen uploaden (image)
-->
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <!-- let op textarea moet open en close op dezelfde regel
    anders laat hij geen placeholder zien -->
    <textarea class="form-control" name="body" placeholder="Add body"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Upload image</label>
    <!-- userfile moet als naam gebruikt worden -->
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>