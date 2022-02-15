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
    <div class="ml-10 text-center">
        <a class="btn btn-ghost btn-sm rounded-btn btn-active">
        Mengubah Data {{ $product->product_name }}
        </a> 
    </div>
    </div> 

    <div class="text-center">
        <a href="{{ route('dashboard') }}" class="btn btn-ghost btn-sm rounded-btn btn-outline ">
        Kembali
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

        <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    <div class="p-10 card bg-base-200">
        <div class="form-control">
            <label class="label">
            <span class="label-text">Kode</span>
            </label> 
            <input placeholder="{{ $product->kode_produk }}" value="{{ $product->kode_produk }}" class="input" type="text" name="kode_produk" readonly>

            <label class="label">
            <span class="label-text">Nama</span>
            </label> 
            <input placeholder="{{ $product->product_name }}" class="input" type="text" name="product_name" value="{{ $product->product_name }}">

            <label class="label">
            <span class="label-text">Harga</span>
            </label> 
            <input placeholder="{{ $product->amount }}" class="input" type="text" name="amount" value="{{ $product->amount }}" >

            <label class="label">
            <span class="label-text">Jumlah</span>
            </label> 
            <input placeholder="{{ $product->value }}" class="input" type="text" name="value" value="{{ $product->value }}" >
        </div>
    </div>
    <button class="btn btn-success w-full btn-outline mt-5" type="submit">Kirim</button>
</form>

    </div>



</body>
</html>