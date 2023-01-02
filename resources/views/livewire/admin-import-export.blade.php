<div>
    @csrf
    @if (session('message'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
                <p class="font-bold">{{ session('message') }}</p>
            </div>
        </div>
    </div>
    @endif
    <div class="form-control flex w-full p-4">
        <label class="label w-full ">
            <span class="flex flex-col label-text text-yellow-600">File yang ingin di import diharuskan ber-ekstensi .xlsx</span>
        </label>
        <div class="flex">
            <input type="file" wire:model="dataToUpload" class="flex flex-row w-full file-input file-input-md file-input-bordered max-w-screen-xl"/>
            <button wire:click="importXlsx" class="flex btn ml-4 w-28 h-10">Import</button>
        </div>
        <label class="label w-full ">
            <span class="flex flex-col label-text text-yellow-600">Format row excel yang ingin di import diharuskan mengikuti hasil export</span>
        </label>
        <div class="flex">
            <button wire:click="exportXlsx" class="flex grid btn w-28 h-10">Export</button>
            <button wire:click="formatDownload" class="flex btn ml-4 w-28 h-10 text-xs leading-normal ">Download Format</button>
        </div>
    </div>
</div>
