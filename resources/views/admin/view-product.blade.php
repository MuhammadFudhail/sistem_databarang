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
           box-shadow: 1px 1px 5px rgba(165, 165, 165, 0.199);
           padding: 20px;
           /* border-top: 3px solid rgb(94, 173, 247); */
           width: 100%;
           /* background-color: rgb(231, 61, 61); */
        }
        .container-tambahTogle{
            /* background-color: red; */
            width: 75%;
           padding: 20px;
           /* width: 100%; */
       }

       body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    /* Gaya untuk container data */
    .container-tambah-data {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        /* margin: 20px; */
        /* max-width: 600px; */
    }

    /* Gaya untuk judul */
   

    /* Gaya untuk setiap item data */
    .data-item {
        margin-bottom: 20px;
    }

    /* Gaya untuk label data */
    .data-label {
        font-weight: bold;
        color: #666666;
        margin-bottom: 5px;
    }

    /* Gaya untuk nilai data */
    .data-value {
        color: #333333;
    }

    /* Gaya untuk garis pemisah */
    .separator {
        border-bottom: 1px solid #eeeeee;
        margin-bottom: 20px;
    }
    h2 {
        font-size: 1.8rem;
        font-weight: bold;
        color: #333333;
        margin-bottom: 20px;
        /* text-align: center; */
    }

    /* Gaya untuk setiap item data */
    .data-item {
        margin-bottom: 20px;
    }

    /* Gaya untuk label data */
    .data-label {
        font-weight: bold;
        color: #666666;
        margin-bottom: 5px;
    }

    /* Gaya untuk nilai data */
    .data-value {
        color: #333333;
    }

    /* Gaya untuk garis pemisah */
    .separator {
        border-bottom: 1px solid #eeeeee;
        margin-bottom: 20px;
    }
    .container-tambah-data {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        /* margin: 20px; */
        /* max-width: 600px; */
    }
    </style>
    <div class="admin--container" id="admin">
        <div class="tambah-data" id="tambah">
            <h2 style="font-size:1.8rem;font-weight: 450;padding-block: 20px;">Show Product</h2>
            <div class="container-tambah-data" id="contambahData">
                <div class="tambah-data" id="tambah">
                    <div class="container-tambah-data" id="contambahData" style="margin-bottom: 30px;">
                        <div style="display: grid;row-gap: 20px;">
                            <div style="display: flex">
                                <p style="font-weight: 500; ">ID: </p><span id="id" style="margin-left: 10px;">{{$product->nama}}</span>
                            </div>
                            <div style="display: flex">
                                <p style="font-weight: 500; ">ID: </p><span id="id" style="margin-left: 10px;">{{$product->deskripsi}}</span>
                            </div>
                            <div style="display: flex">
                                <p style="font-weight: 500; ">ID: </p><span id="id" style="margin-left: 10px;">{{$product->harga}}</span>
                            </div>
                            <div style="display: flex">
                                <p style="font-weight: 500; ">ID: </p><span id="id" style="margin-left: 10px;">{{$product->stok}}</span>
                            </div>
                            <div style="display: flex">
                                <p style="font-weight: 500; ">ID: </p><span id="id" style="margin-left: 10px;">{{$product->kategori}}</span>
                            </div>
                    
                        </div>
                    </div>
                    <a href="/product" style="color: white;background-color: rgb(105, 171, 236);padding: 6px 20px;border-radius: 5px;text-decoration: none;">kembali</a>
                </div>
    
            </div>
        </div>
    <div >
    </x-app-layout>
 