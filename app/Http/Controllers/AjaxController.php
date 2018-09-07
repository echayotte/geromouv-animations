<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

// class AjaxController extends Controller
// {
//     public function ajax_call()
//     {
//         Log::info("ajax_call()");
//         $users = DB::table('users')->orderBy('name', 'desc')->get();
//         // $users = DB::table('users')->count();
//         $users = json_encode($users);
//         return $users;
//     }
// }


class AjaxController extends Controller
{
    public function ajax_call()
    {
        // Log::info("ajax_call()");
        $members = DB::table('members')->orderBy('lastname', 'desc')->get();
        // $members = DB::table('members')->get();
        // $user->name = $request->name;
        // $user->save();

        $response = array(
            'members' => $members,
        );
        return response()->json($response);
    }
    public function ajaxStoreMutual(Request $request)
    {
        request()->validate([
            // form's type="name"
            'member-new-mutual' => 'required | integer'
        ]);
        $mutual = Mutual::create([
            // db column => requets(form's type="name")
            'mutual_name' => request('member-new-mutual'),
            ]);

            $name = $request->input('user.name');

    }
}