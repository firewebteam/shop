@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Zweryfikuj adres E-Mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Nowy link weryfikacyjny został wysłany na twój E-Mail') }}
                        </div>
                    @endif

                    {{ __('Zanim przejdziesz dalej, sprawdź czy na twoją skrzynkę nie dotarł mail weryfikacyjny') }}
                    {{ __('Jeśli nie otrzymałeś wiadomości, ') }}, <a href="{{ route('verification.resend') }}">{{ __('kliknij tutaj aby wysłać ją ponownie') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
