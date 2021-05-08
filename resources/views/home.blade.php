@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
            
        {{Auth::user()->role}}
        
    </div>
</div>
@endsection
