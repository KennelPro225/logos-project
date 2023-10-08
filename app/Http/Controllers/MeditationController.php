<?php

namespace App\Http\Controllers;

use App\Models\Meditation;
use Illuminate\Http\Request;

class MeditationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Meditation::join("users", "meditations.user_id", "users.id")
            ->join("versets", "meditations.verset_id", "versets.id")
            ->select(
                "meditations.*",
                "versets.*",
                "users.created_at as first_date",
                "users.nom",
                "users.prenoms",
                "meditations.id as meditation_id"
            )
            ->get();
        return view("index", ["datas" => $data]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
