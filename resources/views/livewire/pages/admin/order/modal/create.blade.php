<div class="w-full p-5">
    @csrf
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Name</span>
        </label>
        <input type="text" wire:model="orders.name" placeholder="Name" class="input input-bordered w-full" />
        @error('orders.name')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Email</span>
        </label>
        <input type="text" wire:model="orders.email" placeholder="Email" class="input input-bordered w-full" />
        @error('orders.email')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Phone Number</span>
        </label>
        <input type="text" wire:model="orders.phone_number" placeholder="Phone Number" class="input input-bordered w-full" />
        @error('orders.phone_number')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Address</span>
        </label>
        <textarea wire:model="orders.address" placeholder="Address" class="textarea textarea-bordered resize-none"></textarea>
        @error('orders.address')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Start Estimation</span>
        </label>
        <input type="date" wire:model="orders.start_estimation" placeholder="Start Estimation" class="input input-bordered w-full" />
        @error('orders.start_estimation')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">End Estimation</span>
        </label>
        <input type="date" wire:model="orders.end_estimation" placeholder="End Estimation" class="input input-bordered w-full" />
        @error('orders.end_estimation')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Service</span>
        </label>
        <select class="select select-bordered w-full mx-15" wire:model="orders.pic">
            <option selected >Pilih Service</option>
            <option value="1">Website</option>
            <option value="2">Multimedia</option>
            <option value="3">Repair And Service</option>
        </select>
        @error('orders.pic')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Request</span>
        </label>
        <textarea wire:model="orders.request" placeholder="Request" class="textarea textarea-bordered resize-none"></textarea>
        @error('orders.request')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Description</span>
        </label>
        <textarea wire:model="orders.description" placeholder="Description" class="textarea textarea-bordered resize-none"></textarea>
        @error('orders.description')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Status</span>
        </label>
        <select class="select select-bordered w-full mx-15" wire:model="orders.status">
            <option selected >Pilih Status</option>
            <option value="1">Pending</option>
            <option value="2">Selesai</option>
            <option value="3">On Proses</option>
            <option value="4">Cancel</option>
        </select>
        @error('orders.status')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Price</span>
        </label>
        <input type="number" wire:model="orders.price" placeholder="Price" class="input input-bordered w-full" />
        @error('orders.price')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    @error('orders')
    <h1>{{ $message }}</h1>
    @enderror
    <div class="mt-5 flex gap-5">
        <button wire:click="save" class="btn btn-primary">Submit</button>
        <button wire:click="resetOrder" class="btn btn-error text-white">Reset</button>
    </div>
</div>




        


