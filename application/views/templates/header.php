<html>
  <head>
    <title>ciBlog</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- Een editor voor de body tekst van de post (zie posts/edit) -->
    <script src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script> 
    //<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    //]]>
    </script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <!-- vul de helper in config naar 'url' -->
          <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>about">About</a></li>
            <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">