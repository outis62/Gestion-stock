@extends('back-office.layout.livewire')
@section('title', 'Espace administrateur')
@section('component')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Ajouter une nouvelle institut</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admins.dashboard') }}"><i class="ri-home-line"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('admins.users.index') }}">Administrateurs</a></li>
                        <li class="breadcrumb-item active">Nouvel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('livewire-component')

    <div class="container-fluid">
        @livewire('institut.form-institut', [
            'institutFinancementPartenaire' => $institutFinancementPartenaire,
            'listRoute' => ['link' => 'instituts.index', 'name' => 'Toutes les insituts'],
        ])
    </div>

@endsection
