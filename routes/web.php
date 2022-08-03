<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Item;


Route::get('/', function () {

    $items = Item::orderBy('created_at', 'asc')->get();

    return view('items.index', [
        'items' => $items,
        ]);
});

Route::get('register', [UserController::class, 'register'])->name('register');

Route::post('/item', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);  
    if ($validator->fails()) {
        return redirect('/')
        ->withInput()
        ->withErrors($validator);
    }

    $item = new Item;
    // dd($item);
    $item->name = $request->name;
    $item->save();

    // Item::create([
    //     'name' => $request->name,
    // ]); Add fillable record in Item Model
   
    return redirect('/');
});

Route::delete('/item/{item}', function (Item $item) {
    $item->delete();

    return redirect('/');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
