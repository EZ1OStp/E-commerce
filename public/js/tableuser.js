$(document).ready(function() {
    $('#tabEtudiant').DataTable({
        language: {
            url: "DataTables/media/French.json"
        },
        responsive: true,
        colReorder: true,
        "aoColumnDefs": [
            { 'bSortable': false, 'aTargets': [1, 3, 4, 5] }
        ]


    });
});