<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Api;

class userapi extends Controller
{
    //
    public function index($api_key, $api_secret) {
        $pass = Api::where("api_key", $api_key)->get();
        if($api_secret == $pass[0]->api_secret) {
            return User::all();
        }
        else {
            return "error api key atau api secret salah";
        }
    }

    public function select_user_id($api_key, $api_secret, $id)
    {
        $pass = Api::where("api_key", $api_key)->get();
        if ($api_secret == $pass[0]->api_secret) {
            return User::findorFail($id);
        } else {
            return "error api key atau api secret salah";
        }
    }

    public function search_user_name($api_key, $api_secret, $name)
    {
        $pass = Api::where("api_key", $api_key)->get();
        if ($api_secret == $pass[0]->api_secret) {
            return User::where('name', 'like', '%'. $name . '%')->get();

        } else {
            return "error api key atau api secret salah";
        }
    }
}
