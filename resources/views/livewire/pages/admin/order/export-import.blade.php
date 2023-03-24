<div class="">
    @csrf
    <div class="form-control w-full flex justify-center p-5">
        <label class="label w-full ">
            <span class="flex flex-col label-text text-yellow-600">File yang ingin di import diharuskan ber-ekstensi .xlsx</span>
        </label>
        <div class="flex">
            <input type="file" wire:model="dataToUpload" class="flex flex-row w-full file-input file-input-md file-input-bordered max-w-screen-xl font-bold"/>
            <button wire:click="importXlsx" class="flex btn ml-4 w-28 h-10 font-bold">Import</button>
        </div>
        <label class="label w-full ">
            <span class="flex flex-col label-text text-yellow-600">Format row excel yang ingin di import diharuskan mengikuti hasil export</span>
        </label>
        <div class="flex">
            <button wire:click="exportXlsx" class="flex btn w-28 h-10 font-bold">Export</button>
            <button wire:click="formatDownload" class="flex btn ml-4 w-28 h-10 text-xs leading-normal font-bold">Download Format</button>
        </div>
    </div>
</div>