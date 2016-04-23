/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * Created by igorb on 22.4.2016.
 */
define(function (require) {
  'use strict';
  var $ = require('jquery');
  var agGrid = require('aggrid');

  /**
   * DayTasksGrid class
   * @constructor
   */
  function DayTasksGrid(divElement) {
    this.gridDiv = divElement;
    this.rowData = [];
    this.columnDefs = [
      {headerName: 'Id', field: 'id', width: 75},
      {headerName: 'Time', field: 'logtime', width: 100},
      {headerName: 'Description', field: 'description', width: 250},
      {headerName: 'Task', field: 'taskcode', width: 200}
    ];

    this.gridOptions = {
      enableColResize: true,
      headerHeight: 30,
      rowHeight: 30,
      rowSelection: 'single',
      onSelectionChanged: this.gridOnSelectionChanged,
      columnDefs: this.columnDefs,
      rowData: this.rowData,
      virtualPaging: true,
      rowModelType: 'virtual'
    };
  }

  DayTasksGrid.prototype.gridOnSelectionChanged = function () {
    var selectedId;
    var selectedRows = this.api.getSelectedRows();
    selectedRows.forEach(function (selectedRow, index) {
      selectedId = selectedRow.id;
      return selectedId;
    });
    console.log('You selected: ' + selectedId);
  }

  DayTasksGrid.prototype.reloadData = function () {
    $.ajax({
      context: this,
      type: 'GET',
      url: '/workday_grid',
      success: function (data) {
        this.setRowData(data);
      },
      error: function (event, request, settings) {
        console.log('Error ajax request: ' + settings.url);
      }
    });
  }

  DayTasksGrid.prototype.setRowData = function (allOfTheData) {
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
    this.gridOptions.api.setDatasource(dataSource);
  }

  DayTasksGrid.prototype.initialise = function () {
    agGrid.Grid(this.gridDiv, this.gridOptions);
    // populate grid with data
    this.reloadData();
  }

  return DayTasksGrid;
});

