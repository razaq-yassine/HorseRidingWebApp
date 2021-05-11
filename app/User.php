<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    protected $guarded = [];
    protected $primaryKey = 'id_User';

    //CRUD methods
    static public function createNewUser($data){

        try {
            $user = User::create($data);
            return $user->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisUser($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisUser(){
        try{
            return User::find($this->id_User)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods
    static public function findByEmail($Email){
        return User::where('Email_User', $Email)->first();
        //returns object of User
    }

    //methods

    public function getAllClients(){
        return Client::where('Id_User', $this->id_User)->get();
        //returns array of Clients
    }
    public function getAllAdmins(){
        return Admin::where('Id_User', $this->id_User)->get();
        //returns array of Admins
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}
