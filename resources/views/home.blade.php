@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div id="app">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    
@endsection
@section('script')
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
@endsection
