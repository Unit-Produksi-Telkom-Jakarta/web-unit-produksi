<div class="p-2">
  <div class="flex flex-row gap-4 mb-3">
    <select class="select drop-shadow-md w-full max-w-xs" wire:model="search">
      <option value="" selected>Status</option>
      <option value="pending">Pending</option>
      <option value="selesai">Selesai</option>
      <option value="on_proses">On Proses</option>
      <option value="cancel">Cancel</option>
    </select>
    <select class="select drop-shadow-md w-full max-w-xs" wire:model="orderBy">
      <option value="latest">Latest</option>
      <option value="oldest">Oldest</option>
    </select>
  </div>
  <div class="overflow-x-auto">
      <table class="table table-compact w-full p-4 mb-4">
        <thead>
          <tr>
            <th>No</th>
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
        @if (count($data) <= 0)
          <tr>
            <td class="text-center" colspan="12">No Data</td>
          </tr>
        @else
        @foreach ($data as $d)
          <tr>
              <th>{{ $loop->iteration }}</th>
              <td>{{ $d['client_name'] }}</td>
              <td>{{ $d['client_email'] }}</td>
              <td>{{ $d['no_handphone'] }}</td>
              <td>{{ $d['alamat'] }}</td>
              <td>{{ $d['request'] }}</td>
              <td>{{ $d['pic'] }}</td>
              <td>{{ $d['mulai'] }}</td>
              <td>{{ $d['selesai'] }}</td>
              <td>{{ $d['keterangan'] }}</td>
              <td>{{ $d['status'] }}</td>
              <td>{{ "Rp." . number_format($d['jumlah'],2,',','.') }}</td>
              <td>
                  <a href="invoice/{{$d['id']}}" class="btn btn-primary">Print</a>
                  <button wire:click="delete({{ $d->id }})" class="btn bg-red-600">Delete</button>
              </td>
          </tr>
          @endforeach
          @endif
      </tbody>
      </table>
      <div>
        {{ $data->links() }}
      </div>
    </div>
</div>
