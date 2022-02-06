<?php

namespace App\Http\Controllers;
use App\Models\Swabber;
use Illuminate\Http\Request;

class SwabberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $swabber = Swabber::all();
        return view('swabber.index',compact('swabber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('swabber.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Swabber::create($request->all());
        return redirect(route('swabbers.index'))->with(['success' => 'Swabber Baru Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $swabber = Swabber::find($id);
    if (!$swabber) return redirect()->route('swabbers.index')
        ->with('error', 'User dengan id'.$id.' tidak ditemukan');
    return view('swabber.edit', [
        'swabber' => $swabber
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telphone' => 'required',
            'jenis_kelamin' => 'required'
           
            
        ]);
        $swabber = Swabber::find($id)->update($request->all()); 
       
        return redirect()->route('swabbers.index')
            ->with('success', 'Berhasil mengubah user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $swabber = Swabber::find($id);
        $swabber->delete();
        return redirect(route('swabbers.index'))->with(['success' => 'Swabber Dihapus!']);
    }
}
