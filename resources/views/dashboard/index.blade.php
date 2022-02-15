<!doctype html>
<html>
<head>
  <meta charset="UTF-8" name="description" content="Cafe Bisa Ngopi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.25.4/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
   <div class="navbar mb-2 shadow-lg bg-neutral ">
    <div class="flex-1 px-2 mx-2">
        <span class="text-lg font-bold">
                Cafe Bisa Ngopi
        </span>
    </div> 

    <div class="text-center">
        <a class="btn btn-ghost btn-sm rounded-btn btn-active" href="{{ url('dashboard') }}">
              Menu
        </a> 
        <a class="btn btn-ghost btn-sm rounded-btn" href="{{ url('dashboard/transaksi') }}">
              Transaksi
        </a> 
        <a class="btn btn-ghost btn-sm rounded-btn" href="{{ url('dashboard/laporan') }}">
              Laporan
        </a> 
        <a class="btn btn-ghost btn-sm rounded-btn" href="{{ url('dashboard/log') }}">
              Log Aktifitas
        </a> 
    </div>

    <div class="flex-none ">
        <div class="flex items-stretch px-10">
        <a class="btn btn-ghost btn-sm rounded-btn" href="/user/profile">
                Profile
        </a>

        <form method="POST" class="btn btn-sm rounded-btn btn-error btn-outline"  action="{{ route('logout') }}" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"> 
            @csrf
            Log Out
        </form>
        
        </div>
    </div> 
    </div>

    <div class="container m-10">
       

        <div class="alert">
            <div class="flex-1">
                <label class="w-full"> <marquee behavior="" direction="" ><h1 class="font-bold text-xl w-full">HALO SELAMAT DATANG {{ strtoupper(Auth::user()->name) }}</marquee></h1></label>
            </div>
        </div>
        
        <div class="mt-10">

             <div class="form-control mb-3">
                 <form action="/dashboard">
                <div class="flex space-x-2">
                    <label class="label">
                        <p class=" label-text text-bold" >Cari Data</p>
                    </label>
                    <input type="text" placeholder="Search" name="search" class="w-full input input-light input-bordered"> 
                    <button class="btn btn-light">Cari</button>
                </div>
                </form>
            </div>
            

            <h2 class="font-bold">Menu Cafe Bisa Ngopi</h2>
            <label class="btn btn-error btn-sm mt-5 mb-5" for="my-modal-1">Tambah Produk +</label>
           
            <div class="overflow-x-auto">
                
                <div tabindex="0" class="mb-5 collapse border bg-base-0 rounded-box collapse-arrow">
                <div class="collapse-title text-xl font-medium">
                    Produk Yang Sudah Habis
                </div>
                <div class="collapse-content"> 
                    
                @forelse ($habis as $habis)
                <p class="font-bold mb-2"> - {{ $habis->product_name }} Dengan Kode {{ $habis->kode_produk }} Telah Habis</p>           
                 @empty
                   <p>Produk Masih Aman Semua</p>         
                 @endforelse
                </div>
                </div>

                <table class="table w-full">
                    <thead>
                    <tr>
                        <th>#</th> 
                        <th>Kode</th> 
                        <th>Nama</th> 
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                    </thead>                   
                    
                    <tbody>
                        @forelse ($product as $product)
                        <tr>
                        <th>{{ $i++ }}</th> 
                        <td class="font-bold">{{ $product->kode_produk }}</td> 
                        <td>{{ $product->product_name }}</td> 
                        <td>{{ $product->amount }}</td>
                        <td>{{ $product->value }}</td>
                        <td>
                            <a href="/dashboard/product/edit/{{ $product->id }}" class="btn btn-sm btn-info" >Ubah</a> <a class="btn btn-sm btn-error" href="/dashboard/destroy/{{ $product->id }}">Hapus</a>
                        </td>
                        </tr>
                        @empty
                        <div class="place-self-center">
                            <td class="font-bold text-5xl" colspan="5">Produk Tidak Ditemukan</td>    
                        </div>
                        @endforelse
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- modal --}}
    <input type="checkbox" id="my-modal-1" class="modal-toggle"> 
    <div class="modal">
    <div class="modal-box">
        <form action="{{ route('product.store') }}"  enctype="multipart/form-data" method="POST">
            @csrf
        <div class="p-10 card bg-base-200">
        <div class="form-control">

            <label class="label">
            <span class="label-text">Kode</span>
            </label> 
            <input type="text" placeholder="{{ $random }}" class="input" value="{{ $random }}" name="kode_produk" readonly>

             <label class="label">
            <span class="label-text">Nama</span>
            </label> 
            <input type="text" placeholder="Nama" class="input" name="product_name"> 

             <label class="label">
            <span class="label-text">Harga</span>
            </label> 
            <input type="number" placeholder="Harga" class="input" name="amount">

             <label class="label">
            <span class="label-text">Jumlah</span>
            </label> 
            <input type="number" placeholder="Jumlah" class="input" name="value">
        </div>
        </div>

        <div class="modal-action">
        <button for="my-modal-1" class="btn btn-primary" type="submit">Kirim</button> 
        <label for="my-modal-1" class="btn">Close</label>
        </div>
        </form>
    </div>
    </div>



    {{-- modal 2 --}}

    <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
    <div class="modal">
        <div class="modal-box">
           <form action=""  enctype="multipart/form-data" method="POST">
            @csrf
        <div class="p-10 card bg-base-200">
        <div class="form-control">

            <label class="label">
            <span class="label-text">Kode</span>
            </label> 
            <input type="text" placeholder="{{ $random }}" class="input" value="{{ $random }}" name="kode_produk" readonly>

             <label class="label">
            <span class="label-text">Nama</span>
            </label> 
            <input type="text" placeholder="Nama" class="input" name="product_name"> 

             <label class="label">
            <span class="label-text">Harga</span>
            </label> 
            <input type="number" placeholder="Harga" class="input" name="amount">

             <label class="label">
            <span class="label-text">Jumlah</span>
            </label> 
            <input type="number" placeholder="Jumlah" class="input" name="value">
        </div>
        </div>

        <div class="modal-action">
        <button for="my-modal-2" class="btn btn-primary" type="submit">Kirim</button> 
        <label for="my-modal-2" class="btn">Close</label>
        </div>
        </form>
        </div>
    </div>
</body>
</html>