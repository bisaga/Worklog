<html>
<head>
  <?php $this->import('head.html.php') ?>
</head>
<body>
<?php $this->import('navigate.html.php') ?>

<div class='container'>
  <h2><?php echo $name ?></h2>
</div>

</body>
<script>
  // load requirejs config, common to all pages
  requirejs(['./script/common'], function (common) {
    // load script specific to the page
    requirejs(['app/notimplemented']);
  });
</script>
</html>

