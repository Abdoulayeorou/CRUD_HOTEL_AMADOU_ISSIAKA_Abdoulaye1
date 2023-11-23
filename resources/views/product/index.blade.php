@extends('layouts.app');

@section('body')
    <div class="d-flex align-items-center justify-content-between">
         <h1 class="mb-0">List hotel</h1>
         <a href="{{ route('product.create') }}" class="btn btn-primary"> Add Product</a>
    </div>
    <hr>
    @if (Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
      </div>
    @endif

    <table class="table">
        <thead class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom hotel</th>
            <th scope="col">Nom de Chambre</th>
            <th scope="col">Prix</th>
            <th scope="col">Nombre de lits</th>
            <th scope="col">Statut</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @if ($product->count() > 0)
            @foreach ($product as $rs)
            <tr>
                <th>{{ $rs->id }}</th>
                <td>{{ $rs->hotel_name }}</td>
                <td>{{ $rs->room_name }}</td>
                <td>{{ $rs->price }}</td>
                <td>{{ $rs->number_beds }}</td>
                <td>{{ $rs->status }}</td>
                <td>
                    <div class="d-flex">
                         <a href="{{ route('product.show', $rs->id) }}" class="btn btn-secondary">Detail</a>
                        <a href="{{ route('product.edit', $rs->id) }}" class="btn btn-warning">Edit</a>
                        {{-- <form action="{{ route('hotel.destroy', $rs->id)}}" method="POST"  type="button" class="btn bnt-danger p-0" onsubmit="return confirm('delele?')"></form>
                        @csrf
                        @method('DELETE')
                        <button class="btn bnt-danger m-0" >Delete</button>
                       </form> --}}
                       <form action="{{ route('product.destroy', $rs->id)}}" method="post" onsubmit="return confirm('delele?')">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-danger" type="submit">Delete</button>
                      </form>

                    </div>
              </td>
              </tr>
            @endforeach
            @endif

            <tr>
                <td class="text-center" colspan="5">hotel not found</td>
            </tr>

        </tbody>
      </table>
@endsection
