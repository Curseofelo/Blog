<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\MusicCategory;
use App\Models\MusicTag;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        return view('music.index', compact('musics'));

    }

    public function create ()
    {
        $categories = MusicCategory::all();
        $tags = MusicTag::all();
        return view('music.create', compact('categories','tags'));
    }

    public function store ()
    {
        $data = \request()->validate([
            'author'=>'',
            'song'=>'',
            'category_id'=>'',
            'tags'=>[]
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $music = Music::create($data);
        $music->tags()->attach($tags);
        return redirect()->route('music.index');
    }

    public function show (Music $music)
    {
        return view('music.show', compact('music'));
    }

    public function edit (Music $music)
    {
        $categories = MusicCategory::all();
        $tags = MusicTag::all();
        return view('music.edit',compact('categories','music','tags'));
    }

    public function update (Music $music)
    {
        $data = \request()->validate([
            'author'=>'',
            'song'=>'',
            'category_id'=>'',
            'tags'=>''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $music->update($data);
        $music->tags()->sync($tags);
        return redirect()->route('music.show', $music->id);
    }

    public function delete (Music $music)
    {
        $music->delete();
        return redirect()->route('music.index');
    }


}
