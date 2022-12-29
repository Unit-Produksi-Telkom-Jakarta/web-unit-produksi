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
<script>
  function test(){
    window.print();
  }
</script>
<main class="w-3/4 h-1/2 border border-gray-200 rounded-lg shadow-xl m-auto mt-10">
  <div id="invoice" class="w-full h-full">
    <header class="flex justify-between align-top">
      <img src="{{ asset('/images/gelombang.png')}}" width="200px" alt="">
      <img src="{{ asset('/images/logo.png')}}" width="100px" alt="" srcset="">
    </header>
    <br>
    <main class="container m-5">
        <h3 class="text-xl font-bold">BUKTI PEMESANAN</h3>
        <br>
        <label for="">Nama:</label>
        <label for=""></label>
        <br>
        <label for="">No.Handphone:</label>
        <label for=""></label>
        <br>
        <label for="">Email:</label>
        <label for=""></label>
        <br>
        <label for="">Alamat:</label>
        <label for=""></label>
        <br>
        <br>
        <label for="">Estimasi Mulai:</label>
        <label for=""></label>
        <br>
        <label for="">Estimasi Selesai:</label>
        <label for=""></label>
        <br>
        <label for="">Request:</label>
        <label for=""></label>
        <br>
        <br>
        <br>
        <br>
        <label for="">Kode Invoice:</label>
        <label for=""></label>
    </main>
  </div>
  <div id="invoice-button" class="m-5">
    <button class="btn btn-primary flex justify-center mt-10" onclick="test()">print</button>
  </div>
</main>
</body>
</html>