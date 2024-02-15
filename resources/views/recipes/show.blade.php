@extends('baseView.main')

@section('activeRecipes')
link-secondary
@endsection


@section('content')
    <div class="container text-center my-5">
        <div class="container col-8 my-3">        
            <table class="table table-dark">
                <tbody>
                    <th scope="row">{{ $recipe->recipe }}</th>
                    <td >
                        @foreach ($recipe->components as $component)
                            <b>{{ $component['key'] }}</b>: {{ $component['value'] }}<br />
                        @endforeach
                    </td>
                    {{-- <td> <a href="{{ route('recipes.show', ['recipe' => $recipe->id]) }}" class="btn btn-outline-primary"> check </a> </td> --}}
                </tbody>
            </table>
        </div>

            {{-- <div class="container text-center col-4">
                    
                        
                            <div class="col-md-12 my-3">
                                <div class="card">
                                    <div class="card-header">{{ $price->ingredient }}</div>
                                    <div class="card-body">Now: {{ $price->price }}</div>
                                </div>
                            </div>
                        
            </div>             --}}
            
        <div class="container text-center my-5">            
            <div class="col-md-12 mb-2 ">
                <a href = "{{ route('recipes.index') }}">
                    <button type="button" class="btn btn-outline-primary me-2">Back to list</button>
                </a>  
                </div>
                <div class="col-md-12 mb-2 ">
                    <a href = "{{ route('recipes.edit', ['recipe' => $recipe->id])  }}">
                        <button type="button" class="btn btn-outline-success me-2">Edit</button>
                    </a>  
                </div>
                <form action="{{ route('recipes.destroy', ['recipe' => $recipe->id])  }}" method="POST" onsubmit="if (confirm('Delete?')) {return true} else {return false}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger me-2" value="Delite">
                </form>               
            </div>   
        </div>
    </div>
@endsection