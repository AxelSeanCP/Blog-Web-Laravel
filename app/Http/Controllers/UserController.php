<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        if(!$request->hasFile('photo')){
            return back()->withErrors(['photoError' => 'Photo profile is required']);
        }

        $photo = $request->file('photo');

        if($user->photo) {
            Storage::disk('public')->delete('images/' . $user->photo);
        }

        $photo->storeAs('images', $photo->hashName(), 'public');

        $user->photo = $photo->hashName();
        $user->update();

        return redirect()->back()->with('success', 'Photo profile updated');
    }
}
