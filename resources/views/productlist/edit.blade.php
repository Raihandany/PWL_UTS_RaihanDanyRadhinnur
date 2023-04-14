@extends('layout.tamplate')
@section('content')

<!-- START FORM -->
<form action='{{ url('productlist/'.$data->code_product) }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('prodcutlist') }}' class="btn btn-secondary"><< Back</a>
        <!-- Code Product -->
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">Code Product</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='codeproduct' value="{{ $data->code_product }}" id="codeproduct">
            </div>
        </div>
        <!-- Name Product -->
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nameproduct' value="{{ $data->name_product }}" id="nameproduct">
            </div>
        </div>
        <!-- Category Product -->
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='categoryp' value="{{ $data->category_product }}" id="categoryp">
            </div>
        </div>
        <!-- Price Product -->
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='pricep' value="{{ $data->price_product }}" id="pricep">
            </div>
        </div>
        <!-- Stoq Product -->
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Stoq</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='stoqp' value="{{ $data->stoq_product }}" id="stoqp">
            </div>
        </div>
        
        <!-- AKHIR FORM -->
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Save</button></div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection