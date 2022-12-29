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
        <div class="form-group my-4">
            <label for="client_name" class="form-label inline-block text-gray-700">Nama</label>
            <input wire:model="name" type="text" placeholder="Nama" class="input w-full max-w-xs mx-20" />
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="client_email" class="form-label inline-block mr-1 text-gray-700">Email</label>
            <input wire:model="email" type="text" placeholder="Email" class="input w-full max-w-xs mx-20" />
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="no_handphone" class="form-label inline-block text-gray-700">No. Handphone</label>
            <input wire:model="no_handphone" type="text" placeholder="No. Handphone" class="input w-full max-w-xs mx-3" maxlength="12" />
            @error('no_handphone') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="almt_rumah" class="form-label inline-block text-gray-700">Alamat Rumah</label>
            <input wire:model="alamat" type="text" placeholder="Alamat" class="input w-full max-w-xs mx-4" />
            @error('alamat') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="client_name" class="form-label inline-block text-gray-700 mr-10">Jenis Servis</label>
            <select class="select w-full max-w-xs mx-15" wire:model="pic">
                <option selected>Open this select menu</option>
                <option value="website">Website</option>
                <option value="photo">Photo Shoot</option>
                <option value="repair">Repair And Service</option>
            </select>
            @error('pic') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4 w-full">
            <label for="request" class="form-label inline-block text-gray-700 mr-10">Request</label>
            <textarea class="textarea mx-6 w-80" wire:model="request" placeholder="Request"></textarea>
            @error('request') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="estm-ml" class="form-label inline-block text-gray-700">Estimasi Mulai</label>
            <input wire:model="estimasi_mulai" type="date" class="input w-full max-w-xs mx-5" />
            @error('estimasi_mulai') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="estm-sls" class="form-label inline-block text-gray-700">Estimasi Selesai</label>
            <input wire:model="estimasi_selesai" type="date" class="input w-full max-w-xs mx-2" />
            @error('estimasi_selesai') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="keterangan" class="form-label inline-block text-gray-700">Keterangan</label>
            <input wire:model="keterangan" type="text" placeholder="Keterangan" class="input w-full max-w-xs mx-10" id="keterangan"/>
            @error('keterangan') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="status" class="form-label inline-block text-gray-700 mr-10">Status</label>
            <select class="select w-full max-w-xs mx-9" wire:model="status" id="status">
                <option selected>Open this select menu</option>
                <option value="pending">Pending</option>
                <option value="selesai">Selesai</option>
                <option value="on_proses">On Proses</option>
                <option value="cancel">Cancel</option>
            </select>
            @error('status') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group my-4">
            <label for="jumlah" class="form-label inline-block mr-1 text-gray-700 mr-8">Jumlah</label>
            <input wire:model="jumlah" type="number" placeholder="Jumlah IDR" class="input w-full max-w-xs mx-10" />
            @error('jumlah') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group flex justify-end">
            <button wire:click="inputData" class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md">Submit</button>
        </div>
    </div>
</div>