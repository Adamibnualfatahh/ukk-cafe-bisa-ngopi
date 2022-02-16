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
        <a class="btn btn-ghost btn-sm rounded-btn" href="{{ url('dashboard/transaksi') }}">
              Transaksi
        </a> 
        <a class="btn btn-ghost btn-sm rounded-btn btn-active" href="{{ url('dashboard/laporan') }}">
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
                  
            <div class="overflow-x-auto">                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <h2 class="font-bold">Per Hari</h2>
                        <table class="table w-full">
                            <thead>
                            <tr>
                                <th>#</th> 
                                <th>Waktu</th> 
                                <th>Penghasilan</th> 
                            </tr>
                            </thead> 
                            <tbody>
                            <tr>
                                <th>1</th> 
                                <td>10-09-2022</td> 
                                <td>100000</td> 
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <h2 class="font-bold">Per Bulan</h2>
                        <table class="table w-full">
                            <thead>
                            <tr>
                                <th>#</th> 
                                <th>Waktu</th> 
                                <th>Penghasilan</th> 
                            </tr>
                            </thead> 
                            <tbody>
                            <tr>
                                <th>1</th> 
                                <td>JUN-2022</td> 
                                <td>100000000</td> 
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>