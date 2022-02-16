<!doctype html>
<html>
<head>
  <meta charset="UTF-8" name="description" content="Cafe Bisa Ngopi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.25.4/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
<style>
  input[type='number']::-webkit-inner-spin-button,
  input[type='number']::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  .custom-number-input input:focus {
    outline: none !important;
  }

  .custom-number-input button:focus {
    outline: none !important;
  }
</style>
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
   </div>
   <div class="overflow-x-auto">
  <table class="table w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Nama</th>
        <th>Harga /item</th>
        <th>Qty</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($produk as $produk)
      <tr>
        <th>{{ $i++ }}</th>
        <td>{{ $produk->product_name }}</td>
        <td>{{ $produk->amount }}</td>
        <td><!-- component -->
            <div class="custom-number-input h-10 w-32">
            <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">
            </label>
            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
            <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                  <span class="m-auto text-2xl font-thin">−</span>
            </button>
            <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>
            <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
            <span class="m-auto text-2xl font-thin">+</span>
            </button>
            </div>
      </td>
      </tr>
      @endforeach
      
      <tr class="static bottom-0">
            <td><button class="btn btn-error btn-sm" onclick="window.location.reload();">HITUNG ULANG</button></td>
            <td><button class="btn btn-success btn-sm btn-outline">JUMLAH</button></td>
            <td>TOTAL</td>
            <td><input type="text" placeholder="Rp 1.000.000" class="input input-bordered w-full max-w-xs" disabled value="{{ $produk->value * $produk->amount }}"></td>
      </tr>
    </tbody>
  </table>
</div>

   
<script>
  function decrement(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value--;
    target.value = value;
  }

  function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
  );

  const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
  );

  decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
  });

  incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
  });
</script>
</body>
</html>