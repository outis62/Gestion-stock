<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOperationPaysaneRequest;
use App\Http\Requests\UpdateOperationPaysaneRequest;
use App\Mail\Usercouriel;
use App\Models\OperationPaysane;
use App\Models\OperationSpeculation;
use App\Models\Operation_Speculation;
use App\Models\Speculation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Symfony\Component\Mailer\Exception\TransportException;

class OperationPaysaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opaysanes = OperationPaysane::orderBy("created_at", "desc")->with('user')->get();

        return view("back-office.pages.operation-paysane.index", compact("opaysanes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(OperationPaysane $operationPaysane)
    {
        // dd($operationPaysane);
        $speculations = Speculation::all();
        // dd($speculations);
        return view("back-office.pages.operation-paysane.create", ['operationPaysane' => $operationPaysane, 'idoperationPaysane' => null, 'speculations' => $speculations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOperationPaysaneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperationPaysaneRequest $request)
    {
        $operation = OperationPaysane::create([
            'libelle' => $request->libelle,
            'rccm_ninea' => $request->rccm_ninea,
            'statut_juridique' => $request->statut_juridique,
            'siege' => $request->siege,
            'numero_recipisse' => $request->numero_recipisse,
            'niveau' => $request->niveau,
        ]);

        $donneformulaire = $request->input('speculation', []);

        // dd($donneformulaire);

        foreach ($donneformulaire as $idonneformulaire) {
            OperationSpeculation::create([
                'speculation_id' => $idonneformulaire,
                'operation_paysane_id' => $operation->id,
            ]);
        }
        $password = Str::random(6);
        $hashpassword = Hash::make($password);
        $admin_op = User::create([

            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => $hashpassword,
            'operation_paysane_id' => $operation->id,
            'role' => $request->role,
        ]);

        try {

            $msg = "Bonjour";
            $messages = "votre compte à éte crée sur la plateforme et voici votre mot de passe: " . $password;
            Mail::to($admin_op->email)->send(new Usercouriel($admin_op, $messages, $msg));
            return redirect()->route('operation-paysane.index')->with('success', "l'utilisateur " . $admin_op->nom . ' ' . $admin_op->prenom . '  enregistré avec succès !!  ' . "Son mot de passe de connexion lui a été envoyé par mail à l'adresse: " . $admin_op->email);

        } catch (TransportException $e) {
            Log::error('Erreur de transport de messagerie : ' . $e->getMessage());
            return redirect()->route('operation-paysane.index')->with('warning', "l'utilisateur " . $admin_op->nom . ' ' . $admin_op->prenom . '  enregistré avec succès !!  ' . "Son mot de passe de connexion n'a pas pu être envoyé par mail à l'adresse: " . $admin_op->email);
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OperationPaysane  $operationPaysane
     * @return \Illuminate\Http\Response
     */
    public function show(OperationPaysane $operationPaysane)
    {
        $user = $operationPaysane->user;
        // dd($user);
        $speculations = Speculation::all();
        return view('back-office.pages.operation-paysane.create', ['operationPaysane' => $operationPaysane, 'idoperationPaysane' => $operationPaysane->id, 'user' => $user, 'speculations' => $speculations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OperationPaysane  $operationPaysane
     * @return \Illuminate\Http\Response
     */
    public function edit(OperationPaysane $operationPaysane)
    {
        $users = $operationPaysane->users;
        // dd($users) ;

        // $sp=$operationPaysane->speculations;
        // dd(Speculation::all());
        return view('back-office.pages.operation-paysane.edit', ['operationPaysane' => $operationPaysane, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOperationPaysaneRequest  $request
     * @param  \App\Models\OperationPaysane  $operationPaysane
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOperationPaysaneRequest $request, OperationPaysane $operationPaysane, Operation_Speculation $operation_Speculation)
    {
        $operationPaysane->update([

            'libelle' => $request->libelle,
            'rccm_ninea' => $request->rccm_ninea,
            'statut_juridique' => $request->statut_juridique,
            'siege' => $request->siege,
            'numero_recipisse' => Str::random(8),

        ]);
        $donneformulaire = $request->input('speculation', []);

        // dd($donneformulaire);

        foreach ($donneformulaire as $idonneformulaire) {
            $operation_Speculation->update([
                'speculation_id' => $idonneformulaire,
                'operation_paysane_id' => $operationPaysane->id,
            ]);
        }

        $user = $operationPaysane->user;
        $user->update([

            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'operation_paysane_id' => $operationPaysane->id,
            'role' => $request->role,
        ]);
        return redirect()->route('operation-paysane.index')->with('success', 'Modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OperationPaysane  $operationPaysane
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperationPaysane $operationPaysane)
    {
        $operationPaysane->delete();
        $user = $operationPaysane->user;
        $user->delete();
        return redirect()->route('operation-paysane.index')->with('error', 'Suprimer avec success');
    }
}
