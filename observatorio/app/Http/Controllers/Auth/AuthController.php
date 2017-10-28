<?php

namespace observatorio\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use observatorio\Http\Controllers\Controller;
use observatorio\Role;
use observatorio\Usuario;
use Validator;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|max:100',
            'email' => 'required|email|max:255|unique:usuarios',
            'nascimento' => 'required',
            'sexo' => 'required|in:male,female,other',
            'password' => 'required|confirmed|min:6',
        ]);

        $avatar = $data['avatar'];
        $validator->after(function ($validator) use ($avatar) {
            Usuario::validateAvatar($validator, $avatar);
        });

        return $validator;
    }

    /**
     * Create a new Usuario instance after a valid registration.
     *
     * @param array $data
     *
     * @return Usuario
     */
    protected function create(array $data)
    {
        $data['avatar'] = Usuario::avatarImage($data['avatar']);

        return Usuario::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nascimento' => $data['nascimento'],
            'bio' => $data['bio'],
            'sexo' => $data['sexo'],
            'password' => bcrypt($data['password']),
            'role_id' => Role::byNome('autenticado')->id,
            'foto' => $data['avatar'] ? $data['avatar']->encode('png') : '',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['auth' => true]);
        }

        return redirect()->intended($this->redirectPath());
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['error' => $this->getFailedLoginMessage()]);
        }

        return redirect()->back()
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }
}
