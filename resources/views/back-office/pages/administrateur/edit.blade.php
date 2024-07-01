@extends('back-office.layout.admin')
@section('css')
@endsection
@section('component')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between pb-0">
                <h4 class="mb-sm-0">Mise a jour profil {{ $user->nom }}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb ms-3">
                        <li class="breadcrumb-item"><a href="{{ route('admins.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profil
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-body p-4">
                    <div class="tab-content">
                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                            <form method="post" action="{{ route('admins.utilisateurs.update', $user->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="firstnameInput" class="form-label">Nom <span
                                                    style="color: red">*</span></label>
                                            <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                                id="firstnameInput" placeholder="Renseigner votre nom"
                                                value="{{ $user->nom }}" name="nom">
                                        </div>
                                        @error('nom')
                                            <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="lastnameInput" class="form-label">Prénom <span
                                                    style="color: red">*</span></label>
                                            <input type="text" class="form-control @error('prenom') is-invalid @enderror"
                                                id="lastnameInput" placeholder="Renseigner votre prenom"
                                                value="{{ $user->prenom }}" name="prenom">
                                        </div>
                                        @error('prenom')
                                            <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Adresse <span
                                                    style="color: red">*</span></label>
                                            <input type="text"
                                                class="form-control @error('adresse') is-invalid @enderror"
                                                id="phonenumberInput" placeholder="Renseigner votre adresse"
                                                value="{{ $user->adresse }}" name="adresse">
                                        </div>
                                        @error('adresse')
                                            <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailInput"
                                                placeholder="Enter your email" value="{{ $user->email }}" name="email"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-success">Mettre a jour</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
