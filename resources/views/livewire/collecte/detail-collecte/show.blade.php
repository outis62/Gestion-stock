<div>
    {{-- Do your work, then step back. --}}
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        @isset($detailRoute['link'])
                            <a href="{{ route($detailRoute['link']) }}" title="Ajouter les détails de la collecte"
                                class="btn btn-primary addMembers-modal">
                                <i class="ri-eye-line me-2 align-bottom"></i> {{ $detailRoute['name'] }}
                            </a>
                        @endisset
                        @isset($detaillistRoute['link'])
                            <a href="{{ route($detaillistRoute['link']) }}" title="Retour à la liste des détails collectes"
                                class="btn btn-secondary addMembers-modal">
                                <i class="ri-list-check-2 me-1 align-bottom"></i> {{ $detaillistRoute['name'] }}
                            </a>
                        @endisset
                        @isset($addRoute['link'])
                            <a href="{{ route($addRoute['link']) }}" title="Ajouter un nouvel détail collecte"
                                class="btn btn-success addMembers-modal">
                                <i class="ri-add-box-line me-1 align-bottom"></i> {{ $addRoute['name'] }}
                            </a>
                        @endisset
                        @isset($editRoute['link'])
                            <a href="{{ route($editRoute['link'], $detailCollecte) }}"
                                title="Modifier les information du détail collecte"
                                class="btn btn-warning addMembers-modal">
                                <i class="ri-pencil-line me-1 align-bottom"></i> {{ $editRoute['name'] }}
                            </a>
                        @endisset
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
                        <div class="col-12">
                            <dl class="mt-3 dl">
                                <dt>Paysan:</dt>
                                <dd>{{ $detailCollecte->paysan->nom ? $detailCollecte->paysan->nom : '---' }}</dd>
                                <dt>Collecte:</dt>
                                <dd>{{ $detailCollecte->collecte->date_debut ? $detailCollecte->collecte->date_debut : '---' }}
                                </dd>
                                <dt>Champ:</dt>
                                <dd>{{ $detailCollecte->champ->superficie ? $detailCollecte->champ->superficie : '---' }}
                                </dd>
                                <dt>Quantité:</dt>
                                <dd>{{ $detailCollecte->quantite ? $detailCollecte->quantite : '---' }}
                                    {{ $detailCollecte->uniteMesure->libelle ? $detailCollecte->uniteMesure->libelle : '---' }}
                                </dd>
                                <dt>Unité mesure:</dt>
                                <dd>{{ $detailCollecte->uniteMesure->libelle ? $detailCollecte->uniteMesure->libelle : '---' }}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
