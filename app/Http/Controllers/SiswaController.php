<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Siswa;
use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;


class SiswaController extends Controller
{
    public function simpanregister(Request $request)
    {
        $data = User::Create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'level' => 'guru',
            'remember_token' => Str::random(60),
        ]);
        return redirect('/masuk');
    }

    public function registersiswa()
    {
        return view('register');
    }
    public function register()
    {
        return view('registerguru');
    }
    public function simpansiswa(Request $request)
    {

        $data = User::Create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'level' => 'siswa',
            'remember_token' => Str::random(60),
        ]);

        return redirect('/masuk');
    }

    public function indexadmin()
    {
        return view('admin.index');
    }
    public function indexguru()
    {
        return view('guru.index');
    }

    public function indexsiswa()
    {
        return view('siswa.index');
    }

    public function siswa()
    {
        $data = Siswa::all();
        return view('tabelsiswa', compact('data'));
    }
    public function tambah()
    {
        $data = Siswa::all();
        return view('tambahsiswa', compact('data'));
    }
    public function insert(Request $request)
    {
        $data = Siswa::create($request->all());
        return redirect()->route('siswa')->with('message', 'Data berhasil ditambahkan');
    }

    public function tampil($id)
    {
        $data = Siswa::findOrFail($id);
        $data = Siswa::find($id);

        return view('tampilsiswa', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Siswa::findOrFail($id);
        $data = Siswa::find($id);

        $data->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'spp' => $request->spp,

        ]);

        return redirect()->route('siswa')->with('message', 'Data berhasil di edit');
    }

    public function delete($id)
    {
        $data = Siswa::find($id);
        $data->delete($id);
        return redirect()->route('siswa')->with('message', 'data berhasil di hapus');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    // public function pdf()
    // {
    //     $data = Siswa::all();

    //     view()->share('data', $data);
    //     $pdf = Pdf::loadview('pdf.pdfdatasiswa-pdf');
    //     return $pdf->download('Data.pdf');
    // }


    public function nilai()
    {
        $data = Nilai::all();
        return view('nilai.tabel', compact('data'));
    }
    public function tambahn()
    {
        $data = Nilai::all();
        return view('nilai.tambah', compact('data'));
    }
    public function insertn(Request $request)
    {
        $data = Nilai::create($request->all());
        return redirect()->route('nilai')->with('message', 'Data berhasil ditambahkan');
    }
    public function deleten($id)
    {
        $data = Nilai::find($id);
        $data->delete($id);
        return redirect()->route('nilai')->with('message', 'data berhasil di hapus');
    }
    public function tampiln($id)
    {
        $data = Nilai::findOrFail($id);
        $data = Nilai::find($id);

        return view('nilai.tampil', compact('data'));
    }

    public function updaten(Request $request, $id)
    {
        $data = Nilai::findOrFail($id);
        $data = Nilai::find($id);

        $data->update([
            'nor' => $request->nor,
            'ada' => $request->ada,
            'pro' => $request->pro,

        ]);

        return redirect()->route('nilai')->with('message', 'Data berhasil di edit');
    }

    // public function pdf2()
    // {
    //     $data = Nilai::orderBy('nama')->get();
    //     $pdf = PDF::loadView('siswa.pdf', compact('data'));
    //     return $pdf->download('siswa.pdf');
    // }
    public function login()
    {
        return view('login');
    }
    public function loginproses(Request $request)
    {

        // dd('ak');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 'guru'])) {
            return redirect('/indexguru');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 'siswa'])) {
            return redirect('/indexsiswa');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/indexadmin');
        }
        else{
            return redirect()->back()->with('password','password salah');
        }
    }
}
