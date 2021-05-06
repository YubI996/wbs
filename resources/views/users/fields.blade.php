<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('name')
        <span class="error1">{{ $message }}</span>
    @enderror

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('email')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
    @error('email_verified_at')
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

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255]) !!}
    @error('password')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Nip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nip', 'Nip:') !!}
    {!! Form::text('nip', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('nip')
        <span class="error1">{{ $message }}</span>
    @enderror    
</div>

<!-- Tempat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempat', 'Tempat:') !!}
    {!! Form::text('tempat', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('tempat')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::text('tanggal', null, ['class' => 'form-control','id'=>'tanggal']) !!}
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
    {!! Form::text('jabatan', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('jabatan')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Pangkat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pangkat', 'Pangkat:') !!}
    {!! Form::text('pangkat', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('pangkat')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Instansi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instansi', 'Instansi:') !!}
    {!! Form::text('instansi', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('instansi')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit', 'Unit:') !!}
    {!! Form::text('unit', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('unit')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Kota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kota', 'Kota:') !!}
    {!! Form::text('kota', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('kota')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Nohp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nohp', 'Nohp:') !!}
    {!! Form::text('nohp', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('nohp')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('alamat')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Nolain Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nolain', 'Nolain:') !!}
    {!! Form::text('nolain', null, ['class' => 'form-control','maxlength' => 255]) !!}
    @error('nolain')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control','maxlength' => 100]) !!}
    @error('remember_token')
        <span class="error1">{{ $message }}</span>
    @enderror
</div>