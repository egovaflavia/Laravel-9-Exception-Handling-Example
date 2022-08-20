<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        try {
            $user = User::find($input['id']);
        } catch (Exception $e) {
            $message = $e->getMessage();
            var_dump('Exception Message' . $message);

            $code = $e->getCode();
            var_dump('Exception Code' . $code);

            $string = $e->__toString();
            // var_dump('Exception Message' . $string);

            exit;
        }

        return response()->json($user);
    }
}
