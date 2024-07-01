<?php

namespace App\Http\Livewire\Institut;
use App\Models\InstitutFinancementPartenaire;
use Livewire\Component;

class FormInstitut extends Component
{
    public $listRoute;
    public $addRoute;
    public $showRoute;
    public $institutFinancementPartenaire;
    
    public $intitule;
    public $generalite;
    public $sigle;
    public $adresse;
    
    public function render()
    {
        return view('livewire.institut.form-institut');
    }

    public function onSubmitForm()
    {
       

        $validatedData = $this->validate([
            'intitule' => 'required',
            'generalite' => 'required',
            'sigle' => 'required',
            'adresse' => 'required',
            
        ]);
        if ($this->institutFinancementPartenaire->id) {
            $this->updatedForm($validatedData);
        } else {
            $this->storedForm($validatedData);
        }
      
        
    }
    public function storedForm ($dataInput) {
        $dataInput= [
            'intitule'=> $this->intitule,
            'generalite'=> $this->generalite,
            'sigle'=> $this->sigle,
            'adresse'=> $this->adresse,
        ];
        InstitutFinancementPartenaire::create($dataInput);
        return redirect()->route($this->listRoute['link'])->with('success', "créé avec succes");

            
    }
    public function updatedForm ($dataInput) {
        $dataInput= [
            'intitule'=> $this->intitule,
            'generalite'=> $this->generalite,
            'sigle'=> $this->sigle,
            'adresse'=> $this->adresse,
        ];
        $this->institutFinancementPartenaire->update($dataInput);
        return redirect()->route($this->showRoute['link'])->with('success', "créé avec succes");

            
    }
}