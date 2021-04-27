<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination         
        $mahasiswas = Mahasiswa::with('kelas')->get(); // Mengambil semua isi tabel         
        $posts = Mahasiswa::orderBy('Nim', 'desc')->paginate(6);
        return view('mahasiswas.index', compact('mahasiswas'))->
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswas.create',['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data         
        $request->validate([             
            'Nim' => 'required',             
            'Nama' => 'required',             
            'Kelas' => 'required',             
            'Jurusan' => 'required',             
            'No_Handphone' => 'required',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->get('Nim');
        $mahasiswa->nama = $request->get('Nama');
        $mahasiswa->jurusan = $request->get('Jurusan');
        $mahasiswa->no_handphone = $request->get('No_Handphone');
        
        $kelas = new Kelas;
        $kelas->id = $request->get('Kelas');

        //fungsi eloquent untuk menambahkan data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        //fungsi eloquent untuk menambah data         
        //Mahasiswa::create($request->all());

         //jika data berhasil ditambahkan, akan kembali ke halaman utama         
         return redirect()->route('mahasiswas.index')             
         ->with('success', 'Mahasiswa Berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nim)
    {
         //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa         
         //$Mahasiswa = Mahasiswa::find($Nim);
         //return view('mahasiswas.detail', compact('Mahasiswa'));
         $mahasiswa = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
         return view('mahasiswas.detail',['Mahasiswa'=> $mahasiswa]);       
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nim)
    {
         //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit         
         //$Mahasiswa = Mahasiswa::find($Nim);
         $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
         $kelas = Kelas::all(); //mendapatkan data dari tabel kelas        
         return view('mahasiswas.edit', compact('Mahasiswa', 'kelas'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Nim)
    {
        //melakukan validasi data         
        $request->validate([             
            'Nim' => 'required',             
            'Nama' => 'required',             
            'Kelas' => 'required',             
            'Jurusan' => 'required',             
            'No_Handphone' => 'required',         
            ]);

            $Mahasiswa = Mahasiswa::with('kelas')->where('nim',$Nim)->first();
            $Mahasiswa->nim = $request ->get('Nim');
            $Mahasiswa->nama = $request ->get('Nama');
            $Mahasiswa->jurusan = $request ->get('Jurusan');
            $Mahasiswa->no_handphone = $request ->get('No_Handphone');
            $Mahasiswa->save();

            $kelas = new Kelas;
            $kelas->id = $request->get('Kelas');

            $Mahasiswa->kelas()->associate($kelas);
            $Mahasiswa->save();
            //fungsi eloquent untuk mengupdate data inputan kita         
            //Mahasiswa::find($Nim)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama         
            return redirect()->route('mahasiswas.index')             
            ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nim)
    {
        //fungsi eloquent untuk menghapus data          
        Mahasiswa::find($Nim)->delete();         
        return redirect()->route('mahasiswas.index')             
        -> with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
