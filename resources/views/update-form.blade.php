{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    @media print {
      @page { margin: 0; }
      body * {
        visibility: hidden;
      }

      #invoice-button {
        visibility: hidden;
      }

      #invoice, #invoice * {
        visibility: visible;
      }
      #invoice {
        position: absolute;
        left: 0;
        top: 0;
      }
    }
    </style>
</head>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300;700&family=Poppins:wght@300;400;500;600;700&display=swap');
    h3{
      font-family: 'Chivo Mono', monospace;
    }
    label{
      font-family: 'Chivo Mono', monospace;
    }
   </style>
<body>

<main class="w-3/4 m-auto mt-10 border border-gray-200 rounded-lg shadow-xl h-1/2">
  <div id="invoice" class="w-full h-full">
    <br>
    <main class="container m-5">
        <h3 class="text-xl font-bold">BUKTI PEMESANAN</h3>
        <br>
        <label for="">Nama:</label>
        <input name="client_name" value="{{$form->client_name}}">
        <br>
        <label for="">No.Handphone:</label>
        <input name="client_email" value="{{$form->no_handphone}}">
        <br>
        <label for="">Email:</label>
        <input name="client_email" value="{{$form->client_email}}">
        <br>
        <label for="">Alamat:</label>
        <input name="alamat" value="{{$form->client_email}}">
        <br>
        <br>
        <label for="">Estimasi Mulai:</label>
        <input name="mulai" value="{{$form->mulai}}">
        <br>
        <label for="">Estimasi Selesai:</label>
        <input name="selesai" value="{{$form->selesai}}">
        <br>
        <label for="">Request:</label>
        <input name="request" value="{{$form->request}}">
        <br>
        <br>
        <br>
        <br>
        <label for="">Kode Invoice:</label>
        <label for="">{{$form->id}}</label>
    </main>
  </div>
  <div id="invoice-button" class="flex gap-5 m-5">
    <button wire:click="update" class="flex justify-center mt-10 btn btn-primary">Update</button>
  </div>
</main>
</body>
</html> --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Problem List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <livewire:update-form :form='$form'>
            </div>
        </div>
    </div>
</x-app-layout>
