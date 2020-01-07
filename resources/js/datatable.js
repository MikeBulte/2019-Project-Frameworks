/**
 * Here we write the config for all JQuery Data Tables inside our application.
 * If you want to edit or create new Data Tables, insert the code for it here.
 */

$(document).ready( function () {
    $('#table-pagination').DataTable();
} );

$(document).ready(function () {
    $('#table-scores').DataTable({
        "order": [ 2, "desc" ],
        "columnDefs": [
            { "orderable": false, "targets": [ 1, 3 ] }
        ]
    });
});
