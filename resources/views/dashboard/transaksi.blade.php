<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
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
        <a class="btn btn-ghost btn-sm rounded-btn " href="{{ url('dashboard') }}">
              Menu
        </a> 
        <a class="btn btn-ghost btn-sm rounded-btn btn-active" href="{{ url('dashboard/transaksi') }}">
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

        <form method="POST" class="btn btn-sm rounded-btn btn-outline  btn-error"  action="{{ route('logout') }}" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"> 
            @csrf
            Log Out
        </form>
        
        </div>
    </div> 
    </div>

    <div class="container m-10">
        <div class="mt-10">
            
            <div class="form-control mb-3">
                <div class="flex space-x-2">
                    <label class="label">
                        <span class=" label-text">Cari Data Transaksi</span>
                    </label>
                    <input type="text" placeholder="Search" class="w-full input input-light input-bordered"> 
                    <button class="btn btn-light">Cari</button>
                </div>
            </div>

        
             <form action="">
                  <div class="grid grid-cols-2 gap-2">
                <div class="form-control">
                <label class="label">
                    <span class="label-text">Ambil Data Per Hari</span>
                </label> 
                <input type="date" placeholder="username" class="input input-bordered">
                </div>
   
                <div class="form-control">
                <label class="label">
                    <span class="label-text">Ambil Data Per Bulan</span>
                </label> 
                <input type="month" placeholder="username" class="input input-bordered">
                </div>
                </div>
                <button class="w-full mt-2 btn btn-dark mb-5" type="submit">Cari</button>
            </form>
                  

            <h2 class="font-bold">Transaksi</h2>
            <div class="overflow-x-auto">
                <table class="table w-full">
                    <thead>
                    <tr>
                        <th>ID Trans</th> 
                        <th>Nama Kasir</th> 
                        <th>Waktu Transaksi</th> 
                        <th>Kode Produk</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <td>Action</td>
                    </tr>
                    </thead> 
                    <tbody>
                    <tr>
                        <th>1</th> 
                        <td>Kin</td> 
                        <td>13-02-2022</td> 
                        <td>KD02W</td>
                        <td>2</td>
                        <td>200,000</td>
                        <td>
                            <button class="btn btn-sm btn-info">Ubah</button> <button class="btn btn-sm btn-error">Hapus</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>