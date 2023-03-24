<div class="w-full p-5">
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Name</span>
        </label>
        <input type="text" wire:model="order.name" placeholder="Name" class="input input-bordered w-full" />
        @error('order.name')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Email</span>
        </label>
        <input type="text" wire:model="order.email" placeholder="Email" class="input input-bordered w-full" />
        @error('order.email')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Phone Number</span>
        </label>
        <input type="text" wire:model="order.phone_number" placeholder="Phone Number" class="input input-bordered w-full" />
        @error('order.phone_number')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Address</span>
        </label>
        <textarea wire:model="order.address" placeholder="Address" class="textarea textarea-bordered"></textarea>
        @error('order.address')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Start Estimation</span>
        </label>
        <input type="date" wire:model="order.start_estimation" placeholder="Start Estimation" class="input input-bordered w-full" />
        @error('order.start_estimation')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">End Estimation</span>
        </label>
        <input type="date" wire:model="order.end_estimation" placeholder="End Estimation" class="input input-bordered w-full" />
        @error('order.end_estimation')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Service</span>
        </label>
        <select class="select select-bordered w-full mx-15" wire:model="order.pic">
            <option selected disabled>Open this select menu</option>
            <option value="0">Website</option>
            <option value="1">Multimedia</option>
            <option value="2">Repair And Service</option>
        </select>
        @error('order.status')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Request</span>
        </label>
        <textarea wire:model="order.request" placeholder="Request" class="textarea textarea-bordered"></textarea>
        @error('order.request')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Description</span>
        </label>
        <textarea wire:model="order.description" placeholder="Description" class="textarea textarea-bordered"></textarea>
        @error('order.description')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Status</span>
        </label>
        <select class="select select-bordered w-full mx-15" wire:model="order.status">
            <option selected disabled>Open this select menu</option>
            <option value="0">Pending</option>
            <option value="1">Selesai</option>
            <option value="2">On Proses</option>
            <option value="3">Cancel</option>
        </select>
        @error('order.status')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
        <span class="label-text-alt">Price</span>
        </label>
        <input type="number" wire:model="order.price" placeholder="Price" class="input input-bordered w-full" />
        @error('order.price')
            <label class="label">
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            </label>
        @enderror
    </div>
    <div class="mt-5 flex gap-2">
        <button wire:click="update" class="btn btn-primary">Submit</button>
    </div>
</div>




        



