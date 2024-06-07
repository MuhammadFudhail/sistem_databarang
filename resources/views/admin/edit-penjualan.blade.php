<x-app-layout>

    <style>
            .admin--container{
                color:black;
                position: absolute;
                padding-left: 20px;
                left: 22%;
                top: 9%;
                width: 75%;
                height: 100%;
                
            }
        
            .tambah-data{
           color:black;
           position: relative;
           left: 0;
           right: 0;
           width: 98%;
           padding-left: 20px;
       }
       .tambah-data--togle{
           position: relative;
           padding-left: 20px;
           left: 22%;
           top: 9%;
           width: 100%;
           
       }
       .container-tambah-data{
           box-shadow: 1px 1px 10px rgb(165, 165, 165);
           padding: 20px;
           border-top: 3px solid rgb(94, 173, 247);
           width: 100%;
           /* background-color: rgb(231, 61, 61); */
        }
        .container-tambahTogle{
            /* background-color: red; */
            width: 75%;
           padding: 20px;
           /* width: 100%; */
       }
       .form{
        display: grid;
        row-gap: 20px;
        /* background-color: red; */
        /* width: 100%; */
        margin: 0
       }
       .form>div{
        /* width: 100%; */
       }
       .form>div>label{
        display: inline-block;
        width: 150px;
        /* background-color: red; */
        text-align: right;
        margin-right: 10px;
        font-weight: 500;
       }
       .form>div>input{
        width: 80%;
        padding-block: 5px;
        padding-left: 20px;
    }
    .form>div>select{
                background-color: #f0f0f0; /* Warna latar belakang */
                color: #333; /* Warna teks */
                font-size: 16px; /* Ukuran font */
                padding: 10px; /* Padding */
                border: 1px solid #ccc; /* Border */
                border-radius: 4px; /* Border radius */
                width: 200px; /* Lebar */
                -webkit-appearance: none; /* Hilangkan tampilan default di Webkit */
                -moz-appearance: none; /* Hilangkan tampilan default di Mozilla */
                appearance: none; /* Hilangkan tampilan default secara umum */
                width: 50%;
    }
    
    .select2-container .select2-selection--single {
        height: 38px; /* Tinggi kotak */
        border: 1px solid #ccc; /* Border */
        border-radius: 4px; /* Border radius */
        padding: 8px; /* Padding */
    }
    
    .select2-container .select2-selection--single .select2-selection__rendered {
        color: #333; /* Warna teks */
        font-size: 16px; /* Ukuran font */
    }
    
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 36px; /* Tinggi panah dropdown */
    }
    
    .aksi-tambah>input[type="submit"]{
        width: 120px;
        text-align: center;
        border: none;
        background-color: rgb(31, 134, 194);
        color: white;
        font-size: 1rem;
        padding-right: 20px;
        padding-block: 10px;
        cursor: pointer;
        border-radius: 5px;
    }
    .aksi-tambah > a{
        padding:3px 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        border: 1px solid rgba(192, 188, 188, 0.404);
        height: 30px;
    }
    .aksi-tambah{
        display: flex;
        padding-left: 110px;
        column-gap: 20px;
        margin-top: 20px;
        align-items: center;
        /* justify-content: center; */
        
        /* background-color: red; */
    
    }
       
        </style>
        <div class="admin--container" id="admin">
            <div class="table-container" id="table">
    
                <h2 style="font-size:2rem;font-weight: 450;padding-block: 10px;">Update Penjualan</h2>
                <div class="container-tambah-data" id="contambahData">
                   <h3 style="font-weight: 450;margin-bottom:30px;text-transform: capitalize">Update Data Penjualan</h3>
                   <div style="padding-left: 70px">
                     <form action="/updatepenjualan/?id={{$penjualan->id}}" class="form" id="myForm" method="POST" >

                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <label for="nama_product" class="block text-gray-700 text-sm font-bold mb-2">Nama Product: </label>
                            <input type="text" id="nama_product" name="nama_product" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('nama_product') is-invalid @enderror" value="{{old('nama_product')}}">
                        </div>
                        @error('produk_id')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror

                        <div class="mb-4">
                            <label for="nama_product" class="block text-gray-700 text-sm font-bold mb-2">nama pelanggan: </label>
                            <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('nama_pelanggan') is-invalid @enderror" value="{{old('nama_pelanggan')}}">
                        </div>
                        @error('pelanggan_id')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror

                        <div class="mb-4">
                            <label for="jumlah" class="block text-gray-700 text-sm font-bold mb-2">Jumlah</label>
                            <input type="text" id="jumlah" name="jumlah" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('jumlah') is-invalid @enderror" value="{{old('jumlah')}}">
                        </div>
                        @error('jumlah')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror

                        <div class="mb-4">
                            <label for="total_harga" class="block text-gray-700 text-sm font-bold mb-2">Total Harga: </label>
                            <input type="text" id="total_harga" name="total_harga" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('total_harga') is-invalid @enderror" value="{{old('total_harga')}}">
                        </div>
                        @error('total_harga')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror

                        <div class="mb-4">
                            <label for="tanggal_penjualan" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Penjualan: </label>
                            <input type="date" id="tanggal_penjualan" name="tanggal_penjualan" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('tanggal_penjualan') is-invalid @enderror" value="{{old('tanggal_penjualan')}}">
                        </div>
                        @error('tanggal_penjualan')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                         
                         <div class="aksi-tambah">
                             {{-- <a onclick="goBack()">kembali ke data anggota </a> --}}
                             <input type="submit" value="selesai" >
                         </div>
                     </form>
                 </div>
                </div>
            </div>
        </div>
          
               
          
    </x-app-layout>