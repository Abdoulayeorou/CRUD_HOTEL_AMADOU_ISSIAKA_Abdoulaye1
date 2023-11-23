@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Product</h1>
    <form class="row g-3" action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Nom hotel</label>
            <input type="Text" name="hotel_name" class="form-control" id="inputTitle4" required>
        </div>
        <div class="col-12">
            <label for="inputdescription2" class="form-label">Description Hotel</label>
            <textarea type="text" name="hotel_description" class="form-control" id="inputdescription2" cols="30"
                rows="2"></textarea>
        </div>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Nom chambre</label>
            <input type="Text" name="room_name" class="form-control" id="inputTitle4" required>
        </div>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Prix</label>
            <input type="Text" name="price" class="form-control" id="inputTitle4" required>
        </div>
        <div class="col-md-6">
            <label for="inputPrice4" class="form-label">Nombre de chambre</label>
            <input type="number" min="0" class="form-control" name="number_beds" id="inputPrice4" required>
        </div>
        <div class="col-12">
            <label for="inputProductCode" class="form-label">Maximun adultes</label>
            <input type="text" name="max_adults" class="form-control" id="inputProductCode">
        </div>
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Enfants maximum autorisé</label>
            <input type="Text" name="max_child" class="form-control" id="inputTitle4" required>
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
