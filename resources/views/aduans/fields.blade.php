    {!! Form::hidden('user_id', null, ['class' => 'form-control','value' => '{{Auth::id()}}']) !!}

<!-- Jenis Aduan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_aduan', 'Jenis Aduan:') !!}
    {!! Form::select('jenis_aduan', $ja, ['class' => 'form-control']) !!}
    @error('jenis_aduan')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- File Bukti Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_bukti', 'File Bukti:') !!}
    {!! Form::file('file_bukti', null, ['class' => 'form-control']) !!}
    @error('file_bukti')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>
@if (Auth::user()->role_id == 2)
    
    <!-- Status Verifikasi Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('status_verifikasi', 'Status Verifikasi:') !!}
        {!! Form::text('status_verifikasi', null, ['class' => 'form-control']) !!}
        @error('status_verifikasi')
        <span class="error1">{{ $message }}</span>
        @enderror
    </div>

<!-- Catatan Verifikasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('catatan_verifikasi', 'Catatan Verifikasi:') !!}
    {!! Form::text('catatan_verifikasi', null, ['class' => 'form-control']) !!}
    @error('catatan_verifikasi')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- File Verifikator Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_verifikator', 'File Verifikator:') !!}
    {!! Form::file('file_verifikator', null, ['class' => 'form-control']) !!}
    @error('file_verifikator')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>
@endif
@if (Auth::user()->role_id == 1)

<!-- Status Validasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_validasi', 'Status Validasi:') !!}
    {!! Form::text('status_validasi', null, ['class' => 'form-control']) !!}
    @error('status_validasi')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Catatan Validasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('catatan_validasi', 'Catatan Validasi:') !!}
    {!! Form::text('catatan_validasi', null, ['class' => 'form-control']) !!}
    @error('catatan_validasi')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- File Inspektur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_inspektur', 'File Inspektur:') !!}
    {!! Form::file('file_inspektur', null, ['class' => 'form-control']) !!}
    @error('file_inspektur')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>
@endif
@if (Auth::user()->role_id == 3)

<!-- Hasil Penyidikan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hasil_penyidikan', 'Hasil Penyidikan:') !!}
    {!! Form::text('hasil_penyidikan', null, ['class' => 'form-control']) !!}
    @error('hasil_penyidikan')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>
@endif

<!-- Nama Terlapor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_terlapor', 'Nama Terlapor:') !!}
    {!! Form::text('nama_terlapor', null, ['class' => 'form-control']) !!}
    @error('nama_terlapor')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Jabatan Terlapor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_terlapor', 'Jabatan Terlapor:') !!}
    {!! Form::text('jabatan_terlapor', null, ['class' => 'form-control']) !!}
    @error('jabatan_terlapor')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Pangkat Terlapor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pangkat_terlapor', 'Pangkat Terlapor:') !!}
    {!! Form::text('pangkat_terlapor', null, ['class' => 'form-control']) !!}
    @error('pangkat_terlapor')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Instansi Terlapor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instansi_terlapor', 'Instansi Terlapor:') !!}
    {!! Form::text('instansi_terlapor', null, ['class' => 'form-control']) !!}
    @error('instansi_terlapor')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Unit Terlapor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_terlapor', 'Unit Terlapor:') !!}
    {!! Form::text('unit_terlapor', null, ['class' => 'form-control']) !!}
    @error('unit_terlapor')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Kota Terlapor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kota_terlapor', 'Kota Terlapor:') !!}
    {!! Form::text('kota_terlapor', null, ['class' => 'form-control']) !!}
    @error('kota_terlapor')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Penjelasan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('penjelasan', 'Penjelasan:') !!}
    {!! Form::text('penjelasan', null, ['class' => 'form-control']) !!}
    @error('penjelasan')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>
@section('scripts')
    <script>
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create( inputElement );
        FilePond.setOptions({
            server: {
                url: '/files',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });
    </script>
@endsection