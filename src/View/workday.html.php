<html>
<head>
    <?php $this->import('head.html.php') ?>
</head>
<body>

    <?php $this->import('navigate.html.php') ?>

    <div class="container">
        <div class="row" style="padding-top:10px">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Day</div>
                    <div class="panel-body">
                        <form role="form">
                            <div id="selectedDate"></div>
                            <label class="control-label">Arrive</label>
                            <div class="input-group clockpicker">
                                <input id="startTime" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <label for="endTime" class="control-label">Leave</label>
                            <div class="input-group clockpicker">
                                <input id="endTime" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <div class="form-group"></div>
                            <button type="submit" class="btn btn-default">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
                <div class="panel panel-default">
                    <div class="panel-heading">Tasks</div>
                    <div class="panel-body">
                        <div id="dayGrid"></div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit task</div>
                    <div class="panel-body">
                        <div class="btn-toolbar">
                            <button id="addNew" class="btn btn-default">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->import('script.html.php') ?>

    <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="bower_components/moment/min/locales.min.js" "></script>

    <link rel="stylesheet" type="text/css" href="bower_components/clockpicker/dist/bootstrap-clockpicker.min.css" />
    <script type="text/javascript" src="bower_components/clockpicker/dist/bootstrap-clockpicker.min.js"></script>

    <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript" src="bower_components/ag-grid/dist/ag-grid.js"></script>

    <script type="text/javascript" src="js/view/workday.js"></script>
</body>
</html>

