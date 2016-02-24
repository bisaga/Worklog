/**
 * Created by igorb on 18.2.2016.
 */

var config = {
    gridPerson: {
    name: 'grid',
    header: 'List of Names',
    columns: [
        { field: 'fname', caption: 'First Name', size: '30%' },
        { field: 'lname', caption: 'Last Name', size: '30%' },
        { field: 'email', caption: 'Email', size: '40%' },
        { field: 'sdate', caption: 'Start Date', size: '120px' }
    ],
    records: [
        { recid: 1, fname: "Peter", lname: "Jeremia", email: 'peter@mail.com', sdate: '2/1/2010' },
        { recid: 2, fname: "Bruce", lname: "Wilkerson", email: 'bruce@mail.com', sdate: '6/1/2010' },
        { recid: 3, fname: "John", lname: "McAlister", email: 'john@mail.com', sdate: '1/16/2010' },
        { recid: 4, fname: "Ravi", lname: "Zacharies", email: 'ravi@mail.com', sdate: '3/13/2007' },
        { recid: 5, fname: "William", lname: "Dembski", email: 'will@mail.com', sdate: '9/30/2011' },
        { recid: 6, fname: "David", lname: "Peterson", email: 'david@mail.com', sdate: '4/5/2010' }
    ]
    }
};

// call it also when the page is ready after load or reload
$(function() {
    $('#gridPerson').w2grid(config.gridPerson);
});