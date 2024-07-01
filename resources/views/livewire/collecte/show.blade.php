<div>
    {{-- Do your work, then step back. --}}
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        <a href="#ligneCollecte" title="Voir la liste des lignes de collectes"
                            class="btn btn-primary addMembers-modal">
                            <i class="ri-stack-line align-bottom"></i>
                        </a>
                        @isset($detailRoute['link'])
                            <a href="{{ route($detailRoute['link'], $collecte) }}"
                                title="Ajouter une nouvelle ligne de collecte" class="btn btn-primary addMembers-modal">
                                <i class="ri-add-box-line align-bottom"></i>
                            </a>
                        @endisset
                        @isset($listRoute['link'])
                            <a href="{{ route($listRoute['link']) }}" title="Retour à la liste des collectes"
                                class="btn btn-primary addMembers-modal">
                                <i class="ri-list-check-2 me-1 align-bottom"></i> {{ $listRoute['name'] }}
                            </a>
                        @endisset
                        @isset($editRoute['link'])
                            <a href="{{ route($editRoute['link'], $collecte) }}"
                                title="Modifier les information de la collecte" class="btn btn-primary addMembers-modal">
                                <i class="ri-pencil-line align-bottom"></i>
                            </a>
                        @endisset
                        <button type="button" class="btn btn-danger waves-effect waves-light"
                            wire:click="confirmDelete('{{ $collecte->id }}')" title="Supprimer la collecte"><i
                                class="bx bx-trash "></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="avatar-lg">
                                <img src="{{ asset('storage/images' . $collecte->speculation->image) }}"
                                    alt="speculation-img" class="img-thumbnail rounded-circle" />
                            </div>
                        </div>
                        <div class="col-12">
                            <dl class="mt-3 dl">
                                <dt>Date debut:</dt>
                                <dd>{{ $collecte->date_debut ? formatDate($collecte->date_debut) : '---' }}</dd>
                                <dt>date fin:</dt>
                                <dd>{{ $collecte->date_fin ? formatDate($collecte->date_fin) : '---' }}</dd>
                                <dt>Quantite:</dt>
                                <dd>{{ $collecte->quantite ? formatMontant($collecte->quantite) : '---' }}
                                    Kilogramme
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <dl class="mt-1 dl">
                        <dt>Rendement:</dt>
                        <dd>{{ $collecte->rendement_production ? $collecte->rendement_production : '---' }}
                            t/ha
                        </dd>
                        <dt>Qualite:</dt>
                        <dd>{{ $collecte->qualite ? $collecte->qualite : '---' }}
                        </dd>
                        <dt>Superficie:</dt>
                        <dd>{{ $collecte->superficie ? $collecte->superficie : '---' }} ha</dd>
                        <dt>Speculation :</dt>
                        <dd>
                            {{ $collecte->speculation->nom ? $collecte->speculation->nom : '---' }}
                        </dd>
                        <dt>Moyen de stockage :</dt>
                        <dd>
                            {{ $collecte->moyenStockage->libelle ? $collecte->moyenStockage->libelle : '---' }}
                        </dd>
                        <dt>Unité de mesure :</dt>
                        <dd>Kilogramme</dd>
                        <dt>Cooperative paysane:</dt>
                        <dd>
                            {{ $collecte->operationPaysanes->libelle ? $collecte->operationPaysanes->libelle : '---' }}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12" id="ligneCollecte">
                    @livewire('collecte.detail-collecte.detail-collecte-table', ['viewRoute' => $viewRoute])
                </div>
            </div>
        </div>
    </div>
</div>
