@extends('baseView.main')

@section('activeMenu')
link-secondary
@endsection

@section('content')

    <div class="container text-center my-5">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <main class="form-signin w-100 m-auto" >
                    <form action="{{route('menu.update', ['menu' => $menu->id])}}" method="post" >
                        @csrf
                        @method('PUT')
                        <img class="mb-4" src="Avatar.png" alt="Тут должна быть картинка..." width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Edit menu for {{ $menu->day }}.</h1>                  
                        
                        <div class="form-group">
                            <label for="properties">Menu:</label>
                                @for ($i=0; $i <= 9; $i++)
                                    <li> <input type="text" name="dishes[{{ $i }}]" class="form-control" value="{{ $menu->dishes[$i] ?? '' }}"> </li>
                                @endfor                            
                        <button class="btn btn-primary w-50 py-2 mt-4" type="submit">Submit</button>                      
                    </form>
                </main>
            </div>
        </div>        
    </div>    



@endsection