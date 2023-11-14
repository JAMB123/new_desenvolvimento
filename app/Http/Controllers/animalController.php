<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\AnimalUser;
use Illuminate\Support\Facades\Auth;

class animalController extends Controller
{

    public function index()
    {
        $cadastro = Animal::all();
        return view('sistema.index', compact('cadastro'));
    }

    public function favoritar($id)
    {
        $favoritados = AnimalUser::where('animal_id', '=', $id);
        $tem = false;
        foreach ($favoritados as $item) {
            if ($item->user_id == Auth::User()->id) {
                $tem = true;
                break;
            }
        }
        if ($tem != true) {
            $data = new AnimalUser();
            $data->user_id = Auth::User()->id;
            $data->animal_id = $id;
            $data->save();
            return redirect('/index');
        } else {
            redirect('/index');
        }

    }

    public function favoritos()
    {
        $cadastro = AnimalUser::where('user_id', '=', Auth::User()->id)->get();
        return view('sistema.favoritos', compact('cadastro'));
    }
}
