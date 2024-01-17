<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Http\JsonResponse;

class PeopleController extends Controller
{
    public function index(): JsonResponse {
        return response()->json(People::all(), 200);
    }

    public function show($id): JsonResponse {
        $person = People::find($id);
        return response()->json($person, 200);
    }

    public function create(Request $request): JsonResponse {
        $people = People::create($request->all());
        return response()->json($people);
    }

    public function update(Request $request, $id): JsonResponse {
        
        $person = People::find($id);

        $person->name = $request->input('name', $person->name);
        $person->surname = $request->input('surname', $person->surname);
        $person->age = $request->input('age', $person->age);
        $person->phone_number = $request->input('phone_number', $person->phone_number);
        $person->email = $request->input('email', $person->email);
        $person->street = $request->input('street', $person->street);
        $person->city = $request->input('city', $person->city);
        $person->country = $request->input('country', $person->country);
        $person->save();

        return response()->json($person);
    }

    public function destroy($id): JsonResponse {
        $person = People::find($id);
        $person->delete();

        return response()->json(null, 204);
        
    }
}
