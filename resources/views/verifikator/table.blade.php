<div class="table-responsive">
    <table class="table" id="aduans-table">
        <thead>
            <tr>
                <th>Jenis Aduan</th>
                <th>File Bukti</th>
                <th>Nama Terlapor</th>
                
                <th>Penjelasan</th>
                <th>Verifikasi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aduans as $aduan)
            <tr class="{{$aduan->status_verifikasi==1?'table-success':'table-warning'}}">
                <td>{{ $aduan->jenisAduan->name }}</td>
                <td><a href="{{ route('aduans.download', [$aduan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-file-alt"></i>
                    </a></td>
                <td>{{ $aduan->nama_terlapor }}</td>
                {{-- <td>{{ $aduan->jabatan_terlapor }}</td>
                <td>{{ $aduan->pangkat_terlapor }}</td>
                <td>{{ $aduan->instansi_terlapor }}</td>
                <td>{{ $aduan->unit_terlapor }}</td>
                <td>{{ $aduan->kota_terlapor }}</td> --}}
                <td>{{ $aduan->penjelasan }}</td>
                <td><a href="{{ route('aduans.verif', [$aduan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-check-square"></i>
                    </a>
                </td>
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