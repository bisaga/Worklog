<html>
<head>
    <?php $this->import('head.html.php') ?>
    <link rel="stylesheet" type="text/css" href="bower_components/ag-grid/dist/styles/ag-grid.css">
    <link rel="stylesheet" type="text/css" href="css/theme-bootstrap-stripped.css">
</head>
<body>
<?php $this->import('navigate.html.php') ?>

<div class="container">
    <div class="row">
        <h4><b>Persons</b></h4>
        <div id="content" style="padding: 10px">
            <div id="myGrid" class="ag-bootstrap-striped" style="width:500px; height:250px;"></div>
        </div>
    </div>
</div>

<?php $this->import('script.html.php') ?>

<!-- ag-grid -->
<script type="text/javascript" src="bower_components/ag-grid/dist/ag-grid.js"></script>
<script type="text/javascript" src="js/view/person.js"></script>
</body>
</html>




