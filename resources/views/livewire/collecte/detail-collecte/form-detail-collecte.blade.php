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
                        @isset($showRoute['link'])
                            <a href="{{ route($showRoute['link'], session('collecteId')) }}"
                                title="Retour aux détails de la collecte" class="btn btn-info addMembers-modal">
                                <i class="ri-eye-line me-1 align-bottom"></i> {{ $showRoute['name'] }}
                            </a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="onSubmitForm">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <span class="text-muted mb-2">Informations sur la ligne de collecte</span>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="paysan_id" class="form-label">
                                Paysan
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <select class="form-select @error('paysan_id') is-invalid @enderror" id="paysan_id"
                                wire:model="paysan_id" aria-label="Default select example">
                                <option value="">Choisir le paysan</option>
                                @foreach ($paysans as $paysan)
                                    <option value="{{ $paysan->id }}"
                                        @if (old('paysan_id') == $paysan->id) selected @endif>{{ $paysan->nom }}
                                        {{ $paysan->prenom }}
                                    </option>
                                @endforeach
                            </select>
                            @error('paysan_id')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="champ_id" class="form-label">
                                Champ
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <select class="form-select @error('champ_id') is-invalid @enderror" id="champ_id"
                                wire:model="champ_id" aria-label="Default select example">
                                <option value="">Choisir le champ</option>
                                @foreach ($champs as $champ)
                                    <option value="{{ $champ->id }}"
                                        @if (old('champ_id') == $champ->id) selected @endif>
                                        {{ $champ->localite->libelle }}
                                        ({{ $champ->surface }})
                                    </option>
                                @endforeach
                            </select>
                            @error('champ_id')
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
                            <label for="unite_mesure_id" class="form-label">
                                Unité de mésure
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <select class="form-select @error('unite_mesure_id') is-invalid @enderror"
                                id="unite_mesure_id" wire:model="unite_mesure_id" aria-label="Default select example">
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
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mt-4">
                            <label for="commentaire"
                                class="form-label @error('commentaire') is-invalid @enderror">Commentaire
                            </label>
                            <textarea class="form-control" id="commentaire" wire:model="commentaire" rows="3"
                                placeholder="Renseigner un commentaire"></textarea>
                        </div>
                        @error('commentaire')
                            <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" wire:model="collecte_id">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mt-4">
                            <div class="col-12">
                                <button class="btn btn-{{ $detailCollecte->id ? 'secondary' : 'success' }}"
                                    type="submit">

                                    @if ($detailCollecte->id)
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
