/**
 * Created by igorb on 18.2.2016.
 */
var Person =


// call it also when the page is ready after load or reload
$(function() {
    //var gridDiv = document.querySelector('#myGrid');
    var gridDiv = $("#myGrid").get(0);
    var gridData = [];
    var gridOptions = {
        enableColResize: true,
        enableSorting: true,
        enableFilter: true,
        headerHeight: 30,
        rowHeight: 30,
        unSortIcon: false,
        rowSelection: 'single',
        onSelectionChanged: onSelectionChanged,
        columnDefs: [
            /*
            {headerName: "#", width: 50, cellRenderer: function(params) {
                return params.node.id + 1;
            } },*/
            {headerName: 'Last Name', field: 'lastName', width: 200},
            {headerName: 'First Name', field: 'name', width: 150},
            {headerName: 'Checked', field: 'checked', width: 85},
            {headerName: 'Link', field: 'linkText', width: 200},
            {headerName: 'Address', field: 'href', width: 250},
            {headerName: 'Gender', field: 'gender', width: 85},
            {headerName: 'Rating', field: 'rating', width: 75},
            {headerName: 'Image', field: 'src', width: 300}
        ],
        virtualPaging: true,
        rowModelType: 'virtual'
    };

    function onSelectionChanged()
    {
        var selectedName;
        var selectedRows = gridOptions.api.getSelectedRows();
        selectedRows.forEach(function(selectedRow, index) {
            selectedName = selectedRow.lastName + ' ' + selectedRow.name;
            return selectedName;
        });
        console.log(selectedName);
    };

    function reloadData()
    {
        $.ajax({
            type: 'GET',
            url: '/personData',
            success: function (data) {
                setRowData(data);
            },
            error: function () {
                console.log("Error ajax request.");
            }
        });
    };

    function setRowData(allOfTheData) {
        var dataSource = {
            rowCount: null, // behave as infinite scroll
            pageSize: 100,
            overflowSize: 100,
            maxConcurrentRequests: 2,
            maxPagesInCache: 2,

            getRows: function (params) {
                console.log('asking for ' + params.startRow + ' to ' + params.endRow);
                // At this point in your code, you would call the server, using $http if in AngularJS.
                // To make the demo look real, wait for 500ms before returning
                setTimeout( function() {
                    // take a slice of the total rows
                    var rowsThisPage = allOfTheData.slice(params.startRow, params.endRow);
                    // if on or after the last page, work out the last row.
                    var lastRow = -1;
                    if (allOfTheData.length <= params.endRow) {
                        lastRow = allOfTheData.length;
                    }
                    // call the success callback
                    params.successCallback(rowsThisPage, lastRow);
                }, 500);
            }
        };
        gridOptions.api.setDatasource(dataSource);
    }


    // call function instead of create object
    agGrid.Grid(gridDiv, gridOptions);
    reloadData();

    $('#clear').on('click', function () {
        setRowData({});
    });

    $('#refresh').on('click', function () {
       reloadData();
    });

});

