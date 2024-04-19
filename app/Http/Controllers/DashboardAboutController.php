<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class DashboardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return AboutMe::all();
        return view('dashboard.aboutme.index', [
            'aboutMe' => AboutMe::first()
        ]);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutMe $aboutMe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutMe $aboutMe)
    {
        $aboutMe = AboutMe::first();
        return view('dashboard.aboutme.edit', compact('aboutMe'));
        // return view('dashboard.aboutme.edit', [
        //     'aboutMe' => $aboutMe
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutMe $aboutMe)
    {
        try{
            $aboutMe = AboutMe::first();

            $validateData = $request->validate([
                'name' => 'required|max:255',
                'job' => 'required|max:255',
                'short_description' => 'required|max:255',
                'description' => 'required'
            ]);
    
            // dd($validateData, $aboutMe->toArray());
    
            // $aboutMe->update($validateData);
            $aboutMe->where('id', $aboutMe->id)
                    ->update($validateData);
            
            return redirect('dashboard/aboutme')->with('success', 'About Me has been updated!');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, tangkap eksepsi dan cetak pesan kesalahan
            return back()->with('error', 'An error occurred while updating the About Me information: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutMe $aboutMe)
    {
        //
    }
}
