<div class="p-5 mt-5 flex flex-col gap-5 ">
    <div class="flex items-center gap-5 w-full justify-between">
      <div class="flex justify-start gap-5">
        <button wire:click="create()" class="btn btn-primary">Tambah Data</button>
        <a href={{ route("orders/export-import") }} class="btn btn-primary">Export-Import</a>
      </div>
    </div>
    <div class="flex flex-col gap-2 mb-3">
      <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
        </svg>
        <h2>Filter</h2>        
      </div>
      <div class="flex gap-5">
        <input type="text" placeholder="Search" class="input input-bordered w-full max-w-xs drop-shadow-md"  wire:model="search" wire:change="save()"/>
        <select class="w-full max-w-xs select drop-shadow-md" wire:model="search_status">
          <option value="" selected>Status</option>
          <option value="1">Pending</option>
          <option value="2">Selesai</option>
          <option value="3">On Proses</option>
          <option value="4">Cancel</option>
        </select>
        <select class="w-full max-w-xs select drop-shadow-md" wire:model="search_orderby">
          <option value="desc">Latest</option>
          <option value="asc">Oldest</option>
        </select>
        <input type="date" placeholder="Start Estimation" class="input input-bordered w-full max-w-xs drop-shadow-md"  wire:model="search_start_estimation" wire:change="save()"/>
        <input type="date" placeholder="End Estimation" class="input input-bordered w-full max-w-xs drop-shadow-md"  wire:model="search_end_estimation" wire:change="save()"/>
      </div>
    </div>
    <div class="card w-full bg-base-100 shadow-xl overflow-auto">
      <div class="card-body">
          <div>
            {{ $orders->links() }}
          </div>
          <table class="w-full table overflow-auto p-4 mb-4 ">
            <thead>
              <tr>
                <td>No</td>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>No Handphone</th>
                <th>Customer Address</th>
                <th>Problem</th>
                <th>PIC</th>
                <th>Start</th>
                <th>End</th>
                <th>Description</th>
                <th>Status</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @if (count($orders) <= 0 || $orders === null)
              <tr>
                <td class="text-center" colspan="12">No Data</td>
              </tr>
            @else
            @foreach ($orders as $order)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $order['id'] }}</td>
                  <td>{{ $order['name'] }}</td>
                  <td>{{ $order['email'] }}</td>
                  <td>{{ $order['phone_number'] }}</td>
                  <td class="text-wrap">{{ $order['address'] }}</td>
                  <td>{{ $order['request'] }}</td>
                  <td>{{ $order['pic'] }}</td>
                  <td>{{ $order['start_estimation'] }}</td>
                  <td>{{ $order['end_estimation'] }}</td>
                  <td>{{ $order['description'] }}</td>
                  <td>{{ $order['status'] }}</td>
                  <td>{{ "Rp." . number_format($order['price'],2,',','.') }}</td>
                  <td>
                      <a href="orders/receipt/{{ $order->id }}" class="btn btn-primary" target="_blank">Print</a>
                      <button wire:click="delete({{ $order->id }})" class="btn bg-red-600">Delete</button>
                      <button wire:click="update({{ $order->id }})" class="btn">edit</button>
                  </td>
              </tr>
              @endforeach
              @endif
          </tbody>
          </table>
      </div>
    </div>
  </div>

  <div class="collapse">
    <input type="checkbox" class="w-full"/> 
    <div class="collapse-title text-xl font-medium">
      Click me to show/hide content
    </div>
    <div class="collapse-content"> 
      <p>hello</p>
    </div>
  </div>

 