<html>
<head>
    <?php $this->import('head.html.php') ?>
    <link rel="stylesheet" type="text/css" href="bower_components/ag-grid/dist/styles/ag-grid.css">
    <link rel="stylesheet" type="text/css" href="css/theme-bootstrap-stripped.css">
</head>
<body>
<?php $this->import('navigate.html.php') ?>
<div class="toolbarline">
    <button id="clear" class="btn btn-default">Clear grid</button>
    <button id="refresh" class="btn btn-default">Refresh grid</button>
</div>

<div class="container">
    <div class="row">
        <h4><b>Persons</b></h4>
        <div id="content" style="padding: 10px">
            <div id="myGrid" class="ag-bootstrap-striped" style="width:100%; height:500px;"></div>
        </div>
    </div>
</div>

<?php $this->import('script.html.php') ?>

<!-- ag-grid -->
<script type="text/javascript" src="bower_components/ag-grid/dist/ag-grid.js"></script>
<script type="text/javascript" src="js/view/person.js"></script>
</body>
</html>




