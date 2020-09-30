<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use App\User;
 use Infrastructure\Auth\Exceptions\InvalidCredentialsException;
use Laravel\Passport\Passport;
use Validator;
class AuthController extends Controller
{
    /**
     * login API
     *
     * @return \Illuminate\Http\Response
     */
    public function loginUser(Request $request)
    {



        if($request->email=='roland.kompalka@salvimar.de' &&  $request->password=='12345')
        {
            $newUser                    = new User();
            $newUser->userId     = 23;
            $newUser->email       = 'roland.kompalka@salvimar.de';


            return response()->json($newUser, 200);
        }
        return response()->json(false, 200);

    }

}
