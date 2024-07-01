<div>
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        <a href="javascript:void();" title="Télécharger un fichier canevas excel"
                            class="btn btn-warning addMembers-modal">
                            <i class="bx bx-download me-1"></i> Télécharegr un canevas
                        </a>
                        @isset($listRoute['link'])
                            <a href="{{ route($listRoute['link']) }}" title="Retour à la liste des collectes"
                                class="btn btn-secondary addMembers-modal">
                                <i class="ri-list-check-2 me-1 align-bottom"></i> {{ $listRoute['name'] }}
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
        </div>
    </div>
    <div class="row">
        @include('partials.flash-message')
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Importer canevas excel</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="importExcel" class="dropzone">
                        <input type="file" wire:model="excel_file" id="excel_file_input" class="hidden"
                            aria-hidden="true" wire:change="$emit('fileSelected')" style="display:none">
                        @if ($excel_file)
                            <div class="dz-message needsclick" style="cursor: pointer">
                                <div class="mb-3">
                                    <img src="{{ asset('assets/images/microsoft_excel.png') }}" alt="">
                                </div>
                                <h4>{{ $excel_file->getClientOriginalName() }}</h4>
                                <button type="button" class="btn btn-outline-warning mt-3" wire:click="resetFile">
                                    Annuler
                                </button>
                            </div>
                        @else
                            <div class="dz-message needsclick"
                                onclick="document.getElementById('excel_file_input').click()" style="cursor: pointer">
                                <div class="mb-3">
                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                </div>
                                <h4>Cliquez pour sélectionner un fichier Excel.</h4>
                            </div>
                        @endif

                        @if ($excel_file)
                            <button type="submit" class="btn btn-secondary mt-3" wire:loading.attr="disabled">
                                <i class="bx bx-collection me-1"></i>Importer
                            </button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
