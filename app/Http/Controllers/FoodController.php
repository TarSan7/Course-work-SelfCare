<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\RecipeText;

class FoodController extends Controller
{
    public function getRecipies() {
        $recipies = Recipe::all();
        return view('foodContainer', compact('recipies'));
    }

    public function getRecipe($recepieId) {
        $recipieIteam = (RecipeText::where('id', $recepieId)->get())[0];
        $text = explode(";", $recipieIteam->ingredient);
        $process = explode(";", $recipieIteam->process);
        return view('foodInfo', compact('recipieIteam', 'text', 'process'));
    }
}