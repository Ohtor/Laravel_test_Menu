@extends('baseView.main')

@section('activeMain')
link-secondary
@endsection

@section('content')
    <div class="container text-center my-5">
        <h1>Make list for:</h1>
        <div class="col-lg-4 mx-auto">
            <main class="form-signin w-100 m-auto" >
                <form action="{{route('main.show')}}" method="get" >
                    @csrf
        
                    @foreach($days as $day)
                        <div class="block ">
                            <label for={{ $day }} class="inline-flex items-center">
                                <input id={{ $day }} type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name={{ $day }}>
                                <span class="ms-2 text-sm text-gray-600">{{ $day }}</span>
                            </label>
                        </div>
                    @endforeach

                    <button class="btn btn-primary w-50 py-2 mt-4" type="submit">Submit</button>                      
                </form>
            </main>
        </div>
    </div>
@endsection