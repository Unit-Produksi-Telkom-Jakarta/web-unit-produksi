<div class="overflow-x-auto">

    <table class="table table-compact w-full">
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
            <td>{{ $d['jumlah'] }}</td>
        </tr>
        @endforeach
        @endif
    </tbody> 
    <tfoot>
        <tr>
            <th>No</th> 
            <th>Name</th> 
            <th>Email</th> 
            <th>No Handphone</th> 
            <th>Customer Address</th> 
            <th>Problem</th> 
            <th>Pic</th>
            <th>Start</th>
            <th>End</th>
            <th>Description</th>
            <th>Status</th>
            <th>Price</th>
          </tr>
      </tfoot>
    </table>
    <div>
      {{ $data->links() }}
    </div>
  </div>