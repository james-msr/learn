<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PermissionResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return PermissionResource::collection(Permission::all());
    }


    public function store(Request $request)
    {
        Permission::query()->create($request->all());

        return 201;
    }


    public function show($id)
    {
        return new PermissionResource(Permission::query()->findOrFail($id));
    }


    public function update(Request $request, $id)
    {
        Permission::query()->findOrFail($id)->update($request->all());

        return 201;
    }


    public function destroy($id)
    {
        Permission::query()->findOrFail($id)->delete();

        return 201;
    }
}
