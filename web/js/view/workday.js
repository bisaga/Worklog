/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * Created by igorb on 18.2.2016.
 */


var config = {
    gridDay: {
        name: 'gridDay',
        url:'./workday_grid',

        postData: {
            selectedDate: '',
            showCount: false
        },

        show: {
            toolbar:true,
            lineNumbers: true
        },

        columns: [
            {field: 'id', caption:'Id', size: '50px', sortable: true, resizable: true},
            {field: 'fromtime', caption:'From', size: '70px', sortable: true, resizable: true, render:'time:h24', editable: {type:"time", format: 'h24'} },
            {field: 'totime', caption:'To', size: '70px', sortable: true, resizable: true , render:'time:h24', editable: {type:"time", format: 'h24'} },
            {field: 'logtime', caption:'Time', size: '70px', sortable: true, resizable: true , render:'time:h24', editable: {type:"time", format: 'h24'} },
            {field: 'taskcode', caption:'Task', size: '130px', sortable: true, resizable: true },
            {field: 'description', caption:'Description', size: '250px', sortable: true, resizable: true }
        ]

    },
    formDay: {
        name: 'formDay',
        url: './workday_form',
        recid: 1,   // trigger loading data
        fields: [
            {name: 'selectedDate', type: 'date'},
            {name: 'startTime', type: 'time'},
            {name: 'endTime', type: 'time'}
        ],
        onChange: function (event) {
            event.onComplete = function () {
                onSelectedDateChange(event);
            }
        }

    }
};

function onSelectedDateChange(event)
{
    if(event.type == 'change' && event.target == 'selectedDate')
    {
        w2ui.gridDay.postData.selectedDate = event.value_new;
        w2ui.gridDay.reload();
        w2ui.gridDay.focus();

        // change title date
        $("#dateTitle").text(event.value_new);
    }
}

$(function() {
    $("#formDay").w2form(config.formDay);
    $('#gridDay').w2grid(config.gridDay);
});