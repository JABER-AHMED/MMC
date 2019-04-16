@extends('layouts.backend')

@section('content')
    <div class="row">
        <div id="app">
            <router-view name="default"></router-view>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/meal.js') }}"></script>
@endpush
