<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateGymRequest;
use App\Http\Requests\GymRequest;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy("name")->get();
        $gym = Gym::all();
        return view('gym.list', compact('categories', 'gym'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy("name")->get();
        $gym = new Gym;
        return view('gym.add', compact("categories", "gym"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GymRequest $request)
    {
        $fields = $request->validated();
        $gym = new Gym();
        $gym->fill($fields);
        $gym->category_id = $fields["category"];
        $gym->save();

        if (!is_null($request->file('photos'))) {
            foreach ($request->file('photos') as $imagefile) {
                $image = new Photo;
                $path = $imagefile->store('public/gym_images');
                $image->filename = basename($path);
                $image->gym_id = $gym->id;
                $image->save();
            }
        }

        if ($mainphoto = $gym->photos->first()) {
            $mainphoto->main_photo = 1;
            $mainphoto->save();
        }

        return redirect()->route('gym.index')->with('success', 'Gym created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function show(Gym $gym)
    {
        return view('gym.show', compact("gym"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function edit(Gym $gym)
    {
        $categories = Category::orderBy("name")->get();
        return view('gym.edit', compact('categories', 'gym'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGymRequest $request, Gym $gym)
    {
        $fields = $request->validated();
        $gym->fill($fields);

        if (!is_null($request->file('photos'))) {
            foreach ($request->file('photos') as $imagefile) {
                $image = new Photo;
                $path = $imagefile->store('public/gym_images');
                $image->filename = basename($path);
                $image->gym_id = $gym->id;
                $image->save();
            }
        }

        if (!sizeof($gym->photos()->where('main_photo', 1)->get())) {
            if ($mainphoto = $gym->photos->first()) {
                $mainphoto->main_photo = 1;
                $mainphoto->save();
            }
        }

        $gym->save();
        return redirect()->route('gym.index')->with('success', 'Gym successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function photodelete(Photo $photo)
    {
        $gym = $photo->gym;
        if ($photo->main_photo && sizeof($gym->photos)) {
            if ($mainphoto = $gym->photos->first()) {
                $mainphoto->main_photo = 1;
                $mainphoto->save();
            }
        }

        Storage::delete('public/gym_images/' . $photo->filename);
        $photo->delete();
        return redirect()->back()->with('success', 'O ginásio foi eliminado com sucesso');
    }

    public function photomain(Photo $photo)
    {
        foreach (Photo::where('gym_id', $photo->gym_id)->where('main_photo', 1)->get() as $other_photo) {
            $other_photo->main_photo = 0;
            $other_photo->save();
        }
        $photo->main_photo = 1;
        $photo->save();
        return redirect()->back()->with('success', 'O ginásio foi eliminado com sucesso');
    }


    public function destroy(Gym $gym)
    {
        foreach ($gym->photos as $photo) {
            Storage::delete('public/gym_images/' . $photo->filename);
            $photo->delete();
        }
        $gym->delete();
        return redirect()->route('gym.index')->with('success', 'O ginásio foi eliminado com sucesso');
    }
}
