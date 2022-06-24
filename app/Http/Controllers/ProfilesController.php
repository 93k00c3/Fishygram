<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\ImageManagerStatic as Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
//        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => '',
        ]);
        if (request('image')){
            $imagePath = request('image')->store('uploads', 'public');
            $image_path = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
            $image_path->save();
            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile()->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/{$user->id}");
    }
}
