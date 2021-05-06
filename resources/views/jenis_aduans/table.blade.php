<div class="table-responsive">
    <table class="table" id="jenisAduans-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jenisAduans as $jenisAduan)
            <tr>
                <td>{{ $jenisAduan->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['jenisAduans.destroy', $jenisAduan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('jenisAduans.show', [$jenisAduan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('jenisAduans.edit', [$jenisAduan->id]) }}" class='btn btn-default btn-xs'>
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
