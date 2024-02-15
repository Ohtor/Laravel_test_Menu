@extends('baseView.main')

@section('activeRecipes')
link-secondary
@endsection

@section('content')
    <div class="container text-center my-5">    
        <h1>Recipe list:</h1>

        <div class="container col-8 my-3">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Recipe</th>
                        <th scope="col">Components</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                @foreach ($recipes as $recipe)
                    <tbody>
                        <th scope="row">{{ $recipe->recipe }}</th>
                        <td >
                            @foreach ($recipe->components as $component)
                                <b>{{ $component['key'] }}</b>: {{ $component['value'] }}<br />
                            @endforeach
                        </td>
                        <td> <a href="{{ route('recipes.show', ['recipe' => $recipe->id]) }}" class="btn btn-outline-primary"> check </a> </td>
                    </tbody>
                @endforeach
            </table>
        </div>
            
        
        
        
        
        <div class="container text-center my-5">
            <div class="col-md-12 mb-2 mb-md-0">
                <a href = "{{ route('recipes.create') }}">
                    <button type="button" class="btn btn-outline-primary me-2">Add recipe</button>
                </a>  
            </div>
        </div>
    </div>
@endsection