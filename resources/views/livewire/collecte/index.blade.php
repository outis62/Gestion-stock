<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        @isset($importExcel['link'])
                            <a href="{{ route($importExcel['link']) }}" title="Importer un fichier excel"
                                class="btn btn-secondary addMembers-modal">
                                <i class="bx bx-receipt me-1 align-center"></i> {{ $importExcel['name'] }}
                            </a>
                        @endisset
                        @isset($addRoute['link'])
                            <a href="{{ route($addRoute['link']) }}" title="Ajouter une nouvelle collecte"
                                class="btn btn-success addMembers-modal">
                                <i class="ri-add-box-line me-1 align-bottom"></i> {{ $addRoute['name'] }}
                            </a>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @livewire('collecte.collecte-table', ['viewRoute' => $viewRoute])
                </div>
            </div>
        </div>
    </div>
</div>
