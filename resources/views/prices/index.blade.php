@extends('baseView.main')

@section('activePrices')
link-secondary
@endsection

@section('content')
    {{-- <h1>Тут будут цены</h1> --}}
    <div class="container text-center my-5">    
        <h2>Prices</h2>
        <div class="container col-8 my-3">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Ingredient</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                @foreach ($prices as $price)
                    <tbody>
                        <th scope="row">{{ $price->ingredient }}</th>
                        <td >{{ $price->price }}</td>
                        <td> <a href="{{ route('prices.show', ['price' => $price->id]) }}" class="btn btn-outline-primary"> check </a> </td>
                    </tbody>
                @endforeach
            </table>
        </div>
            {{-- <div class="container">
                <div class="row">
                    @foreach ($prices as $price)
                        <div class="col-4 my-3">
                            <div class="card">
                                <div class="card-header">{{ $price->ingredient }}</div>
                                <div class="card-body">Now: {{ $price->price }}</div>
                                <a href="{{ route('prices.show', ['price' => $price->id]) }}" class="btn btn-outline-primary"> check </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>             --}}
        <div class="container text-center my-5">
            <div class="col-md-12 mb-2 mb-md-0">
                <a href = "{{ route('prices.create') }}">
                    <button type="button" class="btn btn-outline-primary me-2">Add ingredient</button>
                </a>  
            </div>
        </div>   
    </div> 
@endsection