@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel Sterowania</div>

                <div class="panel-body">

                        @component('components.who')
    
                        @endcomponent
                    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Jesteś zalogowany!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
