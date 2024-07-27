<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Provinsi</th>
            <th>Kota/Kab</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>NIK</th>
            <th>Nama Saksi</th>
            <th>WA</th>
            <th>TPS</th>
            <th>Jumlah DPT</th>
            <th>Suara Sah</th>
            <th>Suara Tidak Sah</th>
            <th>Paslon 1</th>
            <th>Paslon 2</th>
        </tr>
    </thead>
    <tbody>
        @if (count($rekaps) > 0)
            @foreach ($rekaps as $rekap)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>BANTEN</td>
                    <td>TANGERANG</td>
                    <td>{{ $rekap->kecRelation->nama }}</td>
                    <td>{{ $rekap->kelRelation->nama }}</td>
                    <td>'{{ $rekap->user }}</td>
                    <td>{{ $rekap->userRelation->name }}</td>
                    <td>{{ $rekap->userRelation->phone_number }}</td>
                    <td>{{ $rekap->tps }}</td>
                    <td>{{ $rekap->dpt }}</td>
                    <td>{{ $rekap->sah }}</td>
                    <td>{{ $rekap->tidak_sah }}</td>
                    <td>{{ $rekap->paslon1 }}</td>
                    <td>{{ $rekap->paslon2 }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="14">Tidak ada data ditemukan</td>
            </tr>
        @endif
    </tbody>
</table>
