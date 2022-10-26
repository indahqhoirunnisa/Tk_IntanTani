@extends('layouts.main')

@section('content')
@include('bagian.nav')

<div class="flex ">
    <aside class="w-64 left-0 top-25 h-screen bg-[#3F4E4F] p-10">
        <div class="flex justify-end px-4 pt-4">
            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                <span class="sr-only">Open dropdown</span>
               
            </button>
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="image/admin.jpg" alt="admin">
            <h5 class="mb-1 text-xl font-medium dark:text-white">Novi</h5>
            <span class="text-sm dark:text-gray-400">Admin</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="https://api.whatsapp.com/send?phone=+6282266483244" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chat Admin</a>
            </div>
        </div>
    </aside>
    <main class="flex-1 ml-2">
        <div class="row justify">
            <div class=" flex justify-center w-full px-24">
                <div class="flex space-x-4 float-center p-20 bg-white rounded-lg">
                    <div class="mt-2">
                        <img src="image/objek.png" alt=""class="w-3000 h-3000">
                    </div>
                    <div class="p-4 ml-4 mr-5 offset-mr-1 ">
                        <h4 class="text-center text-lg text-[#]">Tentang Kami</h4>
                        <p class="text-justify ml-4">E-FaGro Intan Tani (E-Farm Grocery Intan Tani) adalah situs belanja online jual kebutuhan sehari-hari pertanian dengan harga terjangkau, lengkap, dan produk berkualitas.
                            E-FaGro Intan Tani terletak di Kota Wonogiri tepatnya di Desa Tegalharjo, Kecamatan Eromoko yang mayoritas penduduknya adalah Petani.<br>Produk Intan Tani meliputi obat pertanian dan benih.</p></p>
                    
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="h-96 bg-white p-10">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.20020707292!2d110.8769632142122!3d-7.978247781751134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bcd9f7fe0c205%3A0xd914464e83204909!2sIntan%20Tani!5e0!3m2!1sen!2sid!4v1664941656629!5m2!1sen!2sid" class="w-full h-96" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
</div>