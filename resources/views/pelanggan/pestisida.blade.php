@extends('layouts.main')

@section('content')
@include('bagian.nav')

{{-- grid --}}
<div class="m-6">
<div class="grid grid-rows-5 grid-flow-col gap-4 h-screen">
    <div class="row-span-3">   
    <div class="p-4 w-full h-full max-w-sm rounded-lg border shadow-md sm:p-6 dark:bg-gray-800 dark:border-gray-700">
        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Produk Kami
            <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow " data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 510px);">
                <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">
                <li>
                    <a href="#" class="block py-2 px-4 dark:md:hover:bg-gray-400 ">Benih</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 dark:md:hover:bg-gray-400">Pestisida</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 dark:md:hover:bg-gray-400">Fungisida</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 dark:md:hover:bg-gray-400">Insektisida</a>
                </li>
                </ul>
            </div>
    </div>
    </div>
    <div class="row-span-2 bg-[#E0DECA]">
        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-black font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Produk Kami
            <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 510px);">
                <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">
                <li>
                    <a href="#" class="block py-2 px-4 ">Benih</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 ">Pestisida</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 ">Fungisida</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 ">Insektisida</a>
                </li>
                </ul>
            </div>
    </div>
    <div class="col-span-2">
        <form class="flex items-center">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Search" required="">
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
        <p class="font-serif text-justify text-xl">Default Produk</p>
    </div>
    <div class="row-span-4 col-span-2">
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            <!--Card 1-->
            <div class="rounded overflow-hidden shadow-lg">
              <img class="w-full" src="/mountain.jpg" alt="Mountain">
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Mountain</div>
                <p class="text-gray-700 text-base">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
              </div>
              <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
              </div>
            </div>
            <!--Card 2-->
            <div class="rounded overflow-hidden shadow-lg">
              <img class="w-full" src="/river.jpg" alt="River">
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">River</div>
                <p class="text-gray-700 text-base">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
              </div>
              <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#summer</span>
              </div>
            </div>
             <!--Card 3-->
             <div class="rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/river.jpg" alt="River">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">River</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#summer</span>
                </div>
              </div>
</div></div>
</div>
</div>
<footer class="p-4 bg-[#2C3639] sm:p-6">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">INTAN TANI</span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Informasi</h2>
                <ul class="text-gray-600 dark:text-gray-400">
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
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                    <a href=" https://api.whatsapp.com/send?phone=+6282266483244">whatsapp</a></li>
                    <li>
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">IntanTani</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Alamat</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Eromoko, Jawa Tengah</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Maps</a>
                    </li>
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
