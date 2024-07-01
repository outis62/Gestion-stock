@extends('back-office.layout.admin')
@section('title', 'OperationPaysane')
@section('css')

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <style>
        .dl dt {
            float: left;
            width: 45%;
            padding: 0 !important;
            overflow: hidden;
            clear: left;
            text-align: right;
            text-overflow: ellipsis;
            white-space: nowrap;
            /* font-size: 13px; */
        }

        .dl dd {
            margin-left: 50% !important;
            /* font-size: 13px; */
        }

        .dl dd {
            margin-left: 50% !important;
            /* font-size: 13px; */
        }
    </style>

@endsection
@section('component')
    <!-- start page title -->

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Details operation paysane</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Details</a></li>
                        <li class="breadcrumb-item active">details op</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection


@section('content')

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                {{-- <img class="card-img-top img-fluid" src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}"
                            alt="Card image cap"> --}}
                {{-- <img class="card-img-top img-fluid" src="{{asset('storage/'.$categorie->image)}}" alt=""> --}}

                <div class="card-body">
                    <dl class="dl">
                        <dt>Nom :</dt>
                        <dl>{{ $operationPaysane->libelle }}</dl>
                        <dt>Niveau :</dt>
                        <dl>{{ $operationPaysane->niveau }}</dl>
                        <dt>Date de creation :</dt>
                        <dl>{{ $operationPaysane->date_creation }}</dl>
                        <dt>Siege :</dt>
                        <dl>{{ $operationPaysane->siege }}</dl>
                        <dt>Statu juridique :</dt>
                        <dl>{{ $operationPaysane->statut_juridique }}</dl>
                        <dt>Numero recipisse :</dt>
                        <dl>{{ $operationPaysane->numero_recipisse }}</dl>

                    </dl>
                </div>
                <div class="card-footer">
                    <a href="{{ route('operation-paysane.index') }}" type="button" class="btn btn-primary"> <i
                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i><span>Retour</span></a>
                    <a class="btn btn btn-success"
                        @if ($operationPaysane->user?->email_verified_at != null) style="pointer-events:none" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Utilisateur deja connecté impossible de le modifier" @endif
                        data-bs-target="#showModal" href="{{ route('operation-paysane.show', $operationPaysane->id) }}">
                        Modifier </a>

                    <button class="btn btn-danger"
                        @if ($operationPaysane->user?->email_verified_at != null) style="pointer-events:none"  data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Utilisateur deja connecté impossible de le modifier" @endif
                        onClick="deleteMultiple()" data-bs-toggle="modal"
                        data-bs-target="#deleteRecordModal">Supprimer</button>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Listes des utilisateurs lié à un OP</h5>
                </div>
                <div class="card-body">
                    <table id="buttons-datatables" class="display table table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>

                                <th class="" data-sort="Nom">Nom</th>
                                <th class="" data-sort="Ville">Prenom</th>
                                <th class="" data-sort="Email">Email</th>

                            </tr>
                        </thead>
                        <tbody class="list form-check-all">
                            @foreach ($users as $user)
                                <tr>

                                    <td class="Nom">{{ $user->nom }}</td>
                                    <td class="Prenom">{{ $user->prenom }}</td>
                                    <td class="Email"> {{ $user->email }}</td>


                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>

    <!-- container-fluid -->

    <!-- Modal -->
    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Etes vous sure?</h4>
                            <p class="text-muted mx-4 mb-0">Etes vous sure de vouloir supprimer
                                {{ $operationPaysane->libelle }} ?</p>
                        </div>
                    </div>
                    <form action="{{ route('operation-paysane.destroy', $operationPaysane->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn w-sm btn-danger " id="delete-record">Supprimer
                                !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end modal -->

@section('script')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>



@endsection

@endsection
