<html>
<head>
  <?php $this->import('head.html.php') ?>
</head>
<body>

<?php $this->import('navigate.html.php') ?>
<div style='padding-bottom:15px'></div>
<div class='container'>
  <div class='row'>
    <div class='col-xs-12 col-sm-4 col-md-3 col-lg-3'>
      <div class='panel panel-default'>
        <div class='panel-heading'>Day</div>
        <div class='panel-body'>
          <form role='form'>
            <div id='selectedDate'></div>
            <label class='control-label'>Arrive</label>
            <div class='input-group clockpicker'>
              <input id='startTime' class='form-control'/>
                                <span class='input-group-addon'>
                                    <span class='glyphicon glyphicon-time'></span>
                                </span>
            </div>
            <label for='endTime' class='control-label'>Leave</label>
            <div class='input-group clockpicker'>
              <input id='endTime' class='form-control'/>
                                <span class='input-group-addon'>
                                    <span class='glyphicon glyphicon-time'></span>
                                </span>
            </div>
            <div class='form-group'></div>
            <button type='submit' class='btn btn-default'>Save</button>
          </form>
        </div>
      </div>
    </div>

    <div class='col-xs-12 col-sm-4 col-md-5 col-lg-5'>
      <div class='panel panel-default'>
        <div class='panel-heading'>Tasks</div>
        <div class='panel-body'>
          <div id='grid' class='ag-bootstrap-striped' style='width:100%; height:500px;'></div>
        </div>
      </div>
    </div>

    <div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
      <div class='panel panel-default'>
        <div class='panel-heading'>Edit task</div>
        <div class='panel-body'>
          <div class='btn-toolbar'>
            <button id='addNew' class='btn btn-default'>Add</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script>
  // load requirejs config, common to all pages
  requirejs(['./script/common'], function (common) {
    // load script specific to the page
    requirejs(['app/workday']);
  });
</script>
</html>

