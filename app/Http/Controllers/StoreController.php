<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Psy\Util\Str;

class StoreController extends Controller
{
    public function index()
    {
        return view('store');
    }
    public function create()
    {
        $store_arr = [
            [
                'title'=>'magnum',
                'number'=> 1
            ],
            [
                'title'=>'magnubn',
                'number'=>2
            ]
        ];
        foreach ($store_arr as $item) {
            Store::create($item);

        }
        dd('create');
    }

    public function update()
    {
        $store = Store::find(1);
        $store->update([
            'title'=>'update',
            'number'=> 5
        ]);
        dd('update');
    }

    public function delete()
    {
        $store = Store::find(1);
        $store->delete();
        dd('delete');
    }

    public function restore()
    {
        $store = Store::withTrashed()->find(1);
        $store->restore();
        dd('restore');
    }
}
