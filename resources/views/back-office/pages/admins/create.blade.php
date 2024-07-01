@extends('back-office.layout.livewire')
@section('title', 'Espace administrateur')
@section('component')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Ajouter un nouvel administrateur</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admins.dashboard')}}"><i class="ri-home-line"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('admins.users.index')}}">Administrateurs</a></li>
                    <li class="breadcrumb-item active">Nouvel</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('livewire-component')

    <div class="container-fluid">
        @livewire('user.form-user',
        [
            'user' => $user,
            'listRoute' => ['link' => 'admins.users.index', 'name' => 'Tous les comptes'],
        ])
    </div>

@endsection
