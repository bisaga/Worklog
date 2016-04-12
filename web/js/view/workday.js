/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * Created by igorb on 18.2.2016.
 */

$(function() {
    $("#selectedDate").datetimepicker({
        inline: true,
        format: 'MM.DD.YYYY',
        locale: 'en'
    });

    $('.clockpicker').clockpicker({
        align: 'left',
        donetext: 'Izberi'
    });
});