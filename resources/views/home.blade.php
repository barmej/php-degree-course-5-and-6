@extends('layouts.app')

@section('title','صفحه الكتب')

@section('content')

{{ __('messages.yourbalance',['deduct'=>'20','balance'=>'100']) }} <br><br>

@component('components.alert',['title'=>'مرحبا بك','type'=>'danger'])
    هذه رساله نجاح
@endcomponent


@forelse ($books as $book)
    {{ $loop->index }} رقم الدوره<br>
    {{$book->title}} عنوان الكتاب هو<br>
    {{$book->pages}} عدد صفحاته هو<br>
    @empty
        لا توجد كتب
@endforelse

<form action="./books/create" method="post">
    @csrf
    <select name="user" id="user">
        @foreach($users as $user)
            <option value="{{$user->id}}">
                {{$user->name}}
            </option>
        @endforeach
    </select><br>

    <label for="title">عنوان الكتاب</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}"><br>

    <label for="pages">عدد الصفحات</label>
    <input type="number" min="1" max="2000" name="pages" id="pages" value="{{ old('pages') }}"><br>

    <input type="submit" value="ادخال">
</form>

@endsection