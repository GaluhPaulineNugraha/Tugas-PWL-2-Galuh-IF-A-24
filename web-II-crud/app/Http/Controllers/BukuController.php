<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use App\Models\DetailBuku;
use App\Models\Kategori;


class BukuController extends Controller
{
    public function index(Request $request)
    {

    //detail buku dari buku
    $buku = Buku::find(1); //select *from buku where id=i

    //buku dari detail
    $detailBuku = DetailBuku::find(3); //select *from detail_buku where id=3
    $buku = $detailBuku->buku; //select *from buku where id=detailBuku->buku_id
    // dd($detailBuku->buku->judul); //select * from buku where id==3

        $search = $request->keyword;

        $dataBuku = Buku::with(['kategori', 'detail'])
        ->when($search, function($query, $search){
            return $query->where('judul', 'like', "%{$search}%")
            ->orWhere('penulis', 'like', "%{$search}%")
            ->orWhereHas('detail', function($query) use ($search){
                $query->where('isbn', 'like', "%{$search}%");
            })
            ->orWhereHas('kategori', function($query) use ($search){
                $query->where('nama_kategori', 'like', "%{$search}%");
            });
        })
        ->orderBy('id', 'desc')
        ->paginate(5) //mksimal data yg ditampilkan di halaman 
        ->withQueryString();

        return view('pages.buku.daftar-buku', compact('dataBuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
    $kategori = Kategori::all();

    return view('pages.buku.form-create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->judul);

        $validated = $request->validate(
        [
        'judul' => 'required|min:5',
        'penulis' => 'required|min:5',
        'harga' => 'required|numeric',
        'tahun_terbit' => 'required|numeric',
        'kategori_id' => 'required',
        'isbn' => 'required',
        'jumlah_halaman' => 'required|numeric',
        ],
            [
                'judul.required'=>'waduh judul bukunya jangan dikosongkan ya!',
                'judul.min'=>'judulnya terlalu pendek, minimal 3 karakter',
                'penulis.required'=>'setiap buku harus ada nama penulisnya!'
            ]
        );
       
    $buku = Buku::create([
    'judul' => $request->judul,
    'penulis' => $request->penulis,
    'harga' => $request->harga,
    'tahun_terbit' => $request->tahun_terbit,
    'kategori_id' => $request->kategori_id,
    ]);

    DetailBuku::create([
    'buku_id' => $buku->id,
    'isbn' => $request->isbn,
    'jumlah_halaman' => $request->jumlah_halaman,
    ]);

        return redirect()->route('buku')->with('success', 'Buku baru berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //query db builder
        //$detailBuku = DB::table('buku')->where('id', $id)->firstOrFail();

        //orm
        // $detailBuku = Buku::find($id);
        $detailBuku = Buku::findOrFail($id);        

        return view('pages.buku.detail-buku', compact('detailBuku'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $detailBuku = Buku::with(['detail', 'kategori'])->findOrFail($id);

    $kategori = Kategori::all();

    return view('pages.buku.form-create', compact('detailBuku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'judul' => 'required|min:5',
                'penulis' => 'required|min:5',
                'harga' => 'required|numeric',
                'tahun_terbit' => 'required|numeric',  
                'kategori_id' => 'required',
                'isbn' => 'required',
                'jumlah_halaman' => 'required|numeric',           
            ],
            [
                'judul.required'=>'waduh judul bukunya jangan dikosongkan ya!',
                'judul.min'=>'judulnya terlalu pendek, minimal 3 karakter',
                'penulis.required'=>'setiap buku harus ada nama penulisnya!'
            ]
        );
        Buku::where('id', $id)->update([
    'judul' => $request->judul,
    'penulis' => $request->penulis,
    'harga' => $request->harga,
    'tahun_terbit' => $request->tahun_terbit,
    'kategori_id' => $request->kategori_id,
]);

DetailBuku::updateOrCreate(
    ['buku_id' => $id],
    [
        'isbn' => $request->isbn,
        'jumlah_halaman' => $request->jumlah_halaman,
    ]
);
        return redirect()->route('buku')->with('success', 'Data buku berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailBuku = Buku::findOrFail($id);        
        $detailBuku->delete();
        return redirect()->route('buku')->with('success', 'Data buku berhasil dihapus!');
        
    }
}
