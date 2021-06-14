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
                    $status='Proses verifikasi';
                    $ver=$aduan->status;
                    $val=$aduan->status;
                    $hasil=$aduan->hasil_penyidikan;
                    if($hasil===null){
                        if ($val===null) {
                            if($ver==2){
                                $status='Tidak ditindaklanjuti';
                            }
                        }
                        elseif($val==2){
                                $status='Tidak ditindaklanjuti';
                        }
                        elseif($val==1){
                            $status='Proses Pemeriksaan';
                        }
                    }
                    elseif($hasil==2){
                            $status='Tidak terbukti';
                    }
                    elseif($hasil==1){
                        $status='Terbukti';
                    }
                    if(! $aduan->tgl_selesai == null){
                        $status = 'Selesai : '.$status;
                    }
                @endphp
                <td>{{ $status }}</td>
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
