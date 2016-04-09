<html>
<head>
    <?php $this->import('head.html.php') ?>
</head>    
<body>

<?php $this->import('navigate.html.php') ?>

<div class="toolbarline">
    <button id="addNew" class="btn btn-default">Add</button>
</div>

<div class="container">
    <row>
        <div class="col-xs-12 col-sm-2">Calendar</div>
        <div class="col-xs-12 col-sm-5" >Grid</div>
        <div class="col-xs-12 col-sm-5">Edit form
            <label>Workday</label>
            <input id="selectedDate">
            <label>Arrive</label>
            <input id="startTime">
            <label>Leave</label>
            <input id="endTime">
        </div>
    </row>
</div>
<div id="gridDay" style="width:100%; height:250px"></div>

<?php $this->import('script.html.php') ?>
<script type="text/javascript" src="js/view/workday.js"></script>
</body>
</html>

