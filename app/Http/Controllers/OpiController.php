<?php

namespace App\Http\Controllers;

use App\Model_Opi;
use App\Sudirman_Model;
use Illuminate\Http\Request;

class OpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opi = Model_Opi::paginate(10);
        return view ('Opi.lihat', compact('opi'));
    }

    public function cariopi(Request $request)
        {
            $keyword = $request->get('keyword');
            $opi = Model_Opi::paginate(10);

           if ($keyword) {
           $opi = Model_Opi::where("nama","LIKE","%$keyword%")->get();
        }

            return view ('Opi.cariopi', compact('opi'));
        }


    public function daftar()
    {
        $opi = Model_Opi::paginate(10);
        $angkatan = Model_Opi::selectRaw('angkatan, count(angkatan) as jumlah')->groupBy('angkatan')->get();
        return view ('Opi.daftaropi', compact('angkatan'));
    }

    public function rumah()
    {
        $angkatan = Model_Opi::selectRaw('angkatan, count(angkatan) as jumlah')->groupBy('angkatan')->get();
        $angkatans = Sudirman_Model::selectRaw('angkatan, count(angkatan) as jumlah')->groupBy('angkatan')->get();
        return view ('Template.rumah', compact('angkatan','angkatans'));
    }

    public function daftarangkatan($angkatan)
    {
          $angkatan = Model_Opi::where("angkatan", $angkatan)->get();
          return view ('Opi.daftarangkatanopi', compact('angkatan'));
    }

    public function angkatanopi($angkatan)
    {
          $angkatan = Model_Opi::where("angkatan", $angkatan)->get();
          return view ('Opi.angkatanopi', compact('angkatan'));
    }

    public function terbaikopi()
    {
          $opi = Model_Opi::orderBy('nilai','DESC')->limit(3)->get();
          return view ('Opi.terbaikopi', compact('opi'));
    }

    public function dftrterbaikopi()
    {
      //$opi = Model_Opi::orderBy('nilai','ASC')->limit(3)->get();
      $nilai = Model_Opi::selectRaw('nilai, count(nilai) as jumlah')
      ->orderBy('nilai','DESC')
      ->limit(3)
      ->groupBy('nilai')->get();
      return view ('Opi.dftrterbaikopi', compact('nilai'));
    }

    public function siswaterbaikopi($nilai)
    {
          $nilai = Model_Opi::where("nilai", $nilai)->get();
          return view ('Opi.siswaterbaikopi', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Opi.index');
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

        Model_Opi::create($input);

        return redirect('/tambahopi')->with('success','Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Opi $opi)
    {
          return view('Opi.detail',compact('opi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Opi $opi)
    {
        return view('opi.edit',compact('opi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Opi $opi)
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

      $opi->update($input);

      return redirect('/lihat')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Opi $opi)
    {
      Model_Opi::destroy($opi->id);
      return redirect('/lihat')->with('success','Data Delete successfully.');
    }
}
