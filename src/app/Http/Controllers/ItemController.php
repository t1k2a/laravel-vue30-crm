<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Item;
use App\Http\Requests\StoreItemRequest;


class ItemController extends Controller
{
    public function index()
    {

        return Inertia::render('Items/index', [
            'items' => Item::select('id', 'name', 'price', 'is_selling')->get()
        ]);
    }

    public function create()
    {

        return Inertia::render('Items/Create');
    }

    public function store(StoreItemRequest $request)
    {
        Item::create([
            'name' => $request->name,
            'memo' => $request->memo,
            'price' => $request->price,
        ]);

        return to_route('items.index');
    }

    
}
