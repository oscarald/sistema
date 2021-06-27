<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Consultor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'renca'     =>  'required',
            'ci'        =>  'required',
            'domicilio'        =>  'required',
            'ciudad'    =>  'required',
            'departamento'     =>  'required',
            'telefono'     =>  'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $usuario = User::orderBy('created_at', 'desc')->first();
            

        $idusuario = ($usuario-> id) + 1;

        //dd($idusuario);   

        //$datos = Consultor::create([

        //]);
        //$datos->save();

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],

            'password' => Hash::make($input['password']),
        ])->assignRole('Consultor');

        $consultor = Consultor::create([
            'renca' => $input['renca'],
            'ci' => $input['ci'],
            'domicilio' => $input['domicilio'],
            'ciudad' => $input['ciudad'],
            'departamento' => $input['departamento'],
            'telefono' => $input['telefono'],
            'user_id' => $idusuario,
        ]);

        $consultor->save();

        return $user;

    }
}
