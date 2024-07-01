@extends('back-office.layout.admin')
@section('title', 'Espace administrateur')
@section('component')
    <!-- start page title -->
    
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">
                            @if ($idspeculation != null)
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
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                {{ isset($speculation) ? $speculation->nom : 'Formulaire de creation' }} </h4>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            @if ($idspeculation != null)
                                <form action="{{ route('speculation.update', $speculation->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                @else
                                    <form action="{{ route('speculation.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                            @endif
                            <div class="text-center pt-3 pb-4 mb-1">
                                <h5>{{ isset($idspeculation) ? ' Formulaire modification d\'une speculation' : 'Formulaire creation d\'une speculation' }}
                                </h5>
                            </div>


                            <div class="tab-content">
                                <div>
                                    <div>
                                        <div class="mb-4">
                                            <div>

                                                <p class="" style="color: red">Veuillez rensiegner tous les champs
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="Nom">Nom</label>
                                                    <input type="text" class="form-control" id="nom" name="nom"
                                                        value="{{ isset($speculation) ? $speculation->nom : '' }}"
                                                        placeholder="Nom" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="variete">
                                                        variete</label>
                                                    <input type="text" class="form-control" id="variete" name="variete"
                                                        value="{{ isset($speculation) ? $speculation->variete : '' }} "
                                                        placeholder="variete" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="statut_juridique">Description</label>

                                                    <input type="text" class="form-control" id="description"
                                                        name="description"
                                                        value="{{ isset($speculation) ? $speculation->description : '' }} "
                                                        placeholder="description" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="image">
                                                        @if ($idspeculation)
                                                            Ancienne image: <img
                                                                src="{{ Storage::url($speculation->image) }}"
                                                                class="rounded-full" style="width: 4%" alt="">
                                                        @else
                                                            Image
                                                        @endif


                                                    </label>
                                                    <input type="file" class="form-control" id="image" name="image"
                                                        value="{{ isset($speculation) ? $speculation->image : '' }} "
                                                        placeholder="image">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between gap-3 mt-4">
                                        <div>
                                            <a href="{{ route('speculation.index') }}" type="button"
                                                class="btn btn-primary"> <i
                                                    class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i><span>Annuler</span></a>

                                        </div>
                                        <div>

                                            @if ($idspeculation != null)
                                                <button type="submit"
                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                    data-nexttab="pills-success-tab"><i
                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Modifier</button>
                                            @else
                                                <button type="submit"
                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                    data-nexttab="pills-success-tab"><i
                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Enregistrer</button>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <!-- end tab pane -->


                                <!-- end tab pane -->

                                {{-- <div class="tab-pane fade" id="pills-success" role="tabpanel"
                                    aria-labelledby="pills-success-tab">
                                    <div>
                                        <div class="text-center">

                                            <div class="mb-4">
                                                <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop"
                                                    colors="primary:#0ab39c,secondary:#405189"
                                                    style="width:120px;height:120px"></lord-icon>
                                            </div>
                                            <h5>Well Done !</h5>
                                            <p class="text-muted">You have Successfully Signed Up</p>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->


                <!-- end col -->
            </div><!-- end row -->


            <!-- end row -->
       
@section('script')
    <!-- form wizard init -->
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>

@endsection
@endsection
