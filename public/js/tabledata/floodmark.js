$(document).ready(function () {
    // console.log('Initialize DataTable');

    if ($.fn.DataTable.isDataTable('#fix-header')) {
        // console.log('Destroy existing DataTable');
        $('#fix-header').DataTable().clear().destroy();
    }

    $('#fix-header').DataTable({
        processing: true,
        serverSide: true,
        ajax: floodmarkTableUrl,
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'code', name: 'code' },
            { data: 'tool', name: 'tool' },
            { data: 'place_detail', name: 'place_detail' },
            { data: 'coordinate', name: 'coordinate', orderable: false, searchable: false },
            { data: 'water_level', name: 'water_level' },
            { data: 'image', name: 'image', orderable: false, searchable: false },
            { data: 'map', name: 'map', orderable: false, searchable: false }
        ]
    });
});
