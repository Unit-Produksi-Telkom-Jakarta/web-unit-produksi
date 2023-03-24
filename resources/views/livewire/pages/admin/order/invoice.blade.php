<section class="w-3/4 mx-auto">
    <main class="h-full border border-gray-200 shadow-xl my-10 p-6 font-mono">
        <div class="flex justify-between items-center w-full border-b-4 border-black p-3">
            <img src="{{ asset('/images/logo.png')}}" class="w-[100px] h-[100px] mb-[-55px]  bg-slate-50" id="logo" alt="logo_up" srcset="">
    
            <h2 class="font-mono font-bold text-xl text-red-600">Invoice No. <span class=" border-b-[3px] border-red-600">&nbsp;&nbsp;&nbsp;&nbsp;</span></h2>
        </div>
        <div class="grid grid-cols-3 gap-3 w-full mt-16">
            <div class="flex flex-col">
                <p>To:</p> 
                <p>Chan Kirana</p> 
                <p>911</p> 
            </div>
            <div class="col-span-2">
                <table class="border-collapse border border-black float-right">
                    <thead>
                        <tr>
                            <th class="border border-black p-2 bg-slate-200">Quantity</th> 
                            <th class="border border-black p-2 bg-slate-200">Description</th> 
                            <th class="border border-black p-2 bg-slate-200">Unit Price</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr >
                            <td class="border border-black p-2 text-center">1</td> 
                            <td class="border border-black p-2">Motor Icikiwir</td> 
                            <td class="border border-black p-2">Rp. 1001010</td> 
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="border border-black p-2 bg-slate-200"> Total Price</th>
                            <th class="border border-black p-2 bg-slate-200">Rp 1010100110</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-span-3">
                Terbilang : clalcaclc
            </div>
            <div class="col-span-3">
                <h3 class="float-right">Jakarta, 27 Agustus 2005</h3>
            </div>
            
            <div class="flex flex-col justify-center items-center">
                <h1>Tanda Tangan Costumer</h1>
                <span class="h-24"></span>
                <h2 class="underline underline-offset-4 font-bold">Kirana</h2>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-col justify-center items-center">
                <h1>Petugas Admin</h1>
                <span class="h-24"></span>
                <h2 class="underline underline-offset-4 font-bold">Cewek</h2>
            </div>
        </div>
    </main>
    <div id="invoice-button" class="m-5 bg-slate-50">
        <button class="btn btn-primary flex justify-center mt-10" onclick="printInvoice()">print</button>
    </div>
</section>

