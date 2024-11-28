<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        return view('blogs.list', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'pembuat' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('foto')->store('blogs', 'public');

        Blogs::create([
            'judul' => $validated['judul'],
            'isi' => $validated['isi'],
            'pembuat' => $validated['pembuat'],
            'foto' => $imagePath,
        ]);

        return redirect()->route('list.blogs');
    }

    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'pembuat' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $blog = Blogs::findOrFail($id);

        $blog->judul = $validated['judul'];
        $blog->isi = $validated['isi'];
        $blog->pembuat = $validated['pembuat'];

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('blogs', 'public');
            $blog->foto = $imagePath;
        }

        $blog->save();

        return redirect()->route('list.blogs');
    }

    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();

        return redirect()->route('list.blogs');
    }
}
