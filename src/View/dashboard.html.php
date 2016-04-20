<html>
<head>
  <?php $view->import('head.html.php') ?>
</head>
<body>
<?php $view->import('navigate.html.php') ?>

<div class='container'>
  <h1 id='title'><?php echo $title ?></h1>
</div>

</body>
<script>
  // load requirejs config, common to all pages
  requirejs(['./script/common'], function (common) {
    // load script specific to the page
    requirejs(['app/dashboard']);
  });
</script>
</html>
