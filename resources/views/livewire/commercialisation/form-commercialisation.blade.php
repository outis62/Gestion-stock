<div>
    {{-- The whole world belongs to you. --}}
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-4">
                    <span class="text-muted mb-3">
                        Les champs avec <span class="text-danger fs-15">*</span>
                        sont obligatoires
                    </span>
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
                                class="btn btn-success addMembers-modal">
                                <i class="ri-add-box-line me-1 align-bottom"></i> {{ $addRoute['name'] }}
                            </a>
                        @endisset
                        @isset($showRoute['link'])
                            <a href="{{ route($showRoute['link'], $commercialisation) }}"
                                title="Retour aux détails de la commercialisation" class="btn btn-info addMembers-modal">
                                <i class="ri-eye-line me-1 align-bottom"></i> {{ $showRoute['name'] }}
                            </a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="onSubmitFormCommerce">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <span class="text-muted mb-2">Informations sur la commercialisation</span>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nom" class="form-label">
                                Quantité
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="quantite" type="number" wire:model="quantite"
                                class="form-control @error('quantite') is-invalid @enderror"
                                placeholder="Renseigner la quantité">
                            @error('quantite')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="prix" class="form-label">
                                Prix
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="prix" type="number" wire:model="prix"
                                class="form-control @error('prix') is-invalid @enderror"
                                placeholder="Renseigner le prix">
                            @error('prix')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="moyen_stockage" class="form-label">
                                Unité de mesure
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <select class="form-select @error('unite_mesure_id') is-invalid @enderror"
                                id="unite_mesure_id" wire:model="unite_mesure_id" aria-label="Default select example">
                                <option value="">Choisir l'unité de mesure</option>
                                @foreach ($uniteMesures as $uniteMesure)
                                    <option value="{{ $uniteMesure->id }}"
                                        @if (old('unite_mesure_id') == $uniteMesure->id) selected @endif>
                                        {{ $uniteMesure->libelle }}
                                    </option>
                                @endforeach
                            </select>
                            @error('unite_mesure_id')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="moyen_stockage" class="form-label">
                                Collecte
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <select class="form-select @error('collecte_id') is-invalid @enderror" id="collecte_id"
                                wire:model="collecte_id" aria-label="Default select example">
                                <option value="">Choisir la collecte</option>
                                @foreach ($collectes as $collecte)
                                    <option value="{{ $collecte->id }}"
                                        @if (old('collecte_id') == $collecte->id) selected @endif>
                                        {{ $collecte->speculation->nom }}-{{ $collecte->speculation->variete }}
                                        ({{ formatDate($collecte->date_debut) }}-{{ formatDate($collecte->date_fin) }})
                                    </option>
                                @endforeach
                            </select>
                            @error('collecte_id')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="date_debut" class="form-label">
                                Date début
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="date_fin" type="date" wire:model="date_debut"
                                class="form-control @error('date_debut') is-invalid @enderror"
                                placeholder="Renseigner la date début" min="{{ date('Y-m-d') }}">
                            @error('date_debut')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="date_debut" class="form-label">
                                Date fin
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="date_fin" type="date" wire:model="date_fin"
                                class="form-control @error('date_fin') is-invalid @enderror"
                                placeholder="Renseigner la date fin" min="{{ date('Y-m-d') }}">
                            @error('date_fin')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mt-4">
                            <div class="col-12">
                                <button class="btn btn-{{ $commercialisation->id ? 'secondary' : 'success' }}"
                                    type="submit">

                                    @if ($commercialisation->id)
                                        <i class="bx bx-upload me-1"></i>
                                        Mettre à jour
                                    @else
                                        <i class="bx bx-save me-1"></i>
                                        Enregistrer
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
