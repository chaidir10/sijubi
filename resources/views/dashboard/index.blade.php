@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4><span class="badge bg-info"><span data-feather="coffee" class="mb-1"></span> Welcome BUTTck!, {{auth()->user()->name}}</span></h4>
    </div>
@endsection