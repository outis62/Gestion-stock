<?php

namespace App\Http\Livewire\Collecte;

use App\Imports\CollecteImport;
use App\Models\Collecte;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcel extends Component
{
    use WithFileUploads;
    protected $listeners = ['fileSelected' => 'importExcel'];
    public $excel_file;
    public $listRoute;
    public $addRoute;
    public $isLoading = false;

    public function render()
    {
        return view('livewire.collecte.import-excel');
    }

    public function importExcel()
    {
        // dd('test');
        $this->isLoading = true;

        if ($this->excel_file) {
            $this->validate([
                'excel_file' => 'required|mimes:xlsx,xls',
            ]);

            $import = new CollecteImport;

            try {
                Excel::import($import, $this->excel_file->getRealPath());
                $collectes = $import->getCollectes();
                foreach ($collectes as $collecteData) {
                    Collecte::create($collecteData);
                }

                $this->isLoading = false;

                return redirect()->route($this->listRoute['link'])->with('success', "Les collectes ont été importées avec succès !!");
            } catch (\Exception $e) {
                $this->isLoading = false;

                session()->flash('error', 'Une erreur est survenue lors de l\'importation: ' . $e->getMessage());
                return redirect()->back();
            }
        }
    }
    public function resetFile()
    {
        $this->excel_file = null;
    }

}
