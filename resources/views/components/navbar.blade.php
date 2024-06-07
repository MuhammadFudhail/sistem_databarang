<nav class="navbar" id="navbar">
    <div class="menu--navbar" id="menuNav">
        <div style="background-color:#3b556e;padding-left:20px;padding-top:11px;padding-bottom:11px; ">
            <h1 style="text-transform: uppercase;" >
                Ajwa Komputer
            </h1>
        </div>
        <div style="padding: 20px;">
            <div>
                <div class="img--navbar">
                    <img src="https://image.pngaaa.com/61/4901061-middle.png" style="object-fit: cover;" alt="avtar">
                    <div>
                        <h2>Nama Admin</h2>
                        <span>Admin Toko</span>
                    </div>
                </div>
            </div>
            <span style="display: block;padding-block:10px;color:rgba(255, 255, 255, 0.705)">Menu</span>
            <div class="menu-link">
                <a href="/">
                    <i class='bx bx-home-alt-2' style='color:#ffffff'  ></i>
                    <span>Beranda</span>
                </a>
                <a href="{{route('admin.penjualan')}}">
                    <i class='bx bx-transfer-alt'></i>
                    <span>Penjualan</span>
                </a>
                <a href="{{route('admin.product')}}">
                    <i class='bx bxs-cube-alt'></i>
                    <span>Product</span>
                </a>
                <a href="{{route('admin.pelanggan')}}">
                    <i class='bx bxs-bar-chart-alt-2'></i>
                    <span>Pelanggan</span>
                </a>
               
            </div>
        </div>
    </div>
    <span style="display: inline-block;margin-left: 2rem;cursor: pointer;" id="menu" class="menu">
        <i class='bx bx-menu'></i>
    </span>
    <div class="nav-image">
        <img src="https://image.pngaaa.com/61/4901061-middle.png" style="object-fit: cover;" alt="">
        <h2 style="font-weight: 400; font-size: 1.2rem;">Nama Admin</h2>
    </div>
</nav>
<style>
    img{
        width: 30px;
        height: 30px;
        border-radius: 50%;   
    }
    .navbar{
        background-color: #7ca2c2;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        z-index: 99;
        padding-block: 11.5px;
        position: fixed;
    }
  

    .menu{
        position: relative;
        left: 21%;
    }

    

    .bx{
        font-size: 2rem;
    }
    .nav-image{
        display: grid;
        grid-template-columns: auto auto;
        grid-column-gap: 10px;
        margin-right: 2rem;
    }

    .menu--navbar{
        position: absolute;
        display: block;
        background-color: #34495E;
        color: rgb(255, 255, 255);
        top: 0;
        /* left: 0; */
        /* bottom: 0; */
        width: 300px;
        height: 150vh;
    }
   

    .img--navbar{
        display: flex;
        align-items: center;
        column-gap: 10px;
    }
    .img--navbar >div>h2{
        font-size: 1.3rem;
        font-weight: 400;
    }
    .img--navbar >div>span{
        font-size: 0.9rem;
    }

    .menu-link{
        display: grid;
    }

    .menu-link>a{
        color: white;
        text-decoration: none;
        display: flex;
        align-items: flex-start; 
        padding-block: 12px;
    }
    .menu-link>a:hover{
        color: rgb(212, 212, 212);
        /* text-decoration: underline; */
        background-color: #63696e;
    }
    .menu-link>a> .bx{
        font-size: 1.5rem;
        margin-right: 10px;
    }
</style>
