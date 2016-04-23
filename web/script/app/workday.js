/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * Created by igorb on 18.2.2016.
 */
define(function (require) {
  'use strict';
  var $ = require('jquery');
  require('bootstrap');
  require('datetimepicker');
  require('clockpicker');

  var DayTasksGrid = require('./day_tasks_grid');

  // document ready function
  $(function () {
    /**
     * Init page function
     */
    var initPage = function () {
      // create calendar
      $('#selectedDate').datetimepicker({
        inline: true,
        format: 'MM.DD.YYYY',
        locale: 'en'
      });

      // create clock picker out of divs with 'clockpicker' css class
      $('.clockpicker').clockpicker({
        align: 'left',
        donetext: 'Select'
      });

      // create grid
      var grid = new DayTasksGrid($('#grid').get(0));
      grid.initialise();
    }

    initPage();
  });
});
