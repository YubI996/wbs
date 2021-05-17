<!-- Nip Field -->
<div class="col-sm-12">
    {!! Form::label('nip', 'NIP:') !!}
    <p>{{ $user->nip }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $user->username }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('role', 'Role:') !!}
    <p>{{ $user->level->nama }}</p>
</div>

<!-- Avatar Field -->
<div class="col-sm-12">
    {!! Form::label('avatar', 'Avatar:') !!}
    <p>{{ $user->avatar }}</p>
</div>

<!-- Tempat Field -->
<div class="col-sm-12">
    {!! Form::label('tempat', 'Tempat:') !!}
    <p>{{ $user->tempat }}</p>
</div>

<!-- Tanggal Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{{ $user->tanggal }}</p>
</div>

<!-- Jabatan Field -->
<div class="col-sm-12">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    <p>{{ $user->jabatan }}</p>
</div>

<!-- Pangkat Field -->
<div class="col-sm-12">
    {!! Form::label('pangkat', 'Pangkat:') !!}
    <p>{{ $user->pangkat }}</p>
</div>

<!-- Instansi Field -->
<div class="col-sm-12">
    {!! Form::label('instansi', 'Instansi:') !!}
    <p>{{ $user->instansi }}</p>
</div>

<!-- Unit Field -->
<div class="col-sm-12">
    {!! Form::label('unit', 'Unit:') !!}
    <p>{{ $user->unit }}</p>
</div>

<!-- Kota Field -->
<div class="col-sm-12">
    {!! Form::label('kota', 'Kota:') !!}
    <p>{{ $user->kota }}</p>
</div>

<!-- Nohp Field -->
<div class="col-sm-12">
    {!! Form::label('nohp', 'Nomor HP:') !!}
    <p>{{ $user->nohp }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $user->alamat }}</p>
</div>

<!-- Nolain Field -->
<div class="col-sm-12">
    {!! Form::label('nolain', 'Nomor lain:') !!}
    <p>{{ $user->nolain }}</p>
</div>

