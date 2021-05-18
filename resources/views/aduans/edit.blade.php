@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Aduan</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">
            @switch(Auth::user()->role_id)
                    @case(3)
                        {!! Form::model($aduan, ['route' => ['aduans.update', $aduan->id], 'method' => 'patch']) !!}

                            <div class="card-body">
                                <div class="row">
                                    @include('admin.fields')
                                </div>
                            </div>

                            <div class="card-footer">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('aduans.index') }}" class="btn btn-default">Cancel</a>
                            </div>

                        {!! Form::close() !!}
                        
                        @break
                    @case(4)
                        {!! Form::model($aduan, ['route' => ['aduans.update', $aduan->id], 'method' => 'patch']) !!}

                            <div class="card-body">
                                <div class="row">
                                    @include('pengadu.fields')
                                </div>
                            </div>

                            <div class="card-footer">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('aduans.index') }}" class="btn btn-default">Cancel</a>
                            </div>

                        {!! Form::close() !!}
                        @break
                    @case(2)
                        {!! Form::model($aduan, ['route' => ['aduans.verif', $aduan->id], 'method' => 'patch']) !!}

                            <div class="card-body">
                                <div class="row">
                                    @include('verifikator.fields')
                                </div>
                            </div>

                            <div class="card-footer">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('aduans.index') }}" class="btn btn-default">Cancel</a>
                            </div>

                        {!! Form::close() !!}
                        @break
                    @case(1)
                        {!! Form::model($aduan, ['route' => ['aduans.update', $aduan->id], 'method' => 'patch']) !!}

                            <div class="card-body">
                                <div class="row">
                                    @include('inspektur.fields')
                                </div>
                            </div>

                            <div class="card-footer">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('aduans.index') }}" class="btn btn-default">Cancel</a>
                            </div>

                        {!! Form::close() !!}
                        @break
                    @default
                        
                @endswitch
            

        </div>
    </div>
@endsection
