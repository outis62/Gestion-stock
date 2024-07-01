<div>
    {{-- Do your work, then step back. --}}
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        @isset($listRoute['link'])
                            <a href="{{ route($listRoute['link']) }}" title="Retour à la liste des commercialisations"
                                class="btn btn-secondary addMembers-modal">
                                <i class="ri-list-check-2 me-1 align-bottom"></i> {{ $listRoute['name'] }}
                            </a>
                        @endisset
                        @isset($addRoute['link'])
                            <a href="{{ route($addRoute['link']) }}" title="Ajouter une nouvelle commercialisation"
                                class="btn btn-primary addMembers-modal">
                                <i class="ri-add-box-line me-1 align-bottom"></i>
                            </a>
                        @endisset
                        @isset($editRoute['link'])
                            <a href="{{ route($editRoute['link'], $commercialisation) }}"
                                title="Modifier les information de la commercialisation"
                                class="btn btn-primary addMembers-modal">
                                <i class="ri-pencil-line me-1 align-bottom"></i>
                            </a>
                        @endisset
                        <button type="button"
                            class="btn btn-outline-{{ $commercialisation->statut ? 'danger' : 'success' }} waves-effect waves-light"
                            wire:click='setCommerceState'>{{ $commercialisation->statut ? 'Invalider' : 'Valider' }}
                        </button>
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
                                <dt>Quantité:</dt>
                                <dd>
                                    {{ $commercialisation->quantite ? $commercialisation->quantite : '---' }}
                                    {{ $commercialisation->uniteMesure->libelle ? $commercialisation->uniteMesure->libelle : '---' }}
                                </dd>
                                <dt>Prix:</dt>
                                <dd>{{ $commercialisation->prix ? formatMontant($commercialisation->prix) : '---' }}
                                </dd>
                                <dt>Période:</dt>
                                <dd>{{ $commercialisation->date_debut ? formatDate($commercialisation->date_debut) : '---' }}-
                                    {{ $commercialisation->date_fin ? formatDate($commercialisation->date_fin) : '---' }}
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
                        <dt>Collecte :</dt>
                        <dd>
                            {{ $commercialisation->collecte->date_debut ? formatDate($commercialisation->collecte->date_debut) : '---' }}-
                            {{ $commercialisation->collecte->date_fin ? formatDate($commercialisation->collecte->date_fin) : '---' }}
                        </dd>
                        <dt>Unité de mesure:</dt>
                        <dd>
                            {{ $commercialisation->uniteMesure->libelle ? $commercialisation->uniteMesure->libelle : '---' }}
                        </dd>
                        <dt>Statut:</dt>
                        <dd>
                            @if ($commercialisation->statut)
                                <span class="badge badge-outline-success">
                                    <i class=" ri-chat-check-line align-bottom"></i>
                                    Valide
                                </span>
                            @else
                                <span class="badge badge-outline-danger">
                                    <i class="ri-chat-delete-line align-bottom"></i>
                                    Invalide
                                </span>
                            @endif
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
