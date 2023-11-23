@extends('layouts.app')

@section('body')

  <h1 class="mb-0">Edit hotel</h1>
  <form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
        <label for="inputTitle4" class="form-label">Nom product</label>
        <input type="Text" name="product_name" class="form-control" id="inputTitle4" value="{{ $product->hotel_name }}">
    </div>
    <div class="col-12">
        <label for="inputdescription2" class="form-label">Description product</label>
        <textarea type="text" name="product_description" class="form-control" id="inputdescription2" cols="30"
            rows="2"  value="{{ $product->hotel_description }} ></textarea>
    </div>
    <div class="col-md-6">
        <label for="inputTitle4" class="form-label">Nom chambre</label>
        <input type="Text" name="room_name" class="form-control" id="inputTitle4" value="{{ $product->room_name }}">
    </div>
    <div class="col-md-6">
        <label for="inputTitle4" class="form-label">Prix</label>
        <input type="Text" name="price" class="form-control" id="inputTitle4" value="{{ $product->pricee }}">
    </div>
    <div class="col-md-6">
        <label for="inputPrice4" class="form-label">Nombre de chambre</label>
        <input type="number" min="0" class="form-control" name="number_beds" id="inputPrice4" value="{{ $product->number_beds }}">
    </div>
    <div class="col-12">
        <label for="inputproductCode" class="form-label">Maximun adultes</label>
        <input type="text" name="max_adults" class="form-control" id="inputproductCode" value="{{ $product->max_adults}}">
    </div>
    <div class="col-md-6">
        <label for="inputTitle4" class="form-label">Enfants maximum autorisé</label>
        <input type="Text" name="max_child" class="form-control" id="inputTitle4" value="{{ $product->max_child }}">
    </div>

    <div class="col-md-6">
        <label for="inputTitle4" class="form-label">Attributs</label>
        <select name="attribut" id="" class="form-control">
            <option value="Services de réveil ">Services de réveil </option>
            <option value="Télévision">Télévision</option>
            <option value="Service de nettoyage">Service de nettoyage</option>
            <option value="Petit déjeuner">Petit déjeuner</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="inputTitle4" class="form-label">Status</label>
        <select name="status" id="" class="form-control">
            <option value="1"></option>
            <option value="0"></option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection
