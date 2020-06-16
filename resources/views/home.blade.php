@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hogar Madre Emilia</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Sesion activa de {{$user->name}}
                </div>
            </div>
            <a href="http://127.0.0.1:8000/NNA">Entrar al sistema </a>
        </div>
    </div>
</div>
@endsection
