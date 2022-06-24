<?php

namespace App\Http\Controllers;
use App\Http;
use App\Models\Fish;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class FishesController extends Controller
{
    public function add()
    {
        return view('fish.add');
    }
    public function index()
    {
        $users = User::select("*")->pluck('profiles.id');
        $fishes = Fish::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        return view('welcome', compact('fishes'));
    }
    public function allfish()
    {
        $fishes = Fish::all();
        return view('admin.fish', compact('fishes'));
    }
    public function create()
    {
        return view('fish.create');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'image_path' => 'required|image',
            'name' => '',
            'weight' => 'integer',
            'length' => 'integer',
            'description' => 'required'
        ]);

        $imagePath = request('image_path')->store('uploads', 'public');
        $image_path = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
        $image_path->save();
        auth()->user()->fishes()->create([
            'image_path' => $imagePath,
            'name' => $data['name'],
            'weight' => $data['weight'],
            'length' => $data['length'],
            'description' => $data['description']
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }
    public function show(\App\Models\Fish $fish)
    {
        return view('fish.show', compact('fish'));
    }
    public function destroy($id)
    {
        $this->authorize('delete', $id);
        $fish = Fish::find($id);
        $fish->delete();
        return redirect('/')->with('Ryba usunięta.');
    } 
}
