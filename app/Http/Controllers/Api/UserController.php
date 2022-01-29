<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all());
    }


    public function store(Request $request)
    {
        User::query()->create($request->all());

        return 201;
    }


    public function show($id)
    {
        return new UserResource(User::query()->findOrFail($id));
    }


    public function update(Request $request, $id)
    {
        User::query()->findOrFail($id)->update($request->all());

        return 201;
    }


    public function destroy($id)
    {
        User::query()->findOrFail($id)->delete();

        return 201;
    }
}
