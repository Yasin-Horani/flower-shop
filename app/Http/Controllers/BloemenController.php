<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Product;

class BloemenController extends Controller
{
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('bloemen.index', [
            'bloemen' => Product::all()
        ]);
    }

    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('bloemen.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'bloem-name' => 'required',
            'bloem-origin' => 'required',
            'bloem-price' => 'required|integer',
        ]);
        $bloem = new Product();
        $bloem->name = strip_tags($request->input('bloem-name'));
        $bloem->origin = strip_tags($request->input('bloem-origin'));
        $bloem->image = strip_tags($request->input(key: 'bloem-image'));
        $bloem->price = strip_tags($request->input('bloem-price'));
        $bloem->save();
        return redirect()->route('bloemen.index');
    }
//------------------------------------------------------------------------------------------------
    public function show($bloem): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('bloemen.show', [
            'bloem' => Product::findOrFail($bloem)
        ]);

    }

    public function edit($bloem): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('bloemen.edit', [
            'bloem' => Product::findOrFail($bloem)
        ]);
    }


    public function update(Request $request, string $bloem): RedirectResponse
    {
        $request->validate([
            'bloem-name' => 'required',
            'bloem-origin' => 'required',
            'bloem-image' => 'required',
            'bloem-price' => 'required|integer',
        ]);

        $to_update = Product::findOrFail($bloem);
        $to_update->name = strip_tags($request->input('bloem-name'));
        $to_update->origin = strip_tags($request->input('bloem-origin'));
        $to_update->image = strip_tags($request->input('bloem-image'));
        $to_update->price = strip_tags($request->input('bloem-price'));

        $to_update->save();

        return redirect()->route('bloemen.show', $bloem);

    }

    public function destroy(string $bloem): RedirectResponse
    {
        $to_delete = Product::findOrFail($bloem);
        $to_delete->delete();
        return redirect()->route('bloemen.index');
    }
}
