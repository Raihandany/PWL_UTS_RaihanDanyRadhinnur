@extends('layout.tamplate')
        
@section('content')
    

        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('productlist') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Type the keyword" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Search</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('productlist/create') }}' class="btn btn-primary">Add Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Product Code</th>
                            <th class="col-md-2">Name</th>
                            <th class="col-md-2">Category</th>
                            <th class="col-md-2">Price</th>
                            <th class="col-md-1">Stoq</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                            <td> {{ $i }} </td>
                            <td>{{ $item->code_product }}</td>
                            <td>{{ $item->name_product }}</td>
                            <td>{{ $item->category_product }}</td>
                            <td>{{ $item->price_product}}</td>
                            <td>{{ $item->stoq_product }}</td>
                            <td>
                                <a href='{{ url('productlist/'.$item->code_product.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Are you sure you want delete the data?')" class='d-inline' action="{{ url('productlist/'.$item->code_product) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                        
                    </tbody>
                </table>
                {{ $data->links() }}
          </div>
          <!-- AKHIR DATA -->
@endsection