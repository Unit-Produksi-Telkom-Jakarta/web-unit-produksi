<!DOCTYPE html>
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

      #logo {
        width: 100px;
        height: 100px;
      }

      #wave {
        width: 400px;
      }
    }
    </style>
</head>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300;700&family=Poppins:wght@300;400;500;600;700&display=swap'); 
    h1{
      font-family: 'Chivo Mono', monospace;
    }
    td{
      font-family: 'Chivo Mono', monospace;
    }
   </style>
<body>
<script>
  function printInvoice(){
    window.print();
  }
</script>
<main class="w-3/4 h-full border border-gray-200 rounded-lg shadow-xl m-auto mt-10">
  <div id="invoice" class="w-full h-full">
    <header class="flex justify-between align-top">
      <img src="{{ asset('/images/gelombang.png')}}" class="md:w-[400px] w-[200px]" id="wave" alt="gelombang">
      <img src="{{ asset('/images/logo.png')}}" class="w-[100px] h-[100px]" id="logo" alt="logo_up" srcset="">
    </header>
    <br>
    <main class="p-5 w-full">
        <h1 class="text-xl mb-5">Tanggal : {{$form->created_at->format('d-F-Y')}}</h1>
        <h1 class="text-xl font-bold mb-5">BUKTI PEMESANAN</h1>
        <table class="mb-10">
          <tr>
            <td>Nama</td>
            <td>: {{$form->client_name}}</td>
          </tr>
          <tr>
            <td>No. Handphone</td>
            <td>: {{$form->no_handphone}}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>: {{$form->client_email}}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td class="text-wrap">: {{$form->alamat}}</td>
          </tr>
          <tr>
            <td>Estimasi Mulai</td>
            <td>: {{$form->mulai}}</td>
          </tr>
          <tr>
            <td>Estimasi Selesai</td>
            <td>: {{$form->selesai}}</td>
          </tr>
          <tr>
            <td>Request</td>
            <td class="text-wrap">: {{$form->request}}</td>
          </tr>
        </table>
        <div class="flex justify-between w-full pr-[50px]">
          <div>Kode Invoice : {{$form->id}}</div>
          <div class="flex flex-col">
            <div class="mb-[80px] text-center">Petugas</div>
            <div></div>
            <div class="text-center">{{auth()->user()->name}}</div>
          </div>
        </div>
    </main>
  </div>
  <div id="invoice-button" class="m-5">
    <button class="btn btn-primary flex justify-center mt-10" onclick="printInvoice()">print</button>
  </div>
</main>
</body>
</html>
