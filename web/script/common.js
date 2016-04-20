/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * Created by igorb on 20.4.2016.
 */

//The build will inline common dependencies into this file.

//For any third party dependencies, like jQuery, place them in the lib folder.

//Configure loading modules from the lib directory,
//except for 'app' ones, which are in a sibling
//directory.

requirejs.config({
  baseUrl: 'script/lib',
  paths: {
    app: '../app',
    jquery: '../../bower_components/jquery/dist/jquery',
    bootstrap: '../../bower_components/bootstrap/dist/js/bootstrap',
    aggrid: '../../bower_components/ag-grid/dist/ag-grid',
    datetimepicker: '../../bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker',
    clockpicker: '../../bower_components/clockpicker/dist/bootstrap-clockpicker',
    moment: '../../bower_components/moment/moment',
    momenttz: '../../bower_components/moment-timezone/build/moment-timezone'
    /*
     jquery: '//code.jquery.com/jquery-2.1.4.min',
     bootstrap: 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.3/js/bootstrap.min.js'
     */
  },
  shim: {
    bootstrap: {
      deps: ['jquery']
    },
    datetimepicker: {
      deps: ['jquery', 'moment']
    },
    clockpicker: {
      deps: ['jquery', 'moment']
    }
  }
});