<div>
    @csrf
    @if (session('message'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
                <p class="font-bold">{{ session('message') }}</p>
                <p class="text-sm">Tunggu beberapa saat!</p>
            </div>
        </div>
    </div>
    @endif
    <div class="p-6 rounded-lg shadow-lg w-full">
        <div class="form-group">
            <label for="client_name" class="form-label inline-block mb-2 text-gray-700">Nama</label>
            <input wire:model="name" type="text" class="form-control text-base py-1.5 px-3 w-96 ml-20 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none border 
            border-solid border-gray-300 rounded m-3" id="client_name" placeholder="Nama">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="client_email" class="form-label inline-block mb-2 mr-1 text-gray-700">Email</label>
            <input wire:model="email" type="text" class="form-control text-base py-1.5 px-3 w-96 ml-20 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none border 
            border-solid border-gray-300 rounded m-3" id="client_email" placeholder="Email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="no_handphone" class="form-label inline-block mb-2 text-gray-700">No. Handphone</label>
            <input wire:model="no_handphone" type="text" class="form-control text-base py-1.5 px-3 w-96 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none border 
            border-solid border-gray-300 rounded m-3" id="no_telfon" placeholder="No. Handphone" maxlength="12">
            @error('no_handphone') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="almt_rumah" class="form-label inline-block mb-2 text-gray-700">Alamat Rumah</label>
            <input wire:model="alamat" type="text" class="form-control text-base py-1.5 px-3 w-96 ml-4 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none border 
            border-solid border-gray-300 rounded m-3" id="almt_rumah" placeholder="Alamat Rumah">
            @error('alamat') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="client_name" class="form-label inline-block mb-2 text-gray-700">Jenis Servis</label>
            <select wire:model="pic" class="form-select appearance-none w-auto ml-10 border border-solid border-gray-300 rounded m-3 w-72">
                <option selected>Open this select menu</option>
                <option value="website">Website</option>
                <option value="photo">Photo Shoot</option>
                <option value="repair">Repair And Service</option>
            </select>
            @error('pic') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="request" class="form-label inline-block mb-2 text-gray-700 mr-10">Request</label>
            <textarea wire:model="request" id="request" rows="3" class="form-control w-72 ml-6 border border-solid border-gray-300" placeholder="request" value="null"></textarea>
            @error('request') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group flex justify-end">
            <button wire:click="inputData" class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md">Submit</button>
        </div>
    </div>
</div>