<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswaModel;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = mahasiswaModel::all();
        return view('mahasiswa',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('mahasiswainsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
            'namaMhs'=>'required',
            'nimMhs'=>'required',
            'noTelpMhs'=>'required',
            'fakultasMhs'=>'required'
       ]);
       $postdata = $request->all();
       mahasiswaModel::create($postdata);
       return redirect()->route('mahasiswaModel.index');
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
        $query=mahasiswaModel::find($id);
        return view('mahasiswaupdate')->with('data',$query);
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
        $this->validate($request,[
            'namaMhs'=>'required',
            'nimMhs'=>'required',
            'noTelpMhs'=>'required',
            'fakultasMhs'=>'required'
       ]);
        $postdata = $request->all();
        mahasiswaModel::find($id)->update($postdata);
        return redirect()->route('mahasiswaModel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postdata=mahasiswaModel::find($id);
        $postdata->delete();
        return redirect()->route('mahasiswaModel.index');
    }
}
