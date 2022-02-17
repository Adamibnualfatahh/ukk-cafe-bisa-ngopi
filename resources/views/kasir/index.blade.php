<!doctype html>
<html>
<head>
  <meta charset="UTF-8" name="description" content="Cafe Bisa Ngopi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.25.4/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
     {{-- <div class="form-control mb-3">
                 <form action="/kasir">
                <div class="flex space-x-2 m-5">
                    <input type="text" placeholder="Search" name="search" class="w-full input input-light input-bordered "> 
                    <button class="btn btn-light">Cari</button>
                </div>
                </form>
            </div> --}}
  <table class="table w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Nama</th>
        <th>Harga /item</th>
        <th>Qty</th>
        <th>Total Belanja per Item</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($produk as $produk)
      <tr>
        <th>{{ $i++ }}</th>
        <td>{{ $produk->product_name }}</td>
        <td class="price">{{ $produk->amount }}</td>
        <td><input type="text" placeholder="Masukan jumlah Di sini" class="input w-full max-w-xs choose"></td>
        <td><span class='total'>0</span></td>
      </tr>
      @endforeach
      <tr>
        <td colspan="5"></td>
      </tr>
      <tr class="static bottom-0 active ">
          <td>TOTAL</td>
          <td colspan="3"><span id="sum"></span></td> 
           <td><button class="btn btn-error btn-sm" onclick="window.location.reload();">HITUNG ULANG</button></td>
        </tr>

      {{-- <tr class="active">
        <td>UANG CUSTOMER:</td>
        <td><input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"></td>
        <td>KEMBALIAN :</td>
        <td><span class="kembali"></span></td>
        <td><button class="btn btn-success btn-sm " id="tot">Simpan</button></td>
      </tr> --}}

    </tbody>
  </table>
</div>
<script>
calc_total();

$(".choose").on('change', function(){
  var parent = $(this).closest('tr');
  var price  = parseFloat($('.price',parent).text());
  var choose = parseFloat($('.choose',parent).val());
  var sum = parseFloat($('.sum',parent).val());
  var uang = parseFloat($('.uang',parent).val());
  $('.total',parent).text(choose*price);
  $('.kembali',parent).text(uang-sum);
  calc_total();
});

function calc_total(){
  var sum = 0;
  $(".total").each(function(){
    sum += parseFloat($(this).text());
  });
  $('#sum').text(sum);
}
</script>


   
{{-- <script>
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
</script> --}}
</body>
</html>