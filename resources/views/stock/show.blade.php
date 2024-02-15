
@extends('baseView.main')

@section('activeStock')
link-secondary
@endsection

@section('content')
     
        <div class="container text-center col-4">
                
                    
                        <div class="col-md-12 my-3">
                            <div class="card">
                                <div class="card-header">{{ $stock->ingredient }}</div>
                                <div class="card-body">Now: {{ $stock->quantity }}, (min: {{ $stock->minStock }})</div>
                            </div>
                        </div>
                    
            </div>            
        <div class="container text-center my-5">
           
                <div class="col-md-12 mb-2 ">
                    <a href = "{{ route('stock.index') }}">
                        <button type="button" class="btn btn-outline-primary me-2">Back to list</button>
                    </a>  
                </div>
                <div class="col-md-12 mb-2 ">
                    <a href = "{{ route('stock.edit', ['stock' => $stock->id])  }}">
                        <button type="button" class="btn btn-outline-success me-2">Edit</button>
                    </a>  
                </div>
                <form action="{{ route('stock.destroy', ['stock' => $stock->id])  }}" method="POST" onsubmit="if (confirm('Delete?')) {return true} else {return false}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger me-2" value="Delite">
                </form>               
            
        </div>   
   
@endsection