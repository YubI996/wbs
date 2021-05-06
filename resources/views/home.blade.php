@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
            {{Auth::user()}}
            {{Auth::user()->email}}
        
    </div>
</div>
@endsection
