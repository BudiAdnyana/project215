<?php

namespace App\Http\Controllers\API;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo 'berhasil';
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validasi = Validator::make($request->all(), [
            "name"          => "required",
            "description"   => "required",
            "price"         => "required|integer",
            "category_id"   => "required|integer"
        ]);

        if($validasi->passes()){
            $data = Product::create($request->all());

            return response()->json([
                'pesan' => 'Data Berhasil Ditambahkan', 
                'data' => $data
            ], 200);
        }
        return response()->json([
            'pesan' => 'Data Gagal Ditambahkan',
            'data' => $validasi->errors()->all()
        ]);


       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function show(Product $data)
    // {
    //     //
    //     return $data
    // }

    public function show($data)
    {
        //
        $detail = Product::where('id', $data)->first();

        if(empty($detail)){
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        }
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan', 
            'data' => $detail
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Product $id)
    // {
    //     //
    //     $id->delete();
    //     return response()->json([
    //         'pesan' => 'Data Berhasil Dihapus'
    //     ]);
    // }
    public function destroy($id)
    {
        $data = Product::where('id', $id)->first();
        if(empty($data)){
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        }
        $data->delete();
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $data
        ], 200);
    }
}
