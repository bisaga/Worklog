<html>
<head>
    <?php $this->import('head.html.php') ?>
</head>    
<body>

<?php $this->import('navigate.html.php') ?>

<div class="container">
    <row>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <form role="form" class="form-horizontal">
                <div class="form-group">
                    <div id="selectedDate"></div>
                </div>
                <div class="form-group">
                    <label class="control-label">Arrive</label>
                    <div class="input-group clockpicker">
                        <input id="startTime" class="form-control">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="endTime" class="control-label">Leave</label>
                    <div class="input-group clockpicker">
                        <input id="endTime" class="form-control">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default  pull-right">Save</button>
                </div>
            </form>

        </div>
        <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5" style="background-color: #00b3ee">
            <div id="workdayGrid"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
            <row>
            <div class="toolbarline">
                <button id="addNew" class="btn btn-default">Add</button>
            </div>
            </row>
            <row>
            Edit form
            </row>
        </div>
    </row>
</div>
<div id="gridDay" style="width:100%; height:250px"></div>

<?php $this->import('script.html.php') ?>

<script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="bower_components/moment/min/locales.min.js""></script>

<link rel="stylesheet" type="text/css" href="bower_components/clockpicker/dist/bootstrap-clockpicker.min.css">
<script type="text/javascript" src="bower_components/clockpicker/dist/bootstrap-clockpicker.min.js"></script>

<link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="bower_components/ag-grid/dist/ag-grid.js"></script>

<script type="text/javascript" src="js/view/workday.js"></script>
</body>
</html>

