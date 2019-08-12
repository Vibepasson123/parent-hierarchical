@extends('layouts.app')

@section('content')
    <div class="container">
         <div id="app" class="pull-left">
            <parent :auth="{{Auth::user()}}"></parent>
         </div>
    </div>

@endsection
