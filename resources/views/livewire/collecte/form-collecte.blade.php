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
                        @isset($showRoute['link'])
                            <a href="{{ route($showRoute['link'], $collecte) }}" title="Retour aux détails de la collecte"
                                class="btn btn-info addMembers-modal">
                                <i class="ri-eye-line me-1 align-bottom"></i> {{ $showRoute['name'] }}
                            </a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="onSubmitFormCollecte">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <span class="text-muted mb-2">Informations sur la collecte</span>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nom" class="form-label">
                                Date de début
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="date_debut" type="date" wire:model="date_debut"
                                class="form-control @error('date_debut') is-invalid @enderror"
                                placeholder="Renseigner la date de début">
                            @error('date_debut')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="prenom" class="form-label">
                                Date de fin
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="date_fin" type="date" wire:model="date_fin"
                                class="form-control @error('date_fin') is-invalid @enderror"
                                placeholder="Renseigner la date de fin">
                            @error('date_fin')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="quantite" class="form-label">Quantité <span
                                    class="text-danger fs-15">*</span></label>
                            <input id="quantite" type="number" wire:model="quantite"
                                class="form-control @error('quantite') is-invalid @enderror"
                                placeholder="Renseigner la quantité">
                            @error('quantite')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="rendement_production" class="form-label">Rendement <span
                                    class="text-danger fs-15">*</span></label>
                            <input id="rendement_production" type="number" wire:model="rendement_production"
                                class="form-control @error('rendement_production') is-invalid @enderror"
                                placeholder="Renseigner le rendement">
                            @error('rendement_production')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="superficie" class="form-label">Superficie <span
                                    class="text-danger fs-15">*</span></label>
                            <input id="rendement_production" type="number" wire:model="superficie"
                                class="form-control @error('superficie') is-invalid @enderror"
                                placeholder="Renseigner la superficie">
                            @error('superficie')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="moyen_stockage" class="form-label">
                                Moyen de stockage
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <select class="form-select @error('moyen_stockage_id') is-invalid @enderror"
                                id="moyen_stockage_id" wire:model="moyen_stockage_id"
                                aria-label="Default select example">
                                <option value="">Choisir le moyen de stockage</option>
                                @foreach ($moyenStockages as $moyenStockage)
                                    <option value="{{ $moyenStockage->id }}"
                                        @if (old('moyen_stockage_id') == $moyenStockage->id) selected @endif>{{ $moyenStockage->libelle }}
                                    </option>
                                @endforeach
                            </select>
                            @error('moyen_stockage_id')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <label for="speculation_id" class="form-label">Spéculation</label>
                        <div class="input-group">
                            <select wire:model="speculation_id"
                                class="form-select @error('speculation_id') is-invalid @enderror">
                                <option value="">Choisir la spéculation</option>
                                @foreach (Auth::user()->operationPaysanes->speculations as $speculation)
                                    <option value="{{ $speculation->id }}"
                                        @if (old('speculation_id') == $speculation->id) selected @endif>{{ $speculation->nom }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- @dd(Auth::user()->operationPaysanes->speculations) --}}
                        </div>
                        @error('speculation_id')
                            <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="unite_mesure_id" class="form-label">
                                Unité de mésure
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <select class="form-select @error('unite_mesure_id') is-invalid @enderror"
                                id="unite_mesure_id" wire:model="unite_mesure_id"
                                aria-label="Default select example">
                                <option value="">Choisir l'unité de mésure</option>
                                @foreach ($uniteMesures as $uniteMesure)
                                    <option value="{{ $uniteMesure->id }}"
                                        @if (old('unite_mesure_id') == $uniteMesure->id) selected @endif>{{ $uniteMesure->libelle }}
                                    </option>
                                @endforeach
                            </select>
                            @error('unite_mesure_id')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input id="operation_paysane_id" type="hidden" wire:model="operation_paysane_id"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mt-4">
                            <label for="qualite" class="form-label @error('qualite') is-invalid @enderror">Qualité
                                <span class="text-danger fs-15">*</span></label>
                            <textarea class="form-control" id="qualite" wire:model="qualite" rows="3"
                                placeholder="Renseigner la qualité"></textarea>
                        </div>
                        @error('qualite')
                            <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mt-4">
                            <div class="col-12">
                                <button class="btn btn-{{ $collecte->id ? 'secondary' : 'success' }}" type="submit">

                                    @if ($collecte->id)
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
