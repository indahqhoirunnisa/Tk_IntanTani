@extends('layouts.main')

@section('content')
@include('bagian.nav')

{{-- tabel pesanan pelanggan --}}
<div class="m-6">
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 ">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                PESANAN ANDA
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Pesanan Anda akan kami proses apabila Anda sudah melakukan konfirmasi. Silahkan cek kembali pesanan Anda</p>
            </caption>
            <thead class="text-xs text-white uppercase bg-[#829460]">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Id Transaksi
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Id pelanggan
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                           Id Produk
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Nama Produk
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                          Harga
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                         Jumlah
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                         Total
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b ">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                       P0012
                    </th>
                       <td class="py-4 px-6">
                      0001
                    </td>
                    <td class="py-4 px-6">
                       PB115
                    </td>
                    <td class="py-4 px-6">
                        Benih Cabe SiGantung
                    </td>
                    <td class="py-4 px-6">
                        Rp.28000
                    </td>
                    <td class="py-4 px-6">
                    1
                    </td>
                    <td class="py-4 px-6">
                        Rp.28000
                    </td>
                    <td class="py-4 px-6 text-right">
                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
