<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return RoleResource::collection(Role::all());
    }


    public function store(Request $request)
    {
        Role::query()->create($request->all());

        return 201;
    }


    public function show($id)
    {
        return new RoleResource(Role::query()->findOrFail($id));
    }


    public function update(Request $request, $id)
    {
        Role::query()->findOrFail($id)->update($request->all());

        return 201;
    }


    public function destroy($id)
    {
        Role::query()->findOrFail($id)->delete();

        return 201;
    }
}
