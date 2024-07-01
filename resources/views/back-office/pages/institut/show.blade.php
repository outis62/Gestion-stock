@extends('back-office.layout.livewire')
@section('title', 'Espace administrateur')
@section('component')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ $institutFinancementPartenaire->intitule }}
                    {{ $institutFinancementPartenaire->sigle }}</h4>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admins.dashboard') }}"><i class="ri-home-line"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('admins.users.index') }}">Administrateurs</a></li>
                        <li class="breadcrumb-item active">Détail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('livewire-component')

    <div class="container-fluid">
        @livewire('institut.show', [
            'institutFinancementPartenaire' => $institutFinancementPartenaire,
            'listRoute' => ['link' => 'instituts.index', 'name' => 'Tous les instituts'],
            'addRoute' => ['link' => 'instituts.create', 'name' => 'Ajouter une institut'],
            'editRoute' => ['link' => 'instituts.edit', 'name' => 'Modifier une instituts'],
            'viewRoute' => ['link' => 'instituts.show', 'name' => 'Détail'],
        ])
    </div>

@endsection
