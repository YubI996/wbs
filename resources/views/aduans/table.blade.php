<div class="table-responsive">
    <table class="table" id="aduans-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Jenis Aduan</th>
        <th>File Bukti</th>
        <th>Status Verifikasi</th>
        <th>Catatan Verifikasi</th>
        <th>File Verifikator</th>
        <th>Status Validasi</th>
        <th>Catatan Validasi</th>
        <th>File Inspektur</th>
        <th>Hasil Penyidikan</th>
        <th>Nama Terlapor</th>
        <th>Jabatan Terlapor</th>
        <th>Pangkat Terlapor</th>
        <th>Instansi Terlapor</th>
        <th>Unit Terlapor</th>
        <th>Kota Terlapor</th>
        <th>Penjelasan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aduans as $aduan)
            <tr>
                <td>{{ $aduan->user_id }}</td>
            <td>{{ $aduan->jenis_aduan }}</td>
            <td>{{ $aduan->file_bukti }}</td>
            <td>{{ $aduan->status }}</td>
            <td>{{ $aduan->catatan_verifikasi }}</td>
            <td>{{ $aduan->file_verifikator }}</td>
            <td>{{ $aduan->status }}</td>
            <td>{{ $aduan->catatan_validasi }}</td>
            <td>{{ $aduan->file_inspektur }}</td>
            <td>{{ $aduan->hasil_penyidikan }}</td>
            <td>{{ $aduan->nama_terlapor }}</td>
            <td>{{ $aduan->jabatan_terlapor }}</td>
            <td>{{ $aduan->pangkat_terlapor }}</td>
            <td>{{ $aduan->instansi_terlapor }}</td>
            <td>{{ $aduan->unit_terlapor }}</td>
            <td>{{ $aduan->kota_terlapor }}</td>
            <td>{{ $aduan->penjelasan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['aduans.destroy', $aduan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('aduans.show', [$aduan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('aduans.edit', [$aduan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
