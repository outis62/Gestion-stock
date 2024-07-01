<div>
    <form wire:submit.prevent="onSubmitFormProspect">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                @if ($step === 1)
                    <div class="card mt-4">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Bienvenue !</h5>
                                <p class="text-muted">Création de compte d'accès à la plateforme <strong>ENABEL</strong>
                                </p>
                            </div>
                            <div class="p-2 mt-4">
                                <div class="mb-3">
                                    <label for="nom" class="form-label">
                                        Nom de famille
                                        <span class="text-danger fs-15">*</span>
                                    </label>
                                    <input id="nom" type="text" wire:model="nom"
                                        class="form-control @error('nom') is-invalid @enderror"
                                        placeholder="Renseigner le nom de famille">
                                    @error('nom')
                                        <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="prenom" class="form-label">
                                        Prénom(s)
                                        <span class="text-danger fs-15">*</span>
                                    </label>
                                    <input id="prenom" type="text" wire:model="prenom"
                                        class="form-control @error('prenom') is-invalid @enderror"
                                        placeholder="Renseigner le(s) prénom(s)">
                                    @error('prenom')
                                        <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">
                                        Adresse mail
                                        <span class="text-danger fs-15">*</span>
                                    </label>
                                    <input id="email" type="email" wire:model="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Renseigner l'adresse mail">
                                    @error('email')
                                        <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($step === 2)
                    <div class="card mt-4">
                        @include('_partials.notifications')
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Confirmation d'email</h5>
                                <p class="text-muted">Veuillez entrer le code de validation que nous vous avons envoyé
                                    par email.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <div class="mb-3">
                                    <label for="uniqueCodeInput" class="form-label">
                                        Code de validation
                                        <span class="text-danger fs-15">*</span>
                                    </label>
                                    <input id="uniqueCodeInput" type="text" wire:model="uniqueCodeInput"
                                        class="form-control @error('uniqueCodeInput') is-invalid @enderror"
                                        placeholder="Entrez le code de validation">
                                    @error('uniqueCodeInput')
                                        <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <p>Si vous n'avez pas reçu le code, vous pouvez <a href="#"
                                            wire:click.prevent="generateNewUniqueCode"
                                            class="text-primary fw-bold">renvoyer le
                                            code</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($step === 3)
                    <div class="card mt-4">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Terminer l'inscription</h5>
                                <p class="text-muted">Remplissez les informations restantes pour terminer votre
                                    inscription.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <div class="mb-3">
                                    <label for="nom_structure" class="form-label">
                                        Nom de la structure
                                        <span class="text-danger fs-15">*</span>
                                    </label>
                                    <input id="nom_structure" type="text" wire:model="nom_structure"
                                        class="form-control @error('nom_structure') is-invalid @enderror"
                                        placeholder="Renseigner le nom de la structure">
                                    @error('nom_structure')
                                        <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">
                                        Mot de passe
                                        <span class="text-danger fs-15">*</span>
                                    </label>
                                    <input id="password" type="password" wire:model="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Renseigner le mot de passe">
                                    @error('password')
                                        <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="passwordconfirm" class="form-label">
                                        Confirmer mot de passe
                                        <span class="text-danger fs-15">*</span>
                                    </label>
                                    <input id="passwordconfirm" type="password" wire:model="passwordconfirm"
                                        class="form-control @error('passwordconfirm') is-invalid @enderror"
                                        placeholder="Confirmer le mot de passe">
                                    @error('passwordconfirm')
                                        <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="mt-4">
                    @if ($step === 1)
                        <button class="btn btn-success w-100" wire:click="nextStep" type="button"
                            id="nextButton">Valider</button>
                    @elseif($step === 2)
                        <button class="btn btn-success w-100" wire:click="nextStep" type="button"
                            id="nextButton">Valider le code</button>
                    @elseif($step === 3)
                        <button class="btn btn-success w-100" type="submit" id="submitButton">Terminer
                            l'inscription</button>
                    @endif
                </div>
                <div class="mt-4 text-center">
                    <p class="mb-0">Vous avez un compte ? <a href="{{ route('login') }}"
                            class="fw-semibold text-primary text-decoration-underline"> connectez-vous </a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</div>
