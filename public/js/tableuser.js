$(document).ready(function() {
    $('#tabUser').DataTable({
        language: {
            url: "DataTables/media/French.json"
        },
        responsive: true,
        colReorder: true,
        "aoColumnDefs": [
            { 'bSortable': false, 'aTargets': [0, 1, 2, 3] }
        ]


    });
});