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
            <h2 class="font-bold">Menu Cafe Bisa Ngopi</h2>
            <label class="btn btn-error btn-sm mt-5 mb-5" for="my-modal-2">Tambah Produk +</label>
            <div class="overflow-x-auto">
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
                    <tr>
                        <th>1</th> 
                        <td class="font-bold">KD02W</td> 
                        <td>Coffe Late</td> 
                        <td>Rp.100,000</td>
                        <td>300</td>
                        <td>
                            <button class="btn btn-sm btn-info">Ubah</button> <button class="btn btn-sm btn-error">Hapus</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- modal --}}
    <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
    <div class="modal">
    <div class="modal-box">
        <div class="p-10 card bg-base-200">
        <div class="form-control">

            <label class="label">
            <span class="label-text">Kode</span>
            </label> 
            <input type="text" placeholder="{{ $random }}" class="input" value="{{ $random }}" disabled>

             <label class="label">
            <span class="label-text">Nama</span>
            </label> 
            <input type="text" placeholder="Nama" class="input">

             <label class="label">
            <span class="label-text">Harga</span>
            </label> 
            <input type="number" placeholder="Harga" class="input">

             <label class="label">
            <span class="label-text">Jumlah</span>
            </label> 
            <input type="number" placeholder="Jumlah" class="input">
        </div>
        </div>

        <div class="modal-action">
        <label for="my-modal-2" class="btn btn-primary">Accept</label> 
        <label for="my-modal-2" class="btn">Close</label>
        </div>
    </div>
    </div>

</body>
</html>