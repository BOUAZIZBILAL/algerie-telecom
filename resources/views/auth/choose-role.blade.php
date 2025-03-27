@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h2>Avant de vous connecter, sélectionnez votre rôle</h2>
    <p class="mb-4">Êtes-vous Admin ou Employé IT ?</p>

    <div class="row justify-content-center">
        <!-- Admin Card -->
        <div class="col-md-3 m-2">
            <div class="card p-3 shadow" style="cursor: pointer;"
                 onclick="window.location='{{ route('login.admin') }}'">
                <h4>Admin</h4>
            </div>
        </div>

        <!-- Employee Card -->
        <div class="col-md-3 m-2">
            <div class="card p-3 shadow" style="cursor: pointer;"
                 onclick="window.location='{{ route('login.employee') }}'">
                <h4>Employé IT</h4>
            </div>
        </div>
    </div>
</div>
@endsection