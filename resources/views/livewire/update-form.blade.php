    <div>
        @csrf
        <div class="w-full p-6 rounded-lg shadow-lg">
            <div class="my-4 form-group">
                <label for="client_name" class="inline-block text-gray-700 form-label">Nama</label>
                <input wire:model="client_name" type="text" class="w-full max-w-xs mx-20 input" />
                @error('forms.client_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="client_email" class="inline-block mr-1 text-gray-700 form-label">Email</label>
                <input type="text" wire:model="client_email" type="text" class="w-full max-w-xs mx-20 input" />
                @error('forms.client_email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="no_handphone" class="inline-block text-gray-700 form-label">No. Handphone</label>
                <input wire:model="no_handphone" type="text" class="w-full max-w-xs mx-3 input" maxlength="12" />
                @error('forms.no_handphone') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="almt_rumah" class="inline-block text-gray-700 form-label">Alamat Rumah</label>
                <input wire:model="alamat" type="text"  class="w-full max-w-xs mx-4 input" />
                @error('forms.alamat') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="client_name" class="inline-block mr-10 text-gray-700 form-label">Jenis Servis</label>
                <select class="w-full max-w-xs select mx-15" wire:model="pic">
                    <option selected>Open this select menu</option>
                    <option value="website">Website</option>
                    <option value="photo">Photo Shoot</option>
                    <option value="repair">Repair And Service</option>
                </select>
                @error('forms.pic') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="w-full my-4 form-group">
                <label for="request" class="inline-block mr-10 text-gray-700 form-label">Request</label>
                <textarea class="mx-6 textarea w-80" wire:model="request" placeholder="Request"></textarea>
                @error('forms.request') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="estm-ml" class="inline-block text-gray-700 form-label">Estimasi Mulai</label>
                <input wire:model="mulai" type="date" class="w-full max-w-xs mx-5 input" />
                @error('forms.mulai') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="estm-sls" class="inline-block text-gray-700 form-label">Estimasi Selesai</label>
                <input wire:model="selesai" type="date" class="w-full max-w-xs mx-2 input" />
                @error('forms.selesai') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="keterangan" class="inline-block text-gray-700 form-label">Keterangan</label>
                <input wire:model="keterangan" type="text" placeholder="Keterangan" class="w-full max-w-xs mx-10 input" id="keterangan"/>
                @error('forms.keterangan') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="status" class="inline-block mr-10 text-gray-700 form-label">Status</label>
                <select class="w-full max-w-xs select mx-9" wire:model="status" id="status">
                    <option selected>Open this select menu</option>
                    <option value="pending">Pending</option>
                    <option value="selesai">Selesai</option>
                    <option value="on_proses">On Proses</option>
                    <option value="cancel">Cancel</option>
                </select>
                @error('forms.status') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="my-4 form-group">
                <label for="jumlah" class="inline-block mr-1 mr-8 text-gray-700 form-label">Jumlah</label>
                <input wire:model="jumlah" type="text" placeholder="Jumlah IDR" class="w-full max-w-xs mx-10 input" />
                @error('forms.jumlah') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="flex justify-end form-group">
                <button wire:click="update" class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-400">Submit</button>
            </div>
        </div>
        @if (session('message'))
            <div class="px-4 py-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="w-6 h-6 mr-4 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">{{ session('message') }}</p>
                        <p class="text-sm">Silahkan di cek kembali pada menu Problem List!</p>
                    </div>
                </div>
            </div>
        @endif
    </div>

