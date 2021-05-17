<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->nip }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->level->nama }}</td>
            {{-- <td>{{ $user->avatar }}</td>
            <td>{{ $user->tempat }}</td>
            <td>{{ $user->tanggal }}</td>
            <td>{{ $user->jabatan }}</td>
            <td>{{ $user->pangkat }}</td>
            <td>{{ $user->instansi }}</td>
            <td>{{ $user->unit }}</td>
            <td>{{ $user->kota }}</td>
            <td>{{ $user->nohp }}</td>
            <td>{{ $user->alamat }}</td>
            <td>{{ $user->nolain }}</td> --}}
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
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
