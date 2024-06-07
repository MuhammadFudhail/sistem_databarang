<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\Product;
class AdminController extends Controller
{
    public function index(){
        return view("admin.index");
    }

    public function pelanggan(){
        $pelanggan = Pelanggan::query()->latest()->get();
        return view("admin.pelanggan",[
            "pelanggan"=>$pelanggan,
        ]);
    }

    public function penjualan(){
        $Penjualan = Penjualan::with("pelanggan","product")->latest()->get();
        return view("admin.penjualan",[
            "Penjualan"=>$Penjualan,
        ]);
        // return $Penjualan;
    }

    public function product(){
        $product = Product::query()->latest()->get();
        return view("admin.product",[
            "product"=>$product,
        ]);
    }

    public function createpelanggan(){
        
        return view("admin.create-pelanggan");
    }

    public function storeproduct(Request $request):RedirectResponse{
        $data = $request->validate([
            'nama'      => 'required|max:125',
            'deskripsi'      => 'required|max:125',
            'harga'      => 'required|max:125',
            'stok'      => 'required|max:125',
            'kategori'      => 'required|max:255',
            
        ]);
    

        Product::create($data);

  
        return redirect("product")->with(['success' => 'Data Berhasil Disimpan!']);
        // return ;
    }
    public function storepelanggan(Request $request){
        $data = $request->validate([
            'nama'      => 'required|max:125',
            'email'      => 'email',
            'telepon'      => 'required|max:125',
            'alamat'      => 'required|max:125',
            'tanggal_bergabung' => 'date',
            
        ]);
        Pelanggan::create($data);

  
        return redirect("pelanggan")->with(['success' => 'Data Berhasil Disimpan!']);
        // return $data;
    }
    public function storepenjualan(Request $request){
        $data = $request->validate([
            "nama_product"=>"required|max:125",
            "nama_pelanggan"=>"required|max:125",
            "jumlah"=>"required|max:125",
            "total_harga"=>"required|max:125",
            "tanggal_penjualan"=>"date",
        ]);
        $product = Product::query()->where('nama', $data['nama_product'])->first();
        $pelanggan = Pelanggan::query()->where('nama', $data['nama_pelanggan'])->first();
        // return $product->id;
        if(!$product && !$pelanggan ){
            return redirect("penjualan");
        }
        Penjualan::create([
            "product_id"=> $product->id,
            "pelanggan_id"=> $pelanggan->id,
            "jumlah"=> $data['jumlah'],
            "total_harga"=> $data['total_harga'],
            "tanggal_penjualan"=> $data['tanggal_penjualan'],
        ]);

        // redirect to index
        return redirect("penjualan")->with(['success' => 'Data Berhasil Disimpan!']);
        // return $product->id;
    }
    


    public function createpenjualan(){
        return view("admin.create-penjualan");
    }
    public function createproduct(){
        return view("admin.create-product");
    }
    public function viewpelanggan(Request $request){
        $id = $request->query("id");
        $pelanggan = Pelanggan::findOrFail($id);
        // return view('show-transaksi');
        return view("admin.view-pelanggan",[
            "pelanggan"=>$pelanggan,
        ]);
        // return $pelanggan;
    }
    
    public function viewpenjualan(Request $request){
        $id = $request->query("id");
        $penjualan = Penjualan::findOrFail($id);
        return view("admin.view-penjualan",[
            "penjualan"=>$penjualan,
        ]);
    }

    public function viewproduct(Request $request){
        $id = $request->query("id");
        $product = Product::findOrFail($id);
        return view("admin.view-product",[
            "product"=>$product,
        ]);
    }

    public function deletepelanggan(Request $request){
        $id = $request->query("id");
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();
        return redirect("pelanggan")->with(['success' => 'Data Berhasil dihapus!']);
    }


    public function deletepenjualan(Request $request){
        $id = $request->query("id");
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();
        return redirect("penjualan")->with(['success' => 'Data Berhasil dihapus!']);
    }


    public function deleteproduct(Request $request){
        $id = $request->query("id");
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect("product")->with(['success' => 'Data Berhasil dihapus!']);
    }






    public function editpenjualan(Request $request){
        $id = $request->query("id");
        $penjualan = Penjualan::findOrFail($id);
        // return $pelanggan;
        return view("admin.edit-penjualan",compact("penjualan"));
    }

    public function editpelanggan(Request $request){
        $id = $request->query("id");
        $pelanggan = Pelanggan::findOrFail($id);
        // return $pelanggan;
        return view("admin.edit-pelanggan",compact("pelanggan"));
        // return view("admin.edit-pelanggan");
    }

    public function editproduct(Request $request){

        $id = $request->query("id");
        $product = Product::findOrFail($id);
        // return $pelanggan;
        return view("admin.edit-product",compact("product"));
    }

    public function updatepelanggan(Request $request){
        $id = $request->query("id");
        $pelanggan = Pelanggan::findOrFail($id);

        $data = $request->validate([
            'nama'      => 'required|max:125',
            'email'      => 'email',
            'telepon'      => 'required|max:125',
            'alamat'      => 'required|max:125',
            'tanggal_bergabung' => 'date',
            
        ]);
        $pelanggan->update($data);

  
        return redirect("pelanggan")->with(['success' => 'Data Berhasil ubah!']);
       
    }

    public function updatepenjualan(Request $request){
        $id = $request->query("id");
        $penjualan = Penjualan::findOrFail($id);

        $data = $request->validate([
            "nama_product"=>"required|max:125",
            "nama_pelanggan"=>"required|max:125",
            "jumlah"=>"required|max:125",
            "total_harga"=>"required|max:125",
            "tanggal_penjualan"=>"date",
            
        ]);
        $product = Product::query()->where('nama', $data['nama_product'])->first();
        $pelanggan = Pelanggan::query()->where('nama', $data['nama_pelanggan'])->first();

        if(!$product && !$pelanggan ){
            return redirect("penjualan");
        }

        $penjualan->update([
            "product_id"=> $product->id,
            "pelanggan_id"=> $pelanggan->id,
            "jumlah"=> $data['jumlah'],
            "total_harga"=> $data['total_harga'],
            "tanggal_penjualan"=> $data['tanggal_penjualan'],
        ]);

  
        return redirect("penjualan")->with(['success' => 'Data Berhasil ubah!']);
        
        
    }

    public function updateproduct(Request $request){
        $id = $request->query("id");
        $product = Product::findOrFail($id);

        $data = $request->validate([
            'nama'      => 'required|max:125',
            'deskripsi'      => 'required|max:125',
            'harga'      => 'required|max:125',
            'stok'      => 'required|max:125',
            'kategori'      => 'required|max:255',
            
        ]);
        $product->update($data);
  
        return redirect("product")->with(['success' => 'Data Berhasil ubah!']);
        
    }
}
