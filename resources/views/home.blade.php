@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
            
                {{File::exists(public_path('img/logo-bontang.png'))}}
            <img src="{{asset('img/logo-bontang.png')}}" alt="logo">
        
    </div>
</div>
@endsection
