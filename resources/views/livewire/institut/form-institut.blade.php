<div>
    {{-- The whole world belongs to you. --}}
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-4">
                    <span class="text-muted mb-3">
                        Les Champs avec <span class="text-danger fs-15">*</span>
                        sont obligatoires
                    </span>
                </div>
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        @isset($listRoute['link'])
                            {{-- @dd($listRoute['name']) --}}
                            <a href="{{ route($listRoute['link']) }}" title="Retour à la liste des comptes d'accès"
                                class="btn btn-secondary addMembers-modal">
                                <i class="ri-list-check-2 me-1 align-bottom"></i> {{ $listRoute['name'] }}
                            </a>
                        @endisset
                        @isset($addRoute['link'])
                            <a href="{{ route($addRoute['link']) }}" title="Ajouter un nouveau compte"
                                class="btn btn-success addMembers-modal">
                                <i class="ri-add-box-line me-1 align-bottom"></i> {{ $addRoute['name'] }}
                            </a>
                        @endisset
                        @isset($showRoute['link'])
                            <a href="{{ route($showRoute['link'], $user) }}" title="Retour aux détails du compte"
                                class="btn btn-info addMembers-modal">
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
                    <span class="text-muted mb-2">Information d'une microfinance</span>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="intitule" class="form-label">
                                Nom de l'intitule
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="intitule" type="text" wire:model="intitule"
                                class="form-control @error('intitule') is-invalid @enderror"
                                placeholder="Renseigner le nom de l'intitule">
                            @error('intitule')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="generalite" class="form-label">
                                Generalite
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="generalite" type="text" wire:model="generalite"
                                class="form-control @error('generalite') is-invalid @enderror"
                                placeholder="Renseigner la generalite">
                            @error('generalite')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="sigle" class="form-label">
                                Sigle
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="sigle" type="text" wire:model="sigle"
                                class="form-control @error('sigle') is-invalid @enderror"
                                placeholder="Renseigner le sigle">
                            @error('sigle')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="adresse" class="form-label">
                               Adresse
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="adresse" type="text" wire:model="adresse"
                                class="form-control @error('adresse') is-invalid @enderror"
                                placeholder="Renseigner l'adresse">
                            @error('adresse')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mt-4">
                            <div class="col-12">
                                <button class="btn btn-{{ $institutFinancementPartenaire->id ? 'secondary' : 'success' }}" type="submit">
                                    @if ($institutFinancementPartenaire->id)
                                        Mettre à jour
                                    @else
                                        Enregistrer
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-body">
                <div class="row">
                    <span class="text-muted mb-2">Identifiant d'accès à l'application</span>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email" class="form-label">
                                Adresse mail
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="email" type="email" @disabled($user->email_verified_at ? true : false) wire:model="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Renseigner l'adresse mail">
                            @error('email')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="role" class="form-label">
                                Rôle
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <select class="form-select @error('role') is-invalid @enderror" id="role"
                                wire:model="role" aria-label="Default select example">
                                <option value="">Choisir le rôle</option>
                                @foreach ($roles as $_role)
                                    <option value="{{ $_role }}" @selected(old('role') == $role)>
                                        {{ $_role }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mt-4">
                            <div class="col-12">
                                <button class="btn btn-{{ $user->id ? 'secondary' : 'success' }}" type="submit">
                                    @if ($user->id)
                                        Mettre à jour
                                    @else
                                        Enregistrer
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </form>
</div>
