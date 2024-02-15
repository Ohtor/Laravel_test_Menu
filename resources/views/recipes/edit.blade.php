@extends('baseView.main')

@section('activeRecipes')
link-secondary
@endsection


@section('content')
    


    <div class="container text-center my-5">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <main class="form-signin w-100 m-auto" >
                    <form action="{{route('recipes.update', ['recipe' => $recipe->id])}}" method="post" >
                        @csrf
                        @method('PUT')
                        <img class="mb-4" src="Avatar.png" alt="Тут должна быть картинка..." width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Edit recipe:</h1>
                  
                        <div class="form-floating mt-2 mb-2" >
                            <input type="text" name="recipe" class="form-control" id="recipe" placeholder="What recipe?" required value="{{ $recipe->recipe }}">
                            <label for="recipe">Recipe:</label>
                            @error('recipe')
                            <div class="alert alert-danger"> {{ $message }}   </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="properties">Components</label>
                            <div class="row">
                                <div class="col-md-8 mt-2 mb-2">
                                    Ingredient:
                                </div>
                                <div class="col-md-4 mt-2 mb-2">
                                    Quantity:
                                </div>
                            </div>
                            @for ($i=0; $i <= 9; $i++)
                            <div class="row">
                                <div class="col-md-8 mt-2 mb-2">
                                    <input type="text" name="components[{{ $i }}][key]" class="form-control" value="{{ $recipe->components[$i]['key'] ?? '' }}">
                                </div>
                                <div class="col-md-4 mt-2 mb-2">
                                    <input type="text" name="components[{{ $i }}][value]" class="form-control" value="{{ $recipe->components[$i]['value'] ?? '' }}">
                                </div>
                            </div>
                            @endfor
                        </div>
                        {{-- <div class="form-floating mt-2 mb-2">
                            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="quantity you have">
                            <label for="quantity">Quantity:</label>
                        </div>
                        <div class="form-floating mt-2 mb-2">
                            <input type="text" name="minStock" class="form-control" id="minStock" placeholder="minimum stock">
                            <label for="minStock">Minimum stock:</label>
                        </div> --}}
                        <button class="btn btn-primary w-50 py-2 mt-4" type="submit">Submit</button>                      
                    </form>
                </main>
            </div>
        </div>        
    </div>    



@endsection