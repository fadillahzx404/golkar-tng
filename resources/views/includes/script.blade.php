<script src=" https://kit.fontawesome.com/d3336582c4.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<script>
    $(document).ready(function() {

        var table = $('#datatable').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
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
