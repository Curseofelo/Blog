<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        return view('phone');
    }

    public function create()
    {
        $phone_arr=[
            [
                'mark'=>'iphone',
                'model'=>'xs',
                'pryce'=>10000
            ],
            [
                'mark'=>'samsung',
                'model'=>' a5',
                'pryce'=>100000
            ]

        ];
        foreach ($phone_arr as $item)
        {
            Phone::create($item);
    }
        dd('created');
    }

    public function update()
    {
        $phone = Phone::find(1);
        $phone->update([
            'mark'=>'update',
            'model'=>'update'
        ]);
        dd('update');
    }

    public function delete()
    {
        $post=Phone::find(1);
        $post->delete();
    }

    public function restore()
    {
        $phone = Phone::withTrashed()->find(1);
        $phone->restore();
    }

    public function firstOrCreate()
    {
        $another=[
            'mark'=>'first',
            'model'=>'or',
            'pryce'=>20000
        ];
        $phone = Phone::firstOrCreate([
            'mark'=>'first'
        ],$another);
    }

    public function updateOrCreate()
    {
        $another=[
            'mark'=>'update',
            'model'=>'update',
            'pryce'=>30000
        ];

        $phone=Phone::updateOrCreate([
            'mark'=>'first'
        ],$another);
    }
}
