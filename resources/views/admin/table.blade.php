<div class="table-responsive">
    <table class="table" id="aduans-table">
        <thead>
            <tr>
                <th>Pelapor</th>
                <th>Jenis Aduan</th>
                <th>File Bukti</th>
                <th>Hasil Penyidikan</th>
                <th>Nama Terlapor</th>
                {{-- <th>Jabatan Terlapor</th>
                <th>Pangkat Terlapor</th>
                <th>Instansi Terlapor</th>
                <th>Unit Terlapor</th>
                <th>Kota Terlapor</th> --}}
                <th>Penjelasan</th>
                <th>Tandai Selesai</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aduans as $aduan)
            <tr>
                <td>{{ $aduan->user->name }}</td>
            <td>{{ $aduan->jenisAduan->name }}</td>
            <td>
                <a href="{{ route('aduans.download', ['name'=>'bukti','id'=>$aduan->id]) }}" class='btn btn-default btn-xs'>
                    <i class="far fa-file-alt"></i>
                </a>
            </td>
            <td>{{ $aduan->hasil_penyidikan.' : '.$aduan->hasil_penyidikan==1?'Terbukti':($aduan->hasil_penyidikan==2?'Tidak terbukti':'Proses Pemeriksaan') }}</td>
            <td>{{ $aduan->nama_terlapor }}</td>
            {{-- <td>{{ $aduan->jabatan_terlapor }}</td>
            <td>{{ $aduan->pangkat_terlapor }}</td>
            <td>{{ $aduan->instansi_terlapor }}</td>
            <td>{{ $aduan->unit_terlapor }}</td>
            <td>{{ $aduan->kota_terlapor }}</td> --}}
            <td>{{ $aduan->penjelasan }}</td>
            <td>
                <a href="{{ route('aduans.selesai', [$aduan->id]) }}" class="btn btn-xs {{$aduan->hasil_penyidikan === null ? ' btn-secondary disabled':($aduan->tgl_selesai == null?' btn-warning ':' btn-success disabled')}}">
                    Selesai
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
/