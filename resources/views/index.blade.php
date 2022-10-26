@extends('layouts.main')

@section('content')
@include('bagian.nav')

<div class="w-full bg-white flex justify-center mt-6">
    <span class="text-5xl font-bold text-[#2C3639]">E-FARM GROCERY INTAN TANI</span>
</div>
<div class="w-full bg-white flex justify-center mt-8">
    <span class="text-4xl font-bold text-[#2C3639]">KEBUTUHAN TANI UNTUK PERTANIAN MAJU</span>
</div>
<div class="w-full bg-white flex justify-center mt-8">
    <span class="text-3xl font-bold text-center text-[#5F7161]">PILIH PRODUK APA AJA <br>
DIANTAR SAMPAI RUMAH ANDA</span>
</div>
{{-- card 1 --}}
<div class="w-full mt-6 h-96 bg-[#9BA17B]">
    <div class=" flex justify-center w-full space-x-24 mb-6 pt-6">
        <div class="space-y-4">
            <img src="image//depan/1.png" alt="" class="w-42 h-32 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
            <span class="text-white font-semibold flex justify-center">Produk Lengkap</span>
        </div>
        <div class="space-y-4">
            <img src="image//depan/2.png" alt="..." class="w-42 h-32 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
            <span class="text-white font-semibold flex justify-center">Harga Terjangkau</span>
        </div>
        <div class="space-y-4">
            <img src="image//depan/3.png" alt="..." class="w-42 h-32 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
            <span class="text-white font-semibold flex justify-center">Produk Berkualitas </span>
        </div>
    </div>
    <div class="row justify">
        <div class=" flex justify-center w-full px-24">
            <div class="flex space-x-4 float-center p-20 bg-white rounded-lg">
                <div class="mt-2">
                    <img src="image/objek.png" alt=""class="w-3000 h-3000">
                </div>
                <div class="p-4 ml-4 mr-5 offset-mr-1 ">
                    <h4 class="text-center text-3xl text-[#]">Tentang Kami</h4>
                    <p class="text-justify ml-4">E-FaGro Intan Tani (E-Farm Grocery Intan Tani) adalah situs belanja online jual kebutuhan sehari-hari pertanian dengan harga terjangkau, lengkap, dan produk berkualitas.
                        E-FaGro Intan Tani terletak di Kota Wonogiri tepatnya di Desa Tegalharjo, Kecamatan Eromoko yang mayoritas penduduknya adalah Petani.</p>
                
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
{{-- card 2 --}}
    <div class="w-full bg-white pt-72 ">
        <div class=" flex justify-center w-full">
            <h1 class="-mt-32 text-4xl font-bold tracking-tight text-caps">KATEGORI PRODUK</h1>
        </div>
        <div class="flex justify-center space-x-8 -mt-20">
            <a href="#" class="block p-4 space-y-4">
                <img src="image/depan/4.png" alt="" class="w-56 h-56 rounded-full transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 ">
                <div class="w-full flex justify-center">
                    <span class="text-xl font-semibold">Obat Pertanian</span>
                </div>
            </a>
                    <a href="#" class="block p-4 space-y-4">
                        <img src="image/depan/5.png" alt="" class="w-56 h-56 rounded-full transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 ">
                        <div class="w-full flex justify-center">
                            <span class="text-xl font-semibold">Pupuk</span>
                        </div>
            </a>
            <a href="#" class="block p-4 space-y-4">
                <img src="image/depan/6.png" alt="" class="w-56 h-56 rounded-full transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <div class="w-full flex justify-center">
                    <span class="text-xl font-semibold">Benih</span>
                </div>
            </a>
        </div>
    </div>
    {{-- card 3 --}}
    <div class="w-full bg-white pt-10">
        <div class=" flex justify-center w-full">
            <h1 class="mb-10 text-4xl font-bold tracking-tight text-caps">Bagaimana Cara Memesan ?</h1>
        </div>
        <div class="flex justify-center space-x-8">
            <div class="block p-8 space-y-4">
                <img src="image/depan/7.png" alt="" class="w-64 h-56 rounded-full transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <div class="w-full flex justify-center">
                    <span class="text-xl font-semibold">Login</span>
                </div>
            </div>
            <div class="block p-8 space-y-4">
                <img src="image/depan/8.png" alt="" class="w-64 h-56 rounded-full transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <div class="w-full flex justify-center">
                    <span class="text-xl font-semibold">Pilih Produk</span>
                </div>
            </div>
            <div class="block p-8 space-y-4">
                <img src="image/depan/9.png" alt="" class="w-64 h-56 rounded-full transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <div class="w-full flex justify-center">
                    <span class="text-xl font-semibold">Beli dan Bayar</span>
                </div>
            </div>
            <div class="block p-8 space-y-4">
                <img src="image/depan/10.png" alt="" class="w-64 h-56 rounded-full transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <div class="w-full flex justify-center">
                    <span class="text-xl font-semibold">Pengiriman</span>
                </div>
            </div>
        </div>
    </div>

{{-- footer --}}
<footer class="p-4 bg-[#AA8B56] sm:p-6">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">INTAN TANI</span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Informasi</h2>
                <ul class="text-black">
                    <li class="mb-4">
                        <a href="https://flowbite.com/" class="hover:underline">Bagaimana Cara Memesan</a>
                    </li>
                    <li>
                        <a href="https://tailwindcss.com/" class="hover:underline">Tentang E-FarGro Intan Tani</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Hubungi Kami</h2>
                <ul class="text-black">
                    <li class="mb-4">
                    <a href=" https://api.whatsapp.com/send?phone=+6282266483244">whatsapp</a></li>
                    <li>
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">IntanTani</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Kunjungi Toko Kami</h2>
                <ul class="text-black">
                    <li class="mb-4">
                    <a href=" https://api.whatsapp.com/send?phone=+6282266483244">Eromoko, Wonogiri, Jawa Tengah</a></li>

                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8">
    <div class="sm:flex sm:items-center sm:justify-center">
        <span class="text-sm text-[#FFF9D7] sm:text-center">© 2022 <a href="https://flowbite.com/" class="hover:underline">E-FaGro Intan Tani™</a>. All Rights Reserved.
        </span>
    </div>
</footer>
@endsection
 
