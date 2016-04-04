<html>
<head>
    <?php $this->import('head.html.php') ?>
</head>    
<body>

<?php $this->import('navigate.html.php') ?>

<div class="toolbarline">
    <button id="addNew" class="btn btn-default">Add new</button>
</div>

<div class="container">
        <label>Workday</label>
        <input id="selectedDate">
        <label>Arrive</label>
        <input id="startTime">
        <label>Leave</label>
        <input id="endTime">
</div>
<div id="gridDay" style="width:100%; height:250px"></div>

<?php $this->import('script.html.php') ?>
<script type="text/javascript" src="js/view/workday.js"></script>
</body>
</html>

