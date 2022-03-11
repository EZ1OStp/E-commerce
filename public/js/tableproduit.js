$(document).ready(function() {
    $('#tabProduit').DataTable({
        language: {
            url: "DataTables/media/French.json"
        },
        responsive: true,
        colReorder: true,
        "aoColumnDefs": [
            { 'bSortable': false, 'aTargets': [1, 3, 4] }
        ]


    });
});