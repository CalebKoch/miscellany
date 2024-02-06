<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserValidation;
use App\User;
use Illuminate\Http\Request;

class EmailValidationController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function validateEmail(Request $request, User $user)
    {
        if (auth()->user()->id != $user->id) {
            return response()->redirectTo(route('settings.subscription'))->withError(__('emails/validation.error'));
        }

        $token = $request->get('token');

        /** @var UserValidation $validation */
        $validation = UserValidation::where('user_id', $user->id)
            ->where('token', $token)
            ->first();

        if ($validation->exists) {
            $validation->is_valid = true;
            $validation->saveQuietly();
        } else {
            response()->redirectTo(route('settings.subscription'))->withError(__('emails/validation.error'));
        }

        return response()->redirectTo(route('settings.subscription'))->withSuccess(__('emails/validation.success'));
    }
}
