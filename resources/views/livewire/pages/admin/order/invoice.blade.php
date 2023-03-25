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
<section class="w-3/4 h-auto border border-gray-200 rounded-lg shadow-xl m-auto my-10">
    <div id="invoice" class="w-full h-auto py-10 px-20">
        <div class="flex justify-between items-center w-full border-b-4 border-black p-3">
            <img src="{{ asset('/images/logo.png')}}" class="w-[100px] h-[100px] mb-[-55px]  bg-slate-50" id="logo" alt="logo_up" srcset="">
    
            <h2 class="font-mono font-bold text-xl text-red-600">Invoice No. <span class=" border-b-[3px] border-red-600">&nbsp;&nbsp;&nbsp;&nbsp;</span></h2>
        </div>
        <div class="grid grid-cols-3 gap-3 w-full mt-16">
            <div class="flex flex-col">
                <p>To:</p> 
                <p class="text-red-600 font-semibold">Chan Kirana</p> 
                <p>911</p> 
            </div>
            <div class="col-span-2">
                <table class="border-collapse border border-black w-full">
                    <thead>
                        <tr>
                            <th class="border border-black px-1 bg-slate-200">Quantity</th> 
                            <th class="border border-black px-1 bg-slate-200">Description</th> 
                            <th class="border border-black px-1 bg-slate-200">Unit Price</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr >
                            <td class="border border-black px-1 text-center">1</td> 
                            <td class="border border-black px-1">Motor Icikiwir</td> 
                            <td class="border border-black px-1">{{ "Rp " . number_format(100000,2,',','.') }}</td> 
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="border border-black px-1 bg-slate-200"> Total Price</th>
                            <th class="border border-black px-1 bg-slate-200">{{ "Rp " . number_format(100000,2,',','.') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-span-3 my-5">
                <h3 class="font-bold">
                    Terbilang : clalcaclc
                </h3>
            </div>
            <div class="flex flex-col justify-center items-center">
                <span class="mb-6">&nbsp;</span>
                <h1>Tanda Tangan Costumer</h1>
                <span class="h-24"></span>
                <h2 class="underline underline-offset-4 font-bold">Kirana</h2>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-col justify-center items-center">
                <h3 class="mb-6">{{"Jakarta, " . date("d F Y"); }}</h3>
                <h1>Petugas Admin</h1>
                <span class="h-24"></span>
                <h2 class="underline underline-offset-4 font-bold">{{ auth()->user()->name }}</h2>
            </div>
        </div>
    </div>
    <div id="invoice-button" class="bg-slate-50 w-full p-10">
        <button class="btn btn-primary text-center mt-10" onclick="printInvoice()">print</button>
    </div>
</section>
</body>
</html>




