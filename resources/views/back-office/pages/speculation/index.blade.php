@extends('back-office.layout.admin')
@section('title', 'Speculation')
@section('css')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

@endsection



@section('component')
    <!-- start page title -->

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Liste Speculations</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                        <li class="breadcrumb-item active">Speculation</li>
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
                    <h5 class="card-title mb-0">Listes des Speculations</h5>
                    <div class="col-sm-auto">
                        <div>
                            <a type="button" href="{{ route('speculation.create') }}" class="btn btn-success add-btn"
                                id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>
                                Ajouter</a>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th class="sort" data-sort="customer_name">nom</th>
                                <th class="sort" data-sort="email">variete</th>
                                <th class="sort" data-sort="phone">description</th>
                                <th class="sort" data-sort="date">image</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($speculations as $speculation)
                                <tr onclick="window.location='{{ route('speculation.edit', $speculation->id) }}'"
                                    style="cursor: pointer;">
                                    <td class="customer_name">{{ $speculation->nom }}</td>

                                    <td class="customer_name">{{ $speculation->variete }} </td>

                                    <td class="customer_name">{{ $speculation->description }}</td>
                                    <td class="customer_name"><img src="{{ asset('storage/' . $speculation->image) }}"
                                            style="width: 15%" class="rounded-full" alt=""></td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
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
