<?php

namespace App\Http\Controllers;


use App\Exports\OprecStaffAllExport;
use App\Imports\OprecStaffImport;
use App\Models\OprecStaff;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\StaffMacImport;
use App\Models\OprecStaffResult;
use Exception;
use Illuminate\Http\Request;

class OprecStaffController extends Controller
{

    public function index()
    {
        return view('oprec_staff');
    }

    public function oprecStaffExport()
    {
        return Excel::download(new OprecStaffAllExport, 'oprec_staff.xlsx');
    }

    public function oprecStaffImport(Request $request)
    {
        $file = $request->file('file');
        $nameFile = $file->getClientOriginalName();
        $file->move('DataOprecStaff', $nameFile);

        Excel::import(new oprecStaffImport, public_path('/DataOprecStaff/' . $nameFile));
        return redirect('oprec_staff');
    }
    
    public function oprecMacImport(Request $request)
    {
        $file = $request->file('filemac');
        $nameFile = $file->getClientOriginalName();
        $file->move('DataMacStaff', $nameFile);

        Excel::import(new StaffMacImport, public_path('/DataMacStaff/' . $nameFile));
        return redirect('oprec_staff');
    }

    public function create()
    {
        $departemen = [
            'FISIKA', 'MATEMATIKA', 'STATISTIKA', 'KIMIA', 'BIOLOGI', 'AKTUARIA',
            'TEKNIK MESIN', 'TEKNIK KIMIA', 'TEKNIK FISIKA', 'TEKNIK SISTEM DAN INDUSTRI', 'TEKNIK MATERIAL DAN METALURGI',
            'TEKNIK SIPIL', 'ARSITEKTUR', 'TEKNIK LINGKUNGAN', 'PERENCANAAN WILAYAH DAN KOTA', 'TEKNIK GEOMATIKA', 'TEKNIK GEOFISIKA',
            'TEKNIK PERKAPALAN', 'TEKNIK SISTEM PERKAPALAN', 'TEKNIK KELAUTAN', 'TEKNIK TRANSPORTASI LAUT',
            'TEKNIK ELEKTRO', 'TEKNIK BIOMEDIK', 'TEKNIK KOMPUTER', 'TEKNIK INFORMATIKA', 'SISTEM INFORMASI', 'TEKNOLOGI INFORMASI',
            'DESAIN PRODUK', 'DESAIN INTERIOR', 'DESAIN KOMUNIKASI VISUAL', 'MANAJEMEN BISNIS', 'STUDI PEMBANGUNAN',
            'TEKNIK INFRASTRUKTUR SIPIL', 'TEKNIK MESIN INDUSTRI', 'TEKNIK ELEKTRO OTOMASI', 'TEKNIK KIMIA INDUSTRI', 'TEKNIK INSTRUMENTASI', 'STATISTIKA BISNIS',
        ];

        $fakultas = [
            'FAKULTAS SAINS DAN ANALITIKA DATA',
            'FAKULTAS TEKNOLOGI INDUSTRI DAN REKAYASA SISTEM',
            'FAKULTAS SIPIL, PERENCANAAN, DAN KEBUMIAN',
            'FAKULTAS TEKNOLOGI KELAUTAN',
            'FAKULTAS TEKNOLOGI ELEKTRO DAN INFORMATIKA CERDAS',
            'FAKULTAS DESAIN KREATIF DAN BISNIS DIGITAL',
            'FAKULTAS VOKASI'
        ];

        $angkatan = [
            '2020',
            '2021'
        ];

        $pil_divisi = [
            'Technical Division - Central Event Subdivision',
            'Technical Division - Regional Event Subdivision',
            'Technical Division - Material Subdivision',
            'Technical Division - Operational Subdivision',
            'Secretarial Division',
            'IT Development Division',
            'Branding Division - Content Creator Subdivision',
            'Branding Division - Documentation Subdivision',
            'Branding Division - Creative Subdivision',
            'Branding Division - Campaign & Marketing Subdivision',
            'Public Relation Division',
            'Finance Division - Fundraising Subdivision',
            'Finance Division - Sponsoship Subdivision'
        ];

        return view('oprec.form-oprec', compact("departemen", "fakultas", "angkatan", "pil_divisi"));
    }

    public function store(Request $request)
    {
        $errorMessage = [
            'required' => "Kolom ini wajib diisi!",
            'max' => "kolom ini harus diisi maksimal :max karakter!",
            'size' => "kolom ini harus diisi tepat :size karakter!",
            'numeric' => "kolom ini harus berisi karakter angka",
            'different' => "Pilihan 1 dan 2 tidak boleh sama!",
            'unique' => "NRP yang kamu masukkan sudah terdaftar!",
        ];

        $error = $request->validate([
            "nama_lengkap" => "required",
            "nrp" => "required|numeric|unique:oprec_staff,nrp",
            "fakultas" => "required",
            "departemen" => "required",
            "angkatan" => "required",
            "kota_asal" => "required",
            "apa_itu_ilits" => "required|max:512",
            "motivasi_ilits" => "required|max:512",
            "pilihan_1" => "required",
            "alasan_pilihan_1" => "required|max:512",
            "pilihan_2" => "required|max:512|different:pilihan_1",
            "alasan_pilihan_2" => "required",
            "komitmen" => "required",
        ], $errorMessage);

        try {
            $calon_staff = OprecStaff::create([
                "nama_lengkap" => $request->nama_lengkap,
                "nrp" => $request->nrp,
                "fakultas" => $request->fakultas,
                "departemen" => $request->departemen,
                "angkatan" => $request->angkatan,
                "kota_asal" => $request->kota_asal,
                "apa_itu_ilits" => $request->apa_itu_ilits,
                "motivasi_ilits" => $request->motivasi_ilits,
                "pilihan_1" => $request->pilihan_1,
                "alasan_pilihan_1" => $request->alasan_pilihan_1,
                "pilihan_2" => $request->pilihan_2,
                "alasan_pilihan_2" => $request->alasan_pilihan_1,
                "komitmen" => $request->komitmen,
            ]);

            return view('oprec.form-success', [
                "nama" => $calon_staff->nama_lengkap
            ]);
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function search()
    {
        return view('oprec.form-search');
    }

    public function announcement(Request $request)
    {
        $nrp = $request->nrp;
        if(OprecStaff::where('nrp', $nrp)->exists()||OprecStaffResult::where('nrp', $nrp)->exists()){
            if(OprecStaffResult::where('nrp', $nrp)->exists()) {
                $oprec_staff = OprecStaffResult::where('nrp', $nrp)->first();
                $is_staff = 1; 
            } else if (OprecStaff::where('nrp', $nrp)->first()) {
                $oprec_staff = OprecStaff::where('nrp', $nrp)->first();
                $oprec_staff->nama = $oprec_staff->nama_lengkap;
                $is_staff = 0;
            }
            return view("oprec.anouncement", ["data" => $oprec_staff, "is_staff" => $is_staff]);            
        }
        return redirect()->back()->with('message', 'NRP tidak ditemukan!');
    }
}
