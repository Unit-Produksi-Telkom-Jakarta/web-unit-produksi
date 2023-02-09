<div class="flex flex-col items-center p-2 gap-5">
    <svg class="text-blue-500 w-28 h-28 animate-fade-in-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
    </svg>      
    <h1 class="font-bold text-2xl text-center">Apakah anda yakin ingin menghapus data ini?</h1>
    <div class="flex gap-5">
        <button wire:click="delete" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm"
                wire:loading.attr="disabled">
            <span wire:loading>Sedang Diproses...</span>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <span wire:loading.remove>Ya</span>
        </button>
        <button wire:click="closeModal" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm"
                wire:loading.attr="disabled">
            Batalkan
        </button>
        {{-- <button wire:click="delete" wire:loading.attr="disabled" class="btn bg-green-500 hover:bg-green-600 border-none w-20">Ya</button>
        <button wire:click="closeModal" class="btn bg-red-500 hover:bg-red-600 border-none w-20">Tidak</button> --}}
    </div>
</div>
