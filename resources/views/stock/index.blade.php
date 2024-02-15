@extends('baseView.main')

@section('activeStock')
link-secondary
@endsection

@section('content')
    <div class="container text-center my-5">    
        <h2>Have in stock</h2>
            <div class="container">
                <div class="row">
                    @foreach ($stocks as $stock)
                        <div class="col-4 my-3">
                            <div class="card">
                                <div class="card-header">{{ $stock->ingredient }}</div>
                                <div class="card-body">now: {{ $stock->quantity }}, (min: {{ $stock->minStock }})</div>
                                <a href="{{ route('stock.show', ['stock' => $stock->id]) }}" class="btn btn-outline-primary"> check </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>            
        <div class="container text-center my-5">
            <div class="col-md-12 mb-2 mb-md-0">
                <a href = "{{ route('stock.create') }}">
                    <button type="button" class="btn btn-outline-primary me-2">Add ingredient</button>
                </a>  
            </div>
        </div>   
    </div> 
@endsection