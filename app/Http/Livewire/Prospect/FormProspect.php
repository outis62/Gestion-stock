<?php

namespace App\Http\Livewire\Prospect;

use App\Mail\ProspectRegisterMail;
use App\Models\Prospection;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class FormProspect extends Component
{
    protected $listeners = ['requestNewUniqueCode' => 'generateNewUniqueCode'];
    public $step = 1;
    public $nom;
    public $prenom;
    public $email;
    public $role = 'prospect';
    public $adresse;
    public $adresse_structure;
    public $statut;
    public $nom_structure;
    public $rccm_ninea;
    public $statut_juridique;
    public $siege;
    public $password;
    public $passwordconfirm;
    public $uniqueCode;
    public $uniqueCodeInput;
    public $user_id;

    public function render()
    {
        return view('livewire.prospect.form-prospect');
    }

    public function nextStep()
    {
        if ($this->step === 1) {
            $this->validateStepOne();
            $this->uniqueCode = Str::random(10);
            $user = User::where('email', $this->email)->first();
            if ($user) {
                $this->user_id = $user->id;
                try {
                    Mail::to($this->email)->send(new ProspectRegisterMail($user, $this->uniqueCode));
                    session()->flash('success', "Un nouveau code de vérification a été envoyé à l'adresse: " . $this->email);
                } catch (\Throwable $th) {
                    session()->flash('warning', "Une erreur s'est produite lors de l'envoi de l'email de vérification à l'adresse: " . $this->email);
                }
                $this->step++;
            } else {
                $user = User::create([
                    'nom' => $this->nom,
                    'prenom' => $this->prenom,
                    'email' => $this->email,
                    'password' => bcrypt($this->password),
                    'role' => $this->role,
                    'statut' => 1,
                ]);
                $this->user_id = $user->id;
                try {
                    Mail::to($user->email)->send(new ProspectRegisterMail($user, $this->uniqueCode));
                    session()->flash('success', "Un code de vérification a été envoyé à l'adresse: " . $user->email);
                } catch (\Throwable $th) {
                    session()->flash('warning', "Une erreur s'est produite lors de l'envoi de l'email de vérification à l'adresse: " . $user->email);
                }
                $this->step++;
            }
        } elseif ($this->step === 2) {
            $this->validateUniqueCode();
            $this->step++;
        } elseif ($this->step === 3) {
            $this->validateAll();
            $this->onSubmitFormProspect();
        }
    }
    public function previousStep()
    {
        $this->step--;
    }

    public function validateStepOne()
    {
        $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ]);
    }

    public function validateUniqueCode()
    {
        $this->validate([
            'uniqueCodeInput' => 'required|in:' . $this->uniqueCode,
        ]);
    }
    public function validateAll()
    {
        $this->validate([
            'nom_structure' => 'required',
            'password' => 'required|min:8',
            'passwordconfirm' => 'required|min:8|same:password|nullable',
            'adresse' => 'nullable',
            'rccm_ninea' => 'nullable',
            'statut_juridique' => 'nullable',
            'adresse_structure' => 'nullable',
            'siege' => 'nullable',
        ]);
    }

    public function onSubmitFormProspect()
    {
        $user = User::find($this->user_id);
        $user->update([
            'password' => bcrypt($this->password),
        ]);

        $prospectionData = [
            'adresse' => $this->adresse,
            'adresse_structure' => $this->adresse_structure,
            'nom_structure' => $this->nom_structure,
            'rccm_ninea' => $this->rccm_ninea,
            'statut_juridique' => $this->statut_juridique,
            'siege' => $this->siege,
            'user_id' => $user->id,
        ];

        Prospection::create($prospectionData);

        try {
            session()->flash('success', "Prospection " . $this->nom_structure . " enregistrée avec succès! Le mot de passe de connexion de l'utilisateur lui a été envoyé par e-mail à l'adresse: " . $user->email);
        } catch (\Throwable $th) {
            session()->flash('warning', "Prospection " . $this->nom_structure . " enregistrée avec succès! Le mot de passe de connexion de l'utilisateur n'a pas pu être envoyé par e-mail à l'adresse: " . $user->email);
        }

        return redirect()->route('login');
    }
    public function generateNewUniqueCode()
    {
        $this->uniqueCode = Str::random(10);
        $user = User::find($this->user_id);
        if ($user) {
            Mail::to($user->email)->send(new ProspectRegisterMail($user, $this->uniqueCode));
            session()->flash('success', "Un nouveau code de vérification a été envoyé à l'adresse: " . $user->email);
        }
    }
}
