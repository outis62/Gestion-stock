@extends('front-office.layout.livewire')
@section('title', 'Espace administrateur')
@section('component')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Modifier un profil secretaire</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('customersDashboard') }}"><i
                                    class="ri-home-line"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('secretaire.users.index') }}">Secretaire</a>
                        </li>
                        <li class="breadcrumb-item active">Nouvelle</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('livewire-component')
    <div class="container-fluid">
        @livewire('user.form-user', [
            'user' => $user,
            'listRoute' => ['link' => 'secretaire.users.index', 'name' => 'Tous les comptes'],
            'addRoute' => ['link' => 'secretaire.users.create', 'name' => 'Ajouter un compte'],
            'showRoute' => ['link' => 'secretaire.users.show', 'name' => 'Revenir aux détails'],
        ])
    </div>

@endsection
