/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * Created by igorb on 18.2.2016.
 */
define(function (require) {
  'use strict';
  require('bootstrap');
  require('datetimepicker');
  require('clockpicker')
  var $ = require('jquery');
  var agGrid = require('aggrid');

  // document ready function
  $(function () {
    var rowData = [];

    var columnDefs = [
      {headerName: 'Id', field: 'id', width: 75},
      {headerName: 'Time', field: 'logtime', width: 100},
      {headerName: 'Description', field: 'description', width: 250},
      {headerName: 'Task', field: 'taskcode', width: 200}
    ];

    var gridDiv = $('#grid').get(0);

    var gridOptions = {
      enableColResize: true,
      headerHeight: 30,
      rowHeight: 30,
      rowSelection: 'single',
      onSelectionChanged: gridOnSelectionChanged,
      columnDefs: columnDefs,
      rowData: rowData,
      virtualPaging: true,
      rowModelType: 'virtual'
    };

    function gridOnSelectionChanged() {
      var selectedId;
      var selectedRows = gridOptions.api.getSelectedRows();
      selectedRows.forEach(function (selectedRow, index) {
        selectedId = selectedRow.id;
        return selectedId;
      });
      alert('You selected: ' + selectedId);
    }

    function reloadData() {
      $.ajax({
        type: 'GET',
        url: '/workday_grid',
        success: function (data) {
          setRowData(data);
        },
        error: function (event, request, settings) {
          console.log('Error ajax request: ' + settings.url);
        }
      });
    }

    function setRowData(allOfTheData) {
      var dataSource = {
        rowCount: null, // behave as infinite scroll
        pageSize: 100,
        maxConcurrentRequest: 2,
        maxPagesInCache: 2,

        getRows: function (params) {
          var rowsThisPage = allOfTheData.slice(params.startRow, params.endRow);
          // if on or after the last page, work out the last row.
          var lastRow = -1;
          if (allOfTheData.length <= params.endRow) {
            lastRow = allOfTheData.length;
          }
          // call the success callback
          params.successCallback(rowsThisPage, lastRow);
        }
      };
      gridOptions.api.setDatasource(dataSource);
    }

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
    agGrid.Grid(gridDiv, gridOptions);

    // populate grid with data
    reloadData();
  });
});
