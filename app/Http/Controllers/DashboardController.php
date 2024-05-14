<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ba;
use App\Models\julda;
use App\Models\juldabelum;
use App\Models\instansi;
use App\Models\Signature;
use App\Models\SignatureProdusen;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mengambil jumlah total instansi yang terdaftar
        $total_instansi_terdaftar = Instansi::count();
    
        // Mengambil data berita acara dari database
        $bas = Ba::all();
        
        // Menghitung jumlah total dokumen
        $total_dokumen = $bas->count();
    
        // Menghitung jumlah dokumen berdasarkan jenis BA
        $jumlah_statistik_sektoral = 0;
        $jumlah_data_geospasial = 0;
    
        foreach ($bas as $ba) {
            if ($ba->jenis_ba === 'Pemenuhan Data Statistik Sektoral') {
                $jumlah_statistik_sektoral++;
            } elseif ($ba->jenis_ba === 'Pemenuhan Data Geospasial') {
                $jumlah_data_geospasial++;
            }
        }
    
        // Inisialisasi variabel untuk menyimpan instansi yang sudah input BA
        $instansi_diinput_statistik_sektoral = [];
        $instansi_diinput_geospasial = [];
    
        // Looping berita acara untuk menghitung jumlah instansi yang sudah input BA Pemenuhan Data Statistik Sektoral dan Geospasial
        foreach ($bas as $ba) {
            if ($ba->jenis_ba === 'Pemenuhan Data Statistik Sektoral' && $ba->instansi !== null) {
                $instansi_diinput_statistik_sektoral[] = $ba->instansi;
            } elseif ($ba->jenis_ba === 'Pemenuhan Data Geospasial' && $ba->instansi !== null) {
                $instansi_diinput_geospasial[] = $ba->instansi;
            }
        }

        // Menghitung jumlah instansi yang sudah input BA Pemenuhan Data Statistik Sektoral dan Geospasial
        $jumlah_instansi_input_ba_statistik_sektoral = count(array_unique($instansi_diinput_statistik_sektoral));
        $jumlah_instansi_input_ba_geospasial = count(array_unique($instansi_diinput_geospasial));

        // Menghitung persentase instansi yang sudah input BA Pemenuhan Data Statistik Sektoral dan Geospasial
        $persentase_instansi_statistik_sektoral = ($jumlah_instansi_input_ba_statistik_sektoral / $total_instansi_terdaftar) * 100;
        $persentase_instansi_geospasial = ($jumlah_instansi_input_ba_geospasial / $total_instansi_terdaftar) * 100;

                    // Mengambil semua instansi yang terdaftar
            $instansi_terdaftar = Instansi::pluck('nama_instansi')->toArray();

            // Menentukan instansi yang belum input BA Pemenuhan Data Statistik Sektoral
            $instansi_belum_input_statistik_sektoral = array_diff($instansi_terdaftar, $instansi_diinput_statistik_sektoral);

            // Menentukan instansi yang belum input BA Pemenuhan Data Geospasial
            $instansi_belum_input_geospasial = array_diff($instansi_terdaftar, $instansi_diinput_geospasial);

            // Menyimpan data yang akan ditampilkan di dashboard analitik ke dalam variabel
            $data_dashboard = [
                'total_instansi_terdaftar' => $total_instansi_terdaftar,
                'total_dokumen' => $total_dokumen,
                'jumlah_statistik_sektoral' => $jumlah_statistik_sektoral,
                'jumlah_data_geospasial' => $jumlah_data_geospasial,
                'jumlah_instansi_input_ba_statistik_sektoral' => $jumlah_instansi_input_ba_statistik_sektoral,
                'jumlah_instansi_input_ba_geospasial' => $jumlah_instansi_input_ba_geospasial,
                'persentase_instansi_statistik_sektoral' => $persentase_instansi_statistik_sektoral,
                'persentase_instansi_geospasial' => $persentase_instansi_geospasial,
                'instansi_belum_input_statistik' => $instansi_belum_input_statistik_sektoral,
                'instansi_belum_input_geospasial' => $instansi_belum_input_geospasial,
            ];

        return view('dashboard', $data_dashboard);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
