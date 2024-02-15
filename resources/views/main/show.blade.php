@extends('baseView.main')

@section('activeMain')
link-secondary
@endsection

@section('content')
    <div class="container text-center my-5">
        @foreach($daysForShow as $day)
        <div class="block ">
            <label for={{ $day }} class="inline-flex items-center">
                <input id={{ $day }} type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name={{ $day }}>
                <span class="ms-2 text-sm text-gray-600">{{ $day }}</span>
            </label>
        </div>
        @endforeach
        <div class="col-md-12 mb-2 ">
            <a href = "{{ route('main.index') }}">
                <button type="button" class="btn btn-outline-primary me-2">Back to main</button>
            </a>  
        </div>
        <div class="col-md-12 mb-2 ">
            @foreach($daysMenu as $dish)
            <li>{{ $dish }}</li>
            @endforeach
        </div>
    </div>
@endsection