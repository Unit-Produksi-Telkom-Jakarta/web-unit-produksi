<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @media print {
            @page {
                margin: 0;
            }

            body * {
                visibility: hidden;
            }

            #invoice-button {
                visibility: hidden;
            }

            #invoice,
            #invoice * {
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

            table, th, td {
                border: 2px solid black;
                border-collapse: collapse;
            }
        }
    </style>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300;700&family=Poppins:wght@300;400;500;600;700&display=swap');

    h1 {
        font-family: 'Chivo Mono', monospace;
    }

    td {
        font-family: 'Chivo Mono', monospace;
    }
</style>

<body>
    <script>
        function printInvoice() {
            window.print();
        }
    </script>
    <main class="w-3/4 h-full border border-gray-200 rounded-lg shadow-xl m-auto mt-10">
      <br>
        <div id="invoice" class="w-full h-full">
            <header class="flex justify-between align-top">
                <img src="{{ asset('/images/logo.png')}}" class="w-[100px] h-[100px]" id="logo" alt="logo_up" srcset="">
            </header>
            <h1 class="text-xl font-bold mb-5 text-center">Daily Report</h1>
            <h1 class="text-sm mb-5 text-center">Tanggal : {{date_format(today(),"d-F-Y")}} </h1>
                <main class="p-5 w-full">
                    <table class="mb-10 w-full" id="borderdaily">
                        <tr class="text-center">
                            <th class="border">Id</th>
                            <th class="border">Nama</th>
                            <th class="border">No. Handphone</th>
                            <th class="border">Estimasi mulai</th>
                            <th class="border">Estimasi Selesai</th>
                            <th class="border">Request</th>
                        </tr>
                        <tbody>
                        @foreach ($order as $order)
                            <tr>
                                <td class="border">{{ $order->id }}</td>
                                <td class="border">{{ $order->name }}</td>
                                <td class="border">{{ $order->phone_number }}</td>
                                <td class="border">{{ $order->start_estimation }}</td>
                                <td class="border">{{ $order->end_estimation }}</td>
                                <td class="border">{{ $order->request }}</td>
                            </tr>
                        @endforeach()
                        </tbody>
                    </table>
                </main>
            <div class="flex justify-between w-full pr-[50px]">
                <div class="flex flex-col ml-6">
                    <div class="mt-10 mb-[80px] text-center">Koordinator Administrasi</div>
                    <div></div>
                    <div class="text-center">Yunita Setioroso, S.Psi </div>
                </div>
                <div class="flex flex-col">
                    <div class="mt-10 mb-[80px] text-center">Petugas Admin</div>
                    <div></div>
                    <div class="text-center">{{ auth()->user()->name }}</div>
                </div>
            </div>
        </div>
        <div id="invoice-button" class="m-5">
            <button class="btn btn-primary flex justify-center mt-10" onclick="printInvoice()">Print</button>
        </div>
    </main>
</body>

</html>
