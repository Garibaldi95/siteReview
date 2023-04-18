@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
    <h1>Форма добавления отзыва</h1>

    @if($errors->any()) <!-- Проверка на ошибки -->

        <div class = "alert alert-danger">
            <ul>
                @foreach($errors->all() as $error) <!-- Пурубор всех ошибок -->

                    <li>{{ $error }}}</li>
                @endforeach
            </ul>

        </div>
    @endif
    <form method = "post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class = "form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class = "form-control"><br>
        <textarea name="message" id="message" class = "form-control" placeholder="Ввдедите сообщение"></textarea><br>
        <button type="submit" class = "btn btn-success">Отправить</button>


    </form>

    <h1>Все отзывы</h1>
    @foreach($reviews as $elem)
        <div class = "alert alert-warning">
            <h3>{{$elem->subject}}</h3>
            <b>{{$elem->email}}</b>
            <p>{{$elem->message}}</p>


        </div>
    @endforeach

@endsection
