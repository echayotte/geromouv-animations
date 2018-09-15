<?php
namespace App\Http\Controllers;

use App\Pension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Session;

class PensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // sort with kyslik composer method sortable()
        $pensions = Pension::sortable()->paginate(7);

        return view('pages.pension.index', compact('pensions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Pension::where('name', '=', Input::get('member-new-pension'))->exists()) {
            
            // pension exists
            return response()->json(array(
                'message' => 'caisse existante !',
                'status' => true
            ));
        } else {

            // pension doesn't exist
            request()->validate([
                'member-new-pension' => 'required | string'
            ]);

            $pension = Pension::create([
            // db column => requets(form's type="name")
                'name' => request('member-new-pension')
            ]);

            $pensions = Pension::all();

            //json sent to addPension.js
            $response = array(
                'newPensionId' => $pension->id,
                'newPensionName' => $pension->name,
                'pensions' => $pensions,
                'message' => 'caisse enregistrée',
                'status' => false
            );

            return response()->json($response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function show(Pension $pension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function edit(Pension $pension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pension $pension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pension $pension)
    {
        // membre utilise mutuelle
        $mutualPension = DB::table('members')->where('pension_id', '=', $pension->id)->first();

        if ($mutualPension) {
            //envoyer un message d'info
            // return Redirect::route('pension.index')->with('message', 'Cette caisse de retraite ne peut pas être supprimée car elle est utilisée par un inscrit.');
            return Redirect::route('pension.index')->with('message', $pension->name . ' ne peut pas être supprimée car elle est utilisée par un inscrit.');
        } else {
            //supprimer
            $pension->delete();
            return Redirect::route('pension.index')->with('message', 'Caisse de retraite supprimée avec succès.');
        }
    }
}
