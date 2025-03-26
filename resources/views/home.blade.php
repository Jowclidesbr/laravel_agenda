@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Dashboard') }} - Aplications</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{ route('contatos.index') }}" class="btn btn-primary btn-lg btn-block btn-sm mb-3">App Contato</a>
                        </div>

                        <div class="col-md-2">
                            <a href="{{ route('contatos.index') }}" class="btn btn-primary btn-lg btn-block btn-sm mb-3">APP02</a>
                        </div>

                        <div class="col-md-2    ">
                            <a href="{{ route('contatos.index') }}" class="btn btn-primary btn-lg btn-block btn-sm mb-3">APP03</a>
                        </div>



                    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
