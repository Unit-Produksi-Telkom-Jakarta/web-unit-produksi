<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Problem List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Put this part before </body> tag -->
                <input type="checkbox" id="notification" class="modal-toggle" />
                <label for="notification" class="modal cursor-pointer">
                    <label class="modal-box relative" for="">
                        <h1 class="text-lg font-bold">Data berhasil di hapus.</h1>
                    </label>
                </label>
                <livewire:problem-list>
            </div>
        </div>
    </div>
</x-app-layout>

@if(session('message'))
    <script>
        document.getElementById("notification").checked = true;
    </script>
@endif
