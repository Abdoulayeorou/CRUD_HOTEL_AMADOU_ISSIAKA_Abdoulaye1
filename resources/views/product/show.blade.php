@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Hotel</h1>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Nom hotel</label>
            <input type="Text" name="hotel_name" class="form-control" id="inputTitle4" value="{{ $product->product_name }}"
                readonly>
        </div>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Attributs</label>
            <input type="Text" name="max_child" class="form-control" id="inputTitle4" value="{{ $product->attribut }}"
                readonly>
        </div>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Nom chambre</label>
            <input type="Text" name="room_name" class="form-control" id="inputTitle4" value="{{ $product->room_name }}"
                readonly>
        </div>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Prix</label>
            <input type="Text" name="price" class="form-control" id="inputTitle4" value="{{ $product->pricee }}"
                readonly>
        </div>
        <div class="col-md-6">
            <label for="inputPrice4" class="form-label">Nombre de chambre</label>
            <input type="number" min="0" class="form-control" name="number_beds" id="inputPrice4"
                value="{{ $product->number_beds }}" readonly>
        </div>
        <div class="col-12">
            <label for="inputproductCode" class="form-label">Maximun adultes</label>
            <input type="text" name="max_adults" class="form-control" id="inputproductCode"
                value="{{ $product->max_adults }}" readonly>
        </div>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Enfants maximum autorisé</label>
            <input type="Text" name="max_child" class="form-control" id="inputTitle4"
                value="{{ $product->max_child }}" readonly>
        </div>

        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Attributs</label>
            <input type="Text" name="max_child" class="form-control" id="inputTitle4"
                value="{{ $product->attribut }}" readonly>
        </div>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Status</label>
            <input type="Text" name="max_child" class="form-control" id="inputTitle4" value="{{ $product->status }}"
                readonly>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


@endsection
