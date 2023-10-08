@extends('layouts.main')
@section('content')
    @foreach ($datas as $data)
        <div class="flex justify-center my-2">
            <x-card :data="$data" />
        </div>
    @endforeach
    
@endsection
