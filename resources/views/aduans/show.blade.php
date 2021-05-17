@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Aduan Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('aduans.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    @switch(Auth::user()->role_id)
                    @case(3)
                        @include('admin.show_fields')
                        @break
                    @case(4)
                        @include('pengadu.show_fields')
                        @break
                    @case(2)
                        @include('verifikator.show_fields')
                        @break
                    @case(1)
                        @include('inspektur.show_fields')
                        @break
                    @default
                        
                @endswitch
                </div>
            </div>

        </div>
    </div>
@endsection
