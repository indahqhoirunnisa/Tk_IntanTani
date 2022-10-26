@extends('layouts.main')

@section('content')
@include('bagian.sidebar')

    {{-- header 2--}}
    <main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
        <header class="header bg-white shadow py-4 px-4">
            <div class="header-content flex items-center flex-row">
            <form class="flex items-center" action="#">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" required="">
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                <div class="flex md:hidden">
                <a href="#" class="flex items-center justify-center h-10 w-10 border-transparent"><svg class="h-6 w-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </a>
                </div>
            </form>
            </div>
        </header>
<div class="main-content flex flex-col flex-grow p-4">
            <h1 class="font-bold text-3xl text-gray-700">DATA PELANGGAN</h1>
   {{-- tabel pelanggan --}}
<div class="overflow-x-auto relative shadow-md mb-6">
    <table class="w-full text-sm text-left text-white ">
        <thead class="text-xs text-gray-700 uppercase bg-blue-500">
                <tr>
                    <th scope="col" class="py-3 px-6 text-white">No</th>
                    <th scope="col" class="py-3 px-6 text-white">Nama</th>
                    <th scope="col" class="py-3 px-6 text-white">Email</th>
                    <th scope="col" class="py-3 px-6 text-white">Id</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($pelanggan as $item)
                    <tr class="bg-white border-b">
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $no++ }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $item->name}}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $item->email}}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $item->id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
    @endsection