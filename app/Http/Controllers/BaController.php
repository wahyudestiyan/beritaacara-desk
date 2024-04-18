<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Ba;
use App\Models\julda;
use App\Models\juldabelum;
use App\Models\instansi;
use App\Models\Signature;
use App\Models\SignatureProdusen;
use Illuminate\Support\Facades\DB;

class BaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bas=Ba::orderBy('created_at', 'DESC')->get();
        $keyword=$request->keyword;
        $bas=Ba::where('instansi', 'LIKE', '%'.$keyword.'%')
        ->orWhere('tahun', 'LIKE', '%'.$keyword.'%')
        ->paginate(15); 
    
        
        return view('ba.index', ['bas' => $bas]);
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ba.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Product::create($request->all());
       // return redirect()->route('products')->with('success', 'Product added successfully');

        $validatedData = $request->all();
        //dd($request->all());
        $bas= new Ba;
        $bas->instansi=$validatedData['instansi'];
        $bas->tanggal_ba=$validatedData['tanggal_ba'];
        $bas->tahun=$validatedData['tahun'];
        $bas->save();
            
        foreach ($request->judul as $key=>$judul) {
            $juldas=new julda;
            $juldas->judul_data=$request->judul[$key];
            $juldas->julket=$request->julket[$key];
            $juldas->bas_id=$bas->id;
            $juldas->created_at=$bas->created_at;
            $juldas->updated_at=$bas->updated_at;
            $juldas->save();  
             
            foreach ($request->juduldata as $key=>$juduldata) {
                $juldabelums=new juldabelum;
                $juldabelums->bas_id=$bas->id;
                $juldabelums->created_at=$bas->created_at;
                $juldabelums->updated_at=$bas->updated_at;
                $juldabelums->juduldata_belum=$request->juduldata[$key];
                $juldabelums->julket_belum=$request->julketbelum[$key];
                $juldabelums->save(); 
            };
                };
    return redirect()->route('ba')->with('success','BA berhasil ditambahkan!'); 
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bas=Ba::findOrfail($id);
        // return view ('ba.show', compact('bas'));
        $juldas = julda::where('bas_id', $id)->get();
        return view ('ba.show', compact('juldas','bas'));
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bas=Ba::findOrfail($id);
        return view ('ba.edit', compact('bas'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bas=Ba::findOrfail($id);
        $bas->update($request->all());
        return redirect()->route('ba')->with('success','BA berhasil diedit!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $bas=Ba::findOrfail($id);
            $bas->delete();
            return redirect()->route('ba')->with('success','BA berhasil dihapus!');
    }

    public function tandatangan()
    {
        $signatures=Signature::orderBy('created_at', 'DESC')->get();
        return view('ba.signature', compact('signatures'));
    }
    public function tandatanganprodusen()
    {
        $signature_produsens=SignatureProdusen::orderBy('created_at', 'DESC')->get();
        return view('ba.signatureprodusen', compact('signature_produsens'));
    }
    public function save(Request $request)
    {
        $folderPath = storage_path('app/public/signatures'); // create signatures folder in public directory
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.' . $image_type;
        file_put_contents($file, $image_base64);

        // Save in your data in database here.
        Signature::create([
         'name' => $request->name,
         'signature' => uniqid() . '.' . $image_type
        ]);

        return back()->with('success', 'Berhasil Tanda Tangan');
    }

    public function saveprod(Request $request)
    {
        $folderPath = storage_path('app/public/signatureprodusens'); // create signatures folder in public directory
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.' . $image_type;
        file_put_contents($file, $image_base64);

        SignatureProdusen::create([
            'nameprodusen' => $request->nameprodusen,
            'signatureprod' => uniqid() . '.' . $image_type
           ]);

        return back()->with('success', 'Berhasil Tanda Tangan');
        }

}