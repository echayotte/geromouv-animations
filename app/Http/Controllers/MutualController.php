<?php
namespace App\Http\Controllers;

use App\Mutual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Session;


class MutualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // sort with kyslik composer method sortable()
        $mutuals = Mutual::sortable('name')->paginate(7);

        return view('pages.mutual.index', compact('mutuals'));
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
        if (Mutual::where('name', '=', Input::get('member-new-mutual'))->exists()) {
            
            // mutual found
            return response()->json(array(
                'message' => 'mutuelle existante !',
                'status' => true
            ));
        }
        else 
        {
            // mutual doesn't exist
            request()->validate([
                'member-new-mutual' => 'required | string'
            ]);

            $mutual = Mutual::create([
            // db column => requets(form's type="name")
                'name' => request('member-new-mutual')
            ]);

            $mutuals = Mutual::all();

            //json sent to addMutual.js
            $response = array(
                'newMutualId' => $mutual->id,
                'newMutualName' => $mutual->name,
                'mutuals' => $mutuals,
                'message' => 'mutuelle enregistrée',
                'status' => false
            );
            
            return response()->json($response);
            // return Response::json($response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mutual  $mutual
     * @return \Illuminate\Http\Response
     */
    public function show(Mutual $mutual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mutual  $mutual
     * @return \Illuminate\Http\Response
     */
    public function edit(Mutual $mutual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mutual  $mutual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mutual $mutual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mutual  $mutual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mutual $mutual)
    {
        // membre utilise mutuelle
        $mutualMember = DB::table('members')->where('mutual_id', '=', $mutual->id)->first();

        if($mutualMember) {
            //ne pas supprimer
            //envoyer un message d'info
            return Redirect::route('mutual.index')->with('message', 'Cette complémentaire ne peut pas être supprimée car elle est utilisée par un inscrit.');
        } else {
            //supprimer
        $mutual->delete();
        return Redirect::route('mutual.index')->with('message', 'Complémentaire supprimée avec succès.');
        }
    }
}
