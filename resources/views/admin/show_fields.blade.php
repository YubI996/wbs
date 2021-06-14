

<!-- Jenis Aduan Field -->
<div class="col-sm-12">
    {!! Form::label('jenis_aduan', 'Jenis Aduan:') !!}
    <p>{{ $aduan->jenisAduan->name }}</p>
</div>

<!-- File Bukti Field -->
<div class="col-sm-12">
    {!! Form::label('file_bukti', 'File Bukti:') !!}
    <p>{{ $aduan->file_bukti }}</p>
</div>

<!-- Nama Terlapor Field -->
<div class="col-sm-12">
    {!! Form::label('nama_terlapor', 'Nama Terlapor:') !!}
    <p>{{ $aduan->nama_terlapor }}</p>
</div>

<!-- Jabatan Terlapor Field -->
<div class="col-sm-12">
    {!! Form::label('jabatan_terlapor', 'Jabatan Terlapor:') !!}
    <p>{{ $aduan->jabatan_terlapor }}</p>
</div>

<!-- Pangkat Terlapor Field -->
<div class="col-sm-12">
    {!! Form::label('pangkat_terlapor', 'Pangkat Terlapor:') !!}
    <p>{{ $aduan->pangkat_terlapor }}</p>
</div>

<!-- Instansi Terlapor Field -->
<div class="col-sm-12">
    {!! Form::label('instansi_terlapor', 'Instansi Terlapor:') !!}
    <p>{{ $aduan->instansi_terlapor }}</p>
</div>

<!-- Unit Terlapor Field -->
<div class="col-sm-12">
    {!! Form::label('unit_terlapor', 'Unit Terlapor:') !!}
    <p>{{ $aduan->unit_terlapor }}</p>
</div>

<!-- Kota Terlapor Field -->
<div class="col-sm-12">
    {!! Form::label('kota_terlapor', 'Kota Terlapor:') !!}
    <p>{{ $aduan->kota_terlapor }}</p>
</div>

<!-- Penjelasan Field -->
<div class="col-sm-12">
    {!! Form::label('penjelasan', 'Penjelasan:') !!}
    <p>{{ $aduan->penjelasan }}</p>
</div>
<!-- Status Verifikasi Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status Verifikasi:') !!}
    <p>{{ ($aduan->status==1?'Sudah diverifikasi':($aduan->status==2?'Ditolak':'Belum diverifikasi')) }}</p>
</div>

<!-- Catatan Verifikasi Field -->
<div class="col-sm-12">
    {!! Form::label('catatan_verifikasi', 'Catatan Verifikasi:') !!}
    <p>{{ $aduan->catatan_verifikasi }}</p>
</div>

<!-- File Verifikator Field -->
<div class="col-sm-12">
    {!! Form::label('file_verifikator', 'File Verifikator:') !!}
    <p>
        @if (! empty($aduan->file_verifikator))
            <a href="{{ route('aduans.download', ['name'=>'verif','id'=>$aduan->id]) }}" class='btn btn-default btn-xs'>
                <i class="far fa-file-alt"></i>
            </a>
        @endif
        
    </p>
</div>


<!-- Status Validasi Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status Validasi:') !!}
    <p>{{ ($aduan->status==1?'Sudah divalidasi':($aduan->status==0?'Ditolak':'Belum divalidasi')) }}</p>
</div>

<!-- Catatan Validasi Field -->
<div class="col-sm-12">
    {!! Form::label('catatan_validasi', 'Catatan Validasi:') !!}
    <p>{{ $aduan->catatan_validasi }}</p>
</div>

<!-- File Inspektur Field -->
<div class="col-sm-12">
    {!! Form::label('file_inspektur', 'File Inspektur:') !!}
    <p>
        @if (! empty($aduan->file_inspektur ))
            <a href="{{ route('aduans.download', ['name'=>'inspek','id'=>$aduan->id]) }}" class='btn btn-default btn-xs'>
                <i class="far fa-file-alt"></i>
            </a>
        @endif
        
    </p>
</div>

