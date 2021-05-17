<!-- Nip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nip', 'Nip:') !!}
    {!! Form::text('nip', old('nip'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', old('username'), ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', old('email'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', old('email'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::number('role', old('role'), ['class' => 'form-control']) !!}
</div>

<!-- Avatar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('avatar', 'Avatar:') !!}
    {!! Form::text('avatar', old('avatar'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Tempat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempat', 'Tempat:') !!}
    {!! Form::text('tempat', old('tempat'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::text('tanggal', old('tanggal'), ['class' => 'form-control','id'=>'tanggal']) !!}
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
</div>

<!-- Pangkat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pangkat', 'Pangkat:') !!}
    {!! Form::text('pangkat', old('pangkat'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Instansi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instansi', 'Instansi:') !!}
    {!! Form::text('instansi', old('instansi'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit', 'Unit:') !!}
    {!! Form::text('unit', old('unit'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Kota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kota', 'Kota:') !!}
    {!! Form::text('kota', old('kota'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Nohp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nohp', 'Nohp:') !!}
    {!! Form::text('nohp', old('nohp'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', old('alamat'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Nolain Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nolain', 'Nolain:') !!}
    {!! Form::text('nolain', old('nolain'), ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('email_verified_at', old('email_verified_at'), ['class' => 'form-control','id'=>'email_verified_at']) !!}
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

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', old('remember_token'), ['class' => 'form-control','maxlength' => 100,'maxlength' => 100,'maxlength' => 100]) !!}
</div>