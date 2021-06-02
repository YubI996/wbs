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

