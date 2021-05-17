@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Aduan</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        {{-- @include('adminlte-templates::common.errors') --}}

        <div class="card">

            {!! Form::open(['route' => 'aduans.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            @csrf
            <div class="card-body">

                <div class="row">
                    {{-- @include('aduans.fields') --}}

                @switch(Auth::user()->role_id)
                    @case(3)
                        @include('admin.fields')
                        @break
                    @case(4)
                        @include('pengadu.fields')
                        @break
                    @case(2)
                        @include('verifikator.fields')
                        @break
                    @case(1)
                        @include('inspektur.fields')
                        @break
                    @default
                        
                @endswitch
                </div>

            </div>

            <div class="card-footer">
                <input type="submit" value="Submit" class="btn btn-primary">
                {{-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} --}}
                <a href="{{ route('aduans.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
