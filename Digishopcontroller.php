<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Digi;

class Digishopcontroller extends Controller
{
    //
    public function index() {
        $digis = Digi::all();
        //dd($digis);
        return view('digis.index', ['digis'=>$digis]);
    }
        public function insert(){
            return view ('digis.insert');
        }
    public function create(Request $request)
    {
        $data = $request->all();
        digi::create(['title'=>$data['title'],
        'CPU'=>$data['CPU'],
        'RAM'=>$data['RAM'],
        'price'=>$data['price'],
        'picture'=>$data['picture'],]);
        return redirect(route('digis.index'));
    }
    public function update($id)
{
    $digi = Digi::find($id);
    return view("digis.update",['digi'=>$digi]);
}
    public function edit(Request $request)
{
    $digi = Digi::find($request->id);
    $digi->title = $request->title;
    $digi->CPU = $request->CPU;
    $digi->RAM = $request->RAM;
    $digi->price = $request->price;
    $digi->picture = $request->picture;
    $digi->save();
    return redirect(route('digis.index'));
}
    public function show($id)
{
    $digi = Digi::find($id);
    return view("digis.show",['digi'=>$digi]);
}
    public function destroy($id)
    {
    $digi = Digi::find($id);
    $digi->delete();
    return redirect(route('digis.index'));
    }
}