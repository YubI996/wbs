<div class="table-responsive">
    <table class="table" id="aduans-table">
        <thead>
            <tr>
                <th>Nomor Registrasi Aduan</th>
                <th>Jenis Aduan</th>
                <th>File Bukti</th>
                <th>Nama Terlapor</th>
                <th>Penjelasan</th>
                <th>Hasil Pemeriksaan</th>
                <th>Catatan verifikator</th>
                {{-- <th>Status Laporan</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aduans as $aduan)
            <tr>
                <td>{{ $aduan->id }}</td>
                <td>{{ $aduan->jenisAduan->name }}</td>
                <td>
                    <a href="{{ route('aduans.download', ['name'=>'bukti','id'=>$aduan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-file-alt"></i>
                    </a>
                </td>
                <td>{{ $aduan->nama_terlapor }}</td>
                <td>{{ $aduan->penjelasan }}</td>
                @php
                    $status='Proses Verifikasi';
                    $statusSwitch = $aduan->status;
                    switch ($statusSwitch) {
                        case 1:
                            $status="Proses Verifikasi";
                            break;
                        
                        
                        case 3:
                            $status="Proses Pemeriksaan";
                            break;

                        case 5:
                            $status="Terbukti";
                            break;
                        
                        case 6:
                            $status="Tidak Terbukti";
                            break;
                        
                        case 7:
                            $status="Selesai";
                            break;
                        
                        case 2||4:
                            $status="Tidak Ditindaklanjuti";
                            break;

                        default:
                            $status='Proses Verifikasi';
                            break;
                    }
                    if(! $aduan->tgl_selesai == null){
                        $status = 'Selesai : '.$status;
                    }
                @endphp
                <td>{{ $status }}</td>
                @if ($aduan->status == 2)
                    <td>{{ $aduan->catatan_verifikasi }}</td>
                @else
                    <td>{{ "-" }}</td>
                @endif
                {{-- <td>{{ $aduan->tgl_selesai == null ? 'Selesai': }}</td> --}}
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
