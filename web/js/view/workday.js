/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * Created by igorb on 18.2.2016.
 */


var config = {
    gridDay: {
        name: 'gridDay',
        show: {
            toolbar:true,
            lineNumbers: true
        },

        columns: [
            {field: 'recid', caption:'Id', size: '50px', sortable: true, resizable: true},
            {field: 'timeFrom', caption:'From', size: '70px', sortable: true, resizable: true, editable: {type:"time", format: 'h24'} },
            {field: 'timeTo', caption:'To', size: '70px', sortable: true, resizable: true , editable: {type:"time", format: 'h24'} },
            {field: 'time', caption:'Time', size: '70px', sortable: true, resizable: true , editable: {type:"time", format: 'h24'} },
            {field: 'task', caption:'Task', size: '130px', sortable: true, resizable: true },
            {field: 'desc', caption:'Description', size: '250px', sortable: true, resizable: true }
        ],

        records: [
            { recid: 1,  task: "LJGENISUDEV-103", desc:"Prilagoditev design-a SSRS reporta"}
        ]

    }
};

$(function() {
    $("#gridDay").w2grid(config.gridDay);
});