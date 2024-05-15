@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Data Brand</b></div>

                <div class="card-body">
                    <a href="{{ route('brand.create') }}" class="btn btn-dark"><b><i>Add Data</i></b></a>
                 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name Brand</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1; @endphp
    @foreach ($brand as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $data->name_brand }}</td>
      <td>
        <a href="" class="btn btn-dark"><b>Edit</b></a>
        <a href="{{route('brand.show', $data->id)}}" class="btn btn-secondary"><b>Show</b></a>
        <a href="" class="btn btn-dark"><b>Delete</b></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
