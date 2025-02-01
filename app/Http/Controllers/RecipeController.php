<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Http\Requests\RecipeUpdateRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Recipe::query();

        if ($request->has('search') && $request->search) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%')
                    ->orWhere('instructions', 'like', '%' . $searchTerm . '%')
                    ->orWhere('prep_time', 'like', '%' . $searchTerm . '%')
                    ->orWhere('cook_time', 'like', '%' . $searchTerm . '%')
                    ->orWhere('servings', 'like', '%' . $searchTerm . '%');
            });
        }

        $recipes = $query->latest()->paginate(12);
        return view('pages.recipes.index', ["recipes" => $recipes]);
    }

    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.recipes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeRequest $request)
    {
        $fields = $request->validated();
        $fields['image_url'] = null;
        if ($request->hasFile('image_url')) {
            $uploadedFileUrl  = cloudinary()->upload($request->file('image_url'));
            $fields['image_url'] = $uploadedFileUrl->getSecurePath();
            $fields['image_public_id'] = $uploadedFileUrl->getPublicId();
        }
        Auth::user()->recipes()->create($fields);
        return redirect()->route('dashboard')->with('success', 'Recette publiée avec succès');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.recipes.show', ['recipe' => Recipe::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe = Recipe::findOrFail($id);

        if ($recipe->user_id !== Auth::user()->id) {
            abort(403);
        }
        return view('pages.recipes.edit', ['recipe' => $recipe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecipeUpdateRequest $request, string $id)
{
    $recipe = Recipe::findOrFail($id);

    // Vérification si l'utilisateur est bien le propriétaire
    if ($recipe->user_id !== Auth::user()->id) {
        abort(403);
    }

    $fields = $request->validated();

    if ($request->hasFile('image_url')) {
        if ($recipe->image_public_id) {
            cloudinary()->destroy($recipe->image_public_id);
        }

        $uploadedFileUrl = cloudinary()->upload($request->file('image_url'));
        $fields['image_url'] = $uploadedFileUrl->getSecurePath();
        $fields['image_public_id'] = $uploadedFileUrl->getPublicId();
    }

    $recipe->update($fields);

    return redirect()->route('dashboard')->with('success', 'Recette modifiée avec succès');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recipe = Recipe::findOrFail($id);

        if ($recipe->user_id !== Auth::user()->id) {
            abort(403);
        }
        if ($recipe->image_public_id) {
            cloudinary()->destroy($recipe->image_public_id);
        }
        $recipe->delete();

        return redirect()->route('dashboard')->with('success', 'Recette supprimée avec succès');
    }
}
