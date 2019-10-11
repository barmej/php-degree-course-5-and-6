@extends('layouts.app')

@section('title','صفحه الكتب')

@section('content')

@forelse ($books as $book)
    {{ $loop->index }} رقم الدوره<br>
    {{$book->title}} عنوان الكتاب هو<br>
    {{$book->pages}} عدد صفحاته هو<br>
    @empty
        لا توجد كتب
@endforelse

@endsection