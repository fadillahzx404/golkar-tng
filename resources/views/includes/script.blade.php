<script src=" https://kit.fontawesome.com/d3336582c4.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.dataTables.css" />

<script src="https://cdn.datatables.net/2.1.0/js/dataTables.js"></script>

<script src="https://cdn.datatables.net/buttons/3.1.0/js/dataTables.buttons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.print.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<script>
    $(document).ready(function() {

        var table = $('#datatable').DataTable({
                responsive: true
            })
            .columns.adjust();

    });
</script>

<script>
    $('#searchInput').keyup(function() {
        var table = $('.datatable').DataTable();

        table.search($(this).val()).draw();
    });
</script>




<script>
    AOS.init();
    AOS.refresh();
</script>
