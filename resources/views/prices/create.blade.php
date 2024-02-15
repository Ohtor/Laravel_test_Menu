@extends('baseView.main')

@section('activePrices')
link-secondary
@endsection

@section('content')
    <h1>Что добавить</h1>


    <div class="container text-center my-5">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <main class="form-signin w-100 m-auto" >
                    <form action="{{route('prices.store')}}" method="post" >
                        @csrf
                        <img class="mb-4" src="Avatar.png" alt="Тут должна быть картинка..." width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Ingredient:</h1>
                  
                        <div class="form-floating mt-2 mb-2" >
                            <input type="text" name="ingredient" class="form-control" id="ingredient" required value="{{ old('ingredient') ?? '' }} placeholder="What ingredient?">
                            <label for="ingredient">Ingredient:</label>
                            @error('ingredient')
                            <div class="alert alert-danger"> {{ $message }}   </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-2 mb-2">
                            <input type="text" name="price" class="form-control" id="price" required value="{{ old('price') ?? '' }}" placeholder="price">
                            <label for="price">Price:</label>
                        </div>
                        
                        <button class="btn btn-primary w-50 py-2" type="submit">Submit</button>
                    </form>
                </main>
            </div>
        </div>        
    </div>    



@endsection