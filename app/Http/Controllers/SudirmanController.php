<?php

namespace App\Http\Controllers;

use App\Sudirman_Model;
use Illuminate\Http\Request;

class SudirmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sudirman = Sudirman_Model::paginate(10);
      return view ('sudirman.lihatsudirman', compact('sudirman'));
    }

    public function daftar()
    {
      $sudirman = Sudirman_Model::paginate(10);
      $angkatan = Sudirman_Model::selectRaw('angkatan, count(angkatan) as jumlah')->groupBy('angkatan')->get();
      return view ('Sudirman.menusudirman', compact('angkatan'));
    }


    public function daftarangkatan($angkatan)
    {
          $angkatan = Sudirman_Model::where("angkatan", $angkatan)->get();
          return view ('Sudirman.daftarsudirman', compact('angkatan'));
    }

    public function angkatansudirman($angkatan)
    {
          $angkatan = Sudirman_Model::where("angkatan", $angkatan)->get();
          return view ('Sudirman.angkatansudirman', compact('angkatan'));
    }

//    public function terbaiksudirman()
//    {
//      $nilai = Sudirman_Model::selectRaw('nilai, count(nilai) as jumlah')
//      ->orderBy('nilai','DESC')
//      ->limit(3)
//      ->groupBy('nilai')->get();
//      return view ('Sudirman.terbaiksudirman', compact('nilai'));
//    }

//    public function siswaterbaiksdrm($nilai)
//    {
  //        $nilai = Sudirman_Model::where("nilai", $nilai)->get();
  //        return view ('Sudirman.siswaterbaiksdrm', compact('nilai'));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sudirman.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'angkatan' => 'required',
            'pembimbing' => 'required',
            'nilai' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Sudirman_Model::create($input);

        return redirect('/tambahsudirman')->with('success','Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sudirman_Model $sudirman)
    {
        return view('Sudirman.detailsudirman',compact('sudirman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sudirman_Model $sudirman)
    {
          return view('Sudirman.editsudirman',compact('sudirman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sudirman_Model $sudirman)
    {
      $request->validate([
        'nama' => 'required',
        'judul' => 'required',
        'angkatan' => 'required',
        'pembimbing' => 'required',
        'nilai' => 'required'
      ]);

      $input = $request->all();

      if ($image = $request->file('image')) {
          $destinationPath = 'image/';
          $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
          $image->move($destinationPath, $profileImage);
          $input['image'] = "$profileImage";
      }else{
          unset($input['image']);
      }

      $sudirman->update($input);

      return redirect('/lihatsudirman')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sudirman_Model $sudirman)
    {
      Sudirman_Model::destroy($sudirman->id);
      return redirect('/lihatsudirman')->with('success','Data Delete successfully.');
    }
}
