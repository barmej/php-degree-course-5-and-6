@extends('layouts.app')

@section('title','صفحه الكتب')

@section('content')

@php
    echo "انا مغامر";
@endphp


@forelse ($books as $book)
    {{ $loop->index }} رقم الدوره<br>
    {{$book->title}} عنوان الكتاب هو<br>
    {{$book->pages}} عدد صفحاته هو<br>
    @empty
        لا توجد كتب
@endforelse

<form action="./books/create" method="post">
    @csrf
    <label for="title">عنوان الكتاب</label>
    <input type="text" name="title" id="title"><br>

    <label for="pages">عدد الصفحات</label>
    <input type="text" name="pages" id="pages"><br>

    <input type="submit" value="ادخال">
</form>

@endsection