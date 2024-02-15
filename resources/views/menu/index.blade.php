@extends('baseView.main')

@section('activeMenu')
link-secondary
@endsection

@section('content')
    <div class="container text-center my-5">    
        <h2>Menus</h2>
            <div class="container">
                <div class="row">
                    @foreach ($menus as $menu)
                        <div class="col-3 my-3">
                            <div class="card">
                                <div class="card-header">{{ $menu->day }}</div>
                                <div class="card-body">
                                    @if($menu->dishes) 
                                        @foreach ($menu->dishes as $dish)
                                            <li>{{ $dish }}</li>
                                        @endforeach
                                    @endif
                                </div>
                                <a href="{{ route('menu.edit', ['menu' => $menu->id]) }}" class="btn btn-outline-primary"> edit </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>            
    </div> 
@endsection