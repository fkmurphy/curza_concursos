<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterPersonController extends Controller
{

    public function store(Request $request)
    {
        \DB::beginTransaction();
        try {
            $input = $request->input();
            //// to observer
            //$user = User::create([
            //    'uid' => $input['cuil'],
            //    'password' => Hash::make($input['password'])
            //]);
            //Person::create([
            //    'uid' => $input['cuil'],
            //    'first_name' => $input['first_name'],
            //    'last_name' => $input['last_name'],
            //    'user_id' => $user->id,
            //    'contact_email' => $input['contact_email'],
            //]);
            //DB::commit();
            return response()->json([
                'message' => 'Se guardó ',
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
            return response()->json([
                'message' => 'Hubo un error',
                'excep' => $e->getTraceAsString(),
                'input' => $input
            ], 500);

        }

    }

}
