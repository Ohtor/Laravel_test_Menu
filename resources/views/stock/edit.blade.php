@extends('baseView.main')

@section('activeStock')
link-secondary
@endsection

@section('content')
    


    <div class="container text-center my-5">
        <h1>Что добавить</h1>
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <main class="form-signin w-100 m-auto" >
                    <form action="{{route('stock.update', ['stock' => $stock->id])}}" method="post" >
                        @csrf
                        @method('PUT')
                        <img class="mb-4" src="Avatar.png" alt="Тут должна быть картинка..." width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Ingredient:</h1>
                  
                        <div class="form-floating mt-2 mb-2" >
                            <input type="text" name="ingredient" class="form-control" id="ingredient" required placeholder="What ingredient?" value="{{ $stock->ingredient }}">
                            <label for="ingredient">Ingredient:</label>
                            @error('ingredient')
                            <div class="alert alert-danger"> {{ $message }}   </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-2 mb-2">
                            <input type="text" name="quantity" class="form-control" id="quantity" required placeholder="quantity you have" value="{{ $stock->quantity }}">
                            <label for="quantity">Quantity:</label>
                        </div>
                        <div class="form-floating mt-2 mb-2">
                            <input type="text" name="minStock" class="form-control" id="minStock" required placeholder="minimum stock" value="{{ $stock->minStock }}">
                            <label for="minStock">Minimum stock:</label>
                        </div>
                        <button class="btn btn-primary w-50 py-2" type="submit">Edit</button>                     
                    </form>
                </main>
            </div>
        </div>        
    </div>    



@endsection