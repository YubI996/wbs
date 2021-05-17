<!-- Nip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nip', 'Nip:') !!}
    {!! Form::text('nip', old('nip'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('nip')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', old('username'), ['class' => 'form-control']) !!}
    @error('username')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('name')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', old('email'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('email')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', old('email'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('password')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id',[1=>'Inspektur',2=>'Verifikator',3=>'Admin',4=>'Pengadu'], old('role'), ['class' => 'form-control']) !!}
    @error('role')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Avatar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('avatar', 'Avatar:') !!}
    {!! Form::text('avatar', old('avatar'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('avatar')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Tempat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempat', 'Tempat Lahir:') !!}
    {!! Form::text('tempat', old('tempat'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('tempat')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal Lahir:') !!}
    {!! Form::text('tanggal', old('tanggal'), ['class' => 'form-control','id'=>'tanggal']) !!}
    @error('tanggal')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Jabatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    {!! Form::text('jabatan', old('jabatan'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('jabatan')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Pangkat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pangkat', 'Pangkat:') !!}
    {!! Form::text('pangkat', old('pangkat'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('pangkat')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Instansi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instansi', 'Instansi:') !!}
    {!! Form::text('instansi', old('instansi'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('instansi')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit', 'Unit:') !!}
    {!! Form::text('unit', old('unit'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('unit')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Kota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kota', 'Kota:') !!}
    {!! Form::text('kota', old('kota'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('kota')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Nohp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nohp', 'Nomor HP:') !!}
    {!! Form::text('nohp', old('nohp'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('nohp')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', old('alamat'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('alamat')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Nolain Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nolain', 'Nomor Lain:') !!}
    {!! Form::text('nolain', old('nolain'), ['class' => 'form-control','maxlength' => 255]) !!}
    @error('nolain')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush
