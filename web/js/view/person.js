/**
 * Created by igorb on 18.2.2016.
 */

// call it also when the page is ready after load or reload
$(function() {
    //var gridDiv = document.querySelector('#myGrid');
    var gridDiv = $("#myGrid").get(0);

    var gridOptions = {
        enableColResize: true,
        enableSorting: true,
        enableFilter: true,
        headerHeight: 30,
        rowHeight: 30,
        unSortIcon: true,
        rowSelection: 'single',
        onSelectionChanged: onSelectionChanged,
        columnDefs: [
            {headerName: 'Name', field: 'name'},
            {headerName: 'Role', field: 'role'}
        ],
        rowData: [
            {name: 'Niall', role: 'Developer'},
            {name: 'Eamon', role: 'Manager'},
            {name: 'Brian', role: 'Musician'},
            {name: 'Kevin', role: 'Manager'}
        ]

    };

    function onSelectionChanged()
    {
        var selectedName;
        var selectedRows = gridOptions.api.getSelectedRows();
        selectedRows.forEach(function(selectedRow, index) {
            selectedName = selectedRow.name;
            return selectedName;
        });
        console.log(selectedName);
    }

    // create object
    agGrid.Grid(gridDiv, gridOptions);
});

