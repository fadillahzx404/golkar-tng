<script src=" https://kit.fontawesome.com/d3336582c4.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


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
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('select[name="kecamatan"]').change(function() {
            onChangeSelect("{{ route('districts') }}", $(this).val(), 'kelurahan')
            $('#TPS option').remove();
            $('#TPS').append('<option> - Pilih TPS - </option>');
        })
        $('select[name="kelurahan"]').on('change', function() {
            $('#TPS').append('<option> - Pilih TPS - </option>');
            $('#TPS option').remove();
            let jml_tps = $('select[name="kelurahan"] :selected').attr('class');
            $('#TPS').append('<option> - Pilih TPS - </option>');
            for (let index = 1; index < jml_tps; index++) {
                $('#TPS').append('<option  value="' + index + '"> TPS ' + index +
                    '</option>');
            }

        })

    })
</script>

<script>
    function onChangeSelect(url, id, name) {
        // send ajax request to get the cities of the selected province and append to the select tag
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                id: id
            },
            success: function(data) {
                $('#' + name).empty();
                $('#' + name).append('<option> - Pilih Kelurahan - </option>');
                $.each(data, function(key, value) {

                    $('#' + name).append('<option class="' + value.jml_tps + '" value="' + value
                        .kode + '">' + value.nama +
                        '</option>');

                });

            }
        });

    }
</script>


<script>
    AOS.init();
    AOS.refresh();
</script>
