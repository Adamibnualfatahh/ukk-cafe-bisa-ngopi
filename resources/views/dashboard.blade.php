<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manager Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto">
            <div class="bg-white overflow-hidden">
              
                <div class="container bg-white">
                    <div class="py-3 px-3">

                        <table class="table-auto">
                            <thead>
                                <td>NO</td>
                                <td>Kode</td>
                                <td>Nama Produk</td>
                                <td>Harga</td>
                                <td>Jumlah</td>
                            </thead>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
