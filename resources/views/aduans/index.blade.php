@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Aduans</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('aduans.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @switch(Auth::user()->role_id)
                    @case(3)
                        @include('admin.table')
                        @break
                    @case(4)
                        @include('pengadu.table')
                        
                        @break
                    @case(2)
                        @include('verifikator.table')
                        @break
                    @case(1)
                        @include('inspektur.table')
                        @break
                    @default
                        
                @endswitch

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

