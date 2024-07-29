<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use App\Models\Admin\Module;
use App\Models\Admin\Pengguna;
use App\Models\Admin\Role;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_module'] = Module::withCount('role')->get();
        return view('admin.module.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $module = new Module;
        $module->name = request('name');
        $module->tag = request('tag');
        $module->app = request('app');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->url = request('url');
        $module->save();

        return redirect('admin/module')->with('success', 'Module Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        $data['module'] = $module;
        $data['list_pengguna'] = Pengguna::all();

        return view('admin.module.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        $data['module'] = $module;

        return view('admin.module.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Module $module)
    {
        $module->name = request('name');
        $module->tag = request('tag');
        $module->app = request('app');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->url = request('url');
        $module->save();

        return redirect('admin/module')->with('success', 'Module Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $list_role = Role::where('id_module', $module->id)->get();
        if ($list_role->count() > 0) {
            $list_role->each(function ($role) {
                $role->delete();
            });
        }

        $module->delete();

        return redirect('admin/module')->with('danger', 'Module Berhasil Dihapus');
    }

    public function addRole()
    {
        $role = new Role;
        $role->id_pengguna = request('id_pengguna');
        $role->id_module = request('id_module');
        $role->save();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function deleteRole(Role $role)
    {
        $role->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
