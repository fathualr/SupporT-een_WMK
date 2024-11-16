<?php

namespace App\Http\Controllers;

use App\Http\Requests\KontenEdukatifRequest;
use App\Models\KataKunciKonten;
use Illuminate\Http\Request;
use App\Models\KontenEdukatif;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KontenEdukatifController extends Controller
{

    public function kontenEdukatif(Request $request, $id = null)
    {
        $search = $request->input('search');

        $kontenList = KontenEdukatif::with(['user', 'kataKunci'])
            ->orderBy('created_at', 'desc');

        if ($search) {
            $kontenList->where(function ($query) use ($search) {
                $query->where('judul', 'like', '%' . $search . '%')
                    ->orWhere('tipe', 'like', '%' . $search . '%')
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('nama', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('kataKunci', function ($kataKunciQuery) use ($search) {
                        $kataKunciQuery->where('nama', 'like', '%' . $search . '%');
                    });
            });
        }

        $kontenList = $kontenList->paginate(10);

        $selectedKonten = $id ? KontenEdukatif::with('user')->find($id) : null;

        return view('pasien/konten_edukatif', [
            'title' => 'Konten Edukatif',
            'kontenList' => $kontenList,
            'selectedKonten' => $selectedKonten,
            'search' => $search
        ]);
    }
    
    public function tenagaAhliKontenEdukatif($tipe = null)
    {
        return view('tenagaAhli/kelola_konten_edukatif', [
            "title" => "Kelola Konten Edukatif",
            'tipe' => null
        ]);
    }
        
    public function tenagaAhliKontenArtikel()
    {
        return view('tenagaAhli/kelola_konten_artikel', [
            "title" => "Kelola Konten Artikel"
        ]);
    }
    
    public function tenagaAhliKontenVideo()
    {
        return view('tenagaAhli/kelola_konten_video', [
            "title" => "Kelola Konten Video"
        ]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontenEdukatif = KontenEdukatif::with('user')->paginate(10);
        return view('admin/data_konten_edukatif', [
            "title" => "Kelola Konten Edukatif",
            "kontenEdukatif" => $kontenEdukatif,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/form/tambah_data_konten_edukatif', [
            "title" => "Tamabah Data Konten Edukatif"
        ]);
    }

    public function tenagaAhliCreate()
    {
        return view('tenagaAhli/form/tambah_data_konten_edukatif', [
            "title" => "Tambah Konten Edukatif"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KontenEdukatifRequest $request)
    {
        DB::beginTransaction();

        try {
            $kontenData = [
                'judul' => $request->judul,
                'tipe' => $request->tipe,
                'sumber' => $request->sumber,
                'id_user' => Auth::user()->id,
            ];

            $thumbnailPath = $request->file('thumbnail')->store('image/thumbnail-konten', 'public');
            $kontenData['thumbnail'] = $thumbnailPath;

            $kontenEdukatif = KontenEdukatif::create($kontenData);

            if ($request->tipe == 'video' && $request->has('link_youtube')) {
                // Konversi link YouTube
                $kontenData['link_youtube'] = $kontenEdukatif->convertToEmbedLink($request->link_youtube);
            }
        
            // Jika tipe adalah 'artikel', proses artikel
            if ($request->tipe == 'artikel' && $request->has('isi_artikel')) {
                $kontenData['isi_artikel'] = $request->input('isi_artikel');
            }

            if ($request->has('kata_kunci') && !empty($request->input('kata_kunci'))) {
                $kataKunci = explode(',', $request->input('kata_kunci'));

                $kataKunci = array_filter($kataKunci, function ($kata) {
                    return !empty(trim($kata));
                });

                if (!empty($kataKunci)) {
                    $kataKunciData = [];
                    foreach ($kataKunci as $kata) {
                        $kataKunciData[] = ['id_konten' => $kontenEdukatif->id, 'nama' => trim($kata)];
                    }
                    KataKunciKonten::insert($kataKunciData);
                }
            }

            DB::commit();
            $totalKontens = KontenEdukatif::count();
            $perPage = 10;
            $lastPage = ceil($totalKontens / $perPage);

            return redirect()->route('konten-edukatif.index', ['page' => $lastPage])
                            ->with('success', 'Konten edukatif berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()
                            ->with('error', 'Gagal menyimpan konten edukatif. Pesan error: ' . $e->getMessage())
                            ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kontenEdukatif = KontenEdukatif::with('user')->findOrFail($id);
        return view('admin/template/data_konten_edukatif', [
            "title" => "Kelola Konten Edukatif",
            "kontenEdukatif" => $kontenEdukatif,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kontenEdukatif = KontenEdukatif::with('user')->findOrFail($id);
        return view('admin/form/edit_data_konten_edukatif', [
            "title" => "Kelola Konten Edukatif",
            "kontenEdukatif" => $kontenEdukatif,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KontenEdukatifRequest $request, $id)
    {
        try {
            $kontenEdukatif = KontenEdukatif::findOrFail($id);

            $kontenData = [
                'judul' => $request->judul,
                'tipe' => $request->tipe,
                'sumber' => $request->sumber
            ];

            if ($request->hasFile('thumbnail')) {
                if ($kontenEdukatif->thumbnail) {
                    Storage::disk('public')->delete($kontenEdukatif->thumbnail);
                }

                $thumbnail = $request->file('thumbnail')->store('image/thumbnail-konten', 'public');
                $kontenData['thumbnail'] = $thumbnail;
            }

            if ($request->tipe == 'video' && $request->has('link_youtube')) {
                // Konversi link YouTube
                $kontenData['link_youtube'] = $kontenEdukatif->convertToEmbedLink($request->link_youtube);
            }
        
            // Jika tipe adalah 'artikel', proses artikel
            if ($request->tipe == 'artikel' && $request->has('isi_artikel')) {
                $kontenData['isi_artikel'] = $request->input('isi_artikel');
            }

            $kontenEdukatif->update($kontenData);

            $position = KontenEdukatif::orderBy('id')->pluck('id')->search($kontenEdukatif->id) + 1;
            $perPage = 10;
            $page = ceil($position / $perPage);
            
            return redirect()->route('konten-edukatif.index', ['page' => $page])
                            ->with('success', 'Data admin berhasil diubah!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data konten edukatif gagal diubah! Pesan error: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $kontenEdukatif = KontenEdukatif::findOrFail($id);

            if ($kontenEdukatif->thumbnail) {
                Storage::disk('public')->delete($kontenEdukatif->thumbnail);
            }

            $kontenEdukatif->delete();

            return redirect()->route('konten-edukatif.index')
                            ->with('success', 'Konten edukatif berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('konten-edukatif.index')
                            ->with('error', 'Konten edukatif gagal dihapus! Pesan error: ' . $e->getMessage());
        }
    }
}
