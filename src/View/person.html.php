<html>
<head>
  <?php $this->import('head.html.php') ?>
</head>
<body>
<?php $this->import('navigate.html.php') ?>
<div class='toolbarline'>
  <button id='refresh' class='btn btn-default'>Refresh grid</button>
</div>

<div class='container'>
  <div class='row'>
    <h4>
      <b>Persons</b>
    </h4>
    <div id='content' style='padding: 10px'>
      <div id='myGrid' class='ag-bootstrap-striped' style='width:100%; height:500px;'></div>
    </div>
  </div>
</div>
</body>
<script>
  // load requirejs config, common to all pages
  requirejs(['./script/common'], function (common) {
    // load script specific to the page
    requirejs(['app/person']);
  });
</script>
</html>




