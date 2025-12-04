<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $chirp = Chirp::with('user')->take(10)->latest()->get();
        return view('home', ['chirps' => $chirp]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $validate = $request->validate([
            "message" => 'required|string|max:255|min:5'
        ], ['message.required' => 'Please write something to chirp!', 'message.max' => "Chirps must be 255 characters or less", 'message.min' => "Chirps should more then 5 characters"]);

//        Chirp::with('user')->create($validate);
        auth()->user()->chirp()->create($validate);
        return redirect('/')->with('success', 'Your chirp has been Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        $this->authorize('update', $chirp);
        return view('edit', compact('chirp'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        $this->authorize('update', $chirp);
        //
        $validated = $request->validate([
            "message" => 'required|string|max:255|min:5'
        ], [
            'message.required' => 'Please write something to chirp!',
            'message.max' => "Chirps must be 255 characters or less",
            'message.min' => "Chirps should more then 5 characters"
        ]);
        $chirp->update($validated);
        return redirect('/')->with('success', 'Your chirp has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        $this->authorize('delete', $chirp);
        //
        $chirp->deleteQuietly();
        return redirect('/')->with('success', 'Your chirp has been deleted');
    }
}
