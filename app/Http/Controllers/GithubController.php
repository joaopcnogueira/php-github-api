<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function getUserRepositories(string $username)
    {
        $client = new \Github\Client();
        $repositories = $client->api('user')->repositories($username);
        return view('datatable', compact('repositories'));
    }
}
