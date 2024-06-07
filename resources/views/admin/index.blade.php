<style>
      .brda{
        position: absolute;
        padding-left: 20px;
        left: 22%;
        width: 75%;
        height: 100%;
        top: 9%;
    }
    table{
        border-collapse: collapse;
        width: 100%;
      
    }
   
    tr,th{
        border: 1px solid rgb(182, 182, 182);
    }
   
    th,td{
        padding-left:10px;
        padding-block: 10px;
        text-align: left;
        text-transform: capitalize;
    }
    tbody{
        background-color: rgba(104, 102, 102, 0.103);
    }
    .table-container{
        box-shadow: 1px 1px 10px rgb(165, 165, 165);
        padding: 20px;
        width: 75%;
        position: fixed
    }
    .table--togle{
        box-shadow: 1px 1px 10px rgb(165, 165, 165);
        padding: 20px;
        width: 75%;
    }
   
    .td-aksi{
        display:flex;
        column-gap:10px;
        /* width: 10%; */
        justify-content: center;
        /* background-color: red; */
    }
    .td-aksi> a{
        padding: 0;
        padding-inline: 5px;
        padding-top: 5px;
        border-radius: 5px; 
        background-color: rgb(71, 163, 199);
        color: white;
        text-decoration: none;
    }
    .td-aksi> a:nth-child(2){
        background-color: rgb(0, 0, 0);
    }
    .td-aksi> a:nth-child(3){
        background-color: red;
    }
    .td-aksi> a>span>.bx{
        font-size: 1.5rem;
        padding: 0;
    }

    .brda > h2{
        font-weight: 300px;
    }
    
    .container--beranda{
        display: grid;
        grid-template-columns: 260px 260px 260px 260px;
        column-gap: 50px; 
        margin-block: 40px; 
       /* background-color:red; */
       /* justify-content: center;
       align-items: center;
       display: flexbox */

    }
    .container--beranda--togle{
        grid-template-columns: 220px 220px 220px 220px;
    }
    .container--beranda > div {
        /* background-color: red; */
        box-shadow: 1px 1px 10px rgb(182, 177, 177);
    }
    .container--beranda > div  > .bx{
        padding: 30px;
        background-color: rgb(39, 160, 197);
        font-size: 3rem;
        color: white;
        
    }
    
    .container--beranda--togle > div  > .bx{
        padding: 20px;
    }
  
    .container--beranda > div > div{
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 20px;
        /* align-items: center */
    }
    .container--beranda > div > div> h3{
        font-size: 1rem
    }
</style>
<x-app-layout>
<div  id="brd" class="brda">
    <h2 style="padding-top: 20px; font-weight: 500;font-size:2rem; ">
        Beranda
    </h2>
    <div id="contberanda" class="container--beranda" >
            <div  style="display: flex" >
                <i class='bx bx-money-withdraw'></i>
                <div>
                    <h3>PENJUALAN<h3>
                </div>
    
            </div>
            <div  style="display: flex">
                <i class='bx bxs-blanket'  style="background-color: rgb(201, 170, 34)"></i>
                <div>
                    <h3>PRODUK<h3>
                </div>
    
            </div>
            <div  style="display: flex">
                <i class='bx bx-user-circle' style="background-color: rgb(0, 255, 128)"></i>
                <div >
                    <h3>ANGGOTA<h3> 
                </div>
            </div>
        </div>
        <div>
            <div class="table-container" id="table">
                <h2 style="font-size:1.5rem;margin-bottom:1rem; font-weight: 500">Barang Barang Terbaru</h2>
                <table>
                    <thead >
                        <tr style="font-weight: 100;">
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            {{-- <th>aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <!-- @foreach ($bukus as $buku)
                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{ $buku->judul_buku }}</td>
                            <td>{{  $buku->pengarang }}</td>
                            <td>{{  $buku->tahun }}</td>
                            <td>{{  $buku->klasifikasi }}</td>
                            <td>{{  $buku->jumlah }}</td>
                            <td>
                                <div class="td-aksi">
        
                                    <a href="">
                                        <span><i class='bx bx-show-alt'></i></span>
                                    </a>
                                    <a href="">
                                        <span><i class='bx bxs-edit-alt'></i></span>
                                    </a>
                                    <a href="">
                                        <span><i class='bx bx-eraser'></i></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                            
                        @endforeach --> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
       
</x-app-layout>