@extends('back-office.layout.admin')
@section('title', 'OperationPaysane')

<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">





@section('component')
    <!-- start page title -->

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Liste OperationPaysane</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Liste</a></li>
                        <li class="breadcrumb-item active">operation paysane</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection

@section('content')



    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h5 class="card-title mb-0">Listes des operations paysane</h5>
                    <div class="col-sm-auto">
                        <div>
                            <a type="button" href="{{ route('operation-paysane.create') }}" class="btn btn-success add-btn"
                                id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>
                                Ajouter</a>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th class="sort" data-sort="customer_name">Titre</th>
                                <th class="sort" data-sort="email">statut_juridique</th>
                                <th class="sort" data-sort="phone">siege</th>
                                <th class="sort" data-sort="date">Nom</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($opaysanes as $opaysane)
                                <tr onclick="window.location='{{ route('operation-paysane.edit', $opaysane->id) }}'"
                                    style="cursor: pointer;">
                                    <td class="customer_name">{{ $opaysane->libelle }}</td>

                                    <td class="customer_name"><span>{{ $opaysane->statut_juridique }}</span>
                                    </td>
                                    <td class="customer_name">{{ $opaysane->siege }}</td>
                                    <td class="customer_name">{{ $opaysane->user?->nom }}
                                        {{ $opaysane->user?->prenom }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


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
