@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Aduan</h1>
                </div>
                @if (Auth::user()->role_id==4)
                    <div class="col-sm-6">
                        <a class="btn btn-primary float-right"
                        href="{{ route('aduans.create') }}">
                            Tambah
                        </a>
                    </div>      
                @endif
            
            </div>
        </div>
    </section>
    {{-- {{Auth::id(). ' : '. $test}} --}}
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
@section('modals')
    {{-- modal verifikator --}}
    {{-- <div class="modal fade form-verifikator" tabindex="-1" role="dialog" aria-labelledby="form-verifikator" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => {{ route('aduans.verif', [$aduan->id]) }},'method' => 'POST']) !!}
                    <form action="{{ route('aduans.verif', [$aduan->id]) }}" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                    {!! Form::close() !!}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div> --}}
    

@endsection
{{-- @section('scripts')
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
@endsection --}}
