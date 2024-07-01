@extends('back-office.layout.admin')
@section('title', 'Espace administrateur')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@section('component')
    <!-- start page title -->
    <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">
                            @if ($idoperationPaysane != null)
                                Formulaire de modification
                            @else
                                Formulaire de creation
                            @endif
                        </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Formulaire</a></li>
                                <li class="breadcrumb-item active">Formulaire</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
@endsection
@section('content')


            <div class="row">
                <div class="col-xl-12">
                    <div class="card">

                        <div class="card-body">
                            @if ($idoperationPaysane != null)
                                <form action="{{ route('operation-paysane.update', $operationPaysane->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                @else
                                    <form action="{{ route('operation-paysane.store') }}" method="POST">
                                        @csrf
                            @endif
                            <div class="text-center pt-3 pb-4 mb-1">
                                <h5>{{ isset($idoperationPaysane) ? 'Formulaire de  modification d\'un op' : 'Formulaire de creation d\'un op' }}
                                </h5>

                            </div>


                            <div class="tab-content">
                                <div>
                                    <div>
                                        <div class="mb-4">
                                            <div>

                                                <p class="" style="color: red">*<small>Tous les champs sont
                                                        obligatoires.</small>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Libelle">Libelle <span class="red-text"
                                                            style="color: red">*</span></label>
                                                    <input type="text" class="form-control" id="Libelle" name="libelle"
                                                        value="{{ isset($operationPaysane) ? $operationPaysane->libelle : '' }}"
                                                        placeholder="Libelle" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Nom">
                                                        rccm_ninea <span class="red-text"
                                                            style="color: red">*</span></label>
                                                    <input type="text" class="form-control" id="Nom"
                                                        name="rccm_ninea"
                                                        value="{{ isset($operationPaysane) ? $operationPaysane->rccm_ninea : '' }} "
                                                        placeholder="Nom" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="statut_juridique">statut_juridique <span
                                                            class="red-text" style="color: red">*</span></label>
                                                    <input type="text" class="form-control" id="statut_juridique"
                                                        name="statut_juridique"
                                                        value="{{ isset($operationPaysane) ? $operationPaysane->statut_juridique : '' }} "
                                                        placeholder="statut_juridique" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="siege">
                                                        siege <span class="red-text" style="color: red">*</span></label>
                                                    <input type="text" class="form-control" id="siege" name="siege"
                                                        value="{{ isset($operationPaysane) ? $operationPaysane->siege : '' }} "
                                                        placeholder="siege" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Nom">
                                                        numero_recipisse <span class="red-text"
                                                            style="color: red">*</span></label>
                                                    <input type="text" class="form-control" id="numero_recipisse"
                                                        name="numero_recipisse"
                                                        value="{{ isset($operationPaysane) ? $operationPaysane->numero_recipisse : '' }} "
                                                        placeholder="numero_recipisse" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Nom">
                                                        Selectionné un niveau <span class="red-text"
                                                            style="color: red">*</span></label>
                                                    <select class="form-select " name="niveau" id="niveau" required>
                                                        <option value="">Selectionné un niveau</option>
                                                        <option value="1"
                                                            {{ isset($operationPaysane) && $operationPaysane->niveau == 1 ? 'selected' : '' }}>
                                                            1</option>
                                                        <option value="2"
                                                            {{ isset($operationPaysane) && $operationPaysane->niveau == 2 ? 'selected' : '' }}>
                                                            2</option>
                                                        <option value="3"
                                                            {{ isset($operationPaysane) && $operationPaysane->niveau == 3 ? 'selected' : '' }}>
                                                            3</option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                    <div class="card">

                        <div class="card-body form-steps">

                            <div class="text-center pt-3 pb-4 mb-1">
                                <h5>{{ isset($user) ? 'Formulaire de  modification d\'un utilisateur' : 'Formulaire de creation d\'un utilisateur' }}
                                </h5>
                            </div>


                            <div class="tab-content">
                                <div>
                                    <div>
                                        <div class="mb-4">
                                            <div>

                                                <p class="" style="color: red">*<small>Tous les champs sont
                                                        obligatoires.</small>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Nom">Nom <span class="red-text"
                                                            style="color: red">*</span></label>
                                                    <input type="text" class="form-control" id="Nom"
                                                        name="nom" value="{{ isset($user) ? $user->nom : '' }}"
                                                        placeholder="Nom d'utilisateur" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Prenom">Prenom <span
                                                            class="red-text" style="color: red">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="Prenom"
                                                        name="prenom" value="{{ isset($user) ? $user->prenom : '' }}"
                                                        placeholder="Prenom d'utilisateur" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Email">Adreesse Email <span
                                                            class="red-text" style="color: red">*</span></label>
                                                    <input type="text" class="form-control" id="Email"
                                                        name="email" value="{{ isset($user) ? $user->email : '' }}"
                                                        placeholder="Email d'utilisateur" required>
                                                </div>
                                            </div>
                                            <input type="hidden" name="role" value="handler-op">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="speculation" class="form-label">Selectionner un ou
                                                        pluisieurs
                                                        speculations <span class="red-text"
                                                            style="color: red">*</span></label>
                                                    <select class="js-example-basic-multiple" name="speculation[]"
                                                        multiple="multiple" style="background-color: #3d78e3 !important"
                                                        id="speculation" required>
                                                        <option value="">Sélectionner un ou pluisieurs speculations
                                                        </option>
                                                        @foreach ($speculations as $speculation)
                                                            {{-- si l'id de la speculation lié à l'op a la meme id que la speculation actuel il le selectionne --}}
                                                            <option value="{{ $speculation->id }}"
                                                                {{ $operationPaysane->speculations->contains('id', $speculation->id) ? 'selected' : '' }}>
                                                                {{ $speculation->nom }}
                                                            </option>
                                                        @endforeach
                                                    </select>


                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- end card body -->

                            <!-- end tab content -->
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <a href="{{ route('operation-paysane.index') }}" type="button" class="btn btn-primary">
                                    <i
                                        class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i><span>Annuler</span></a>

                                @if ($idoperationPaysane != null)
                                    <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                        data-nexttab="pills-success-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Modifier</button>
                                @else
                                    <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                        data-nexttab="pills-success-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Enregistrer</button>
                                @endif
                            </div>
                            </form>


                            <!-- end card -->
                        </div>
                    </div>
                </div>
                <!-- end col -->


                <!-- end col -->
            </div><!-- end row -->


            <!-- end row -->
      

    <!-- form wizard init -->
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('assets/js/pages/select2.init.js') }}"></script>


@endsection
