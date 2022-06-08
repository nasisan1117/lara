@extends('layouts.app')

@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <title>サモナーネーム検索</title>
    </head>
    <body>
        <form action="/valo" method="POST">
            @csrf
            <p>サモナーネームを入力してください</p>
            <input type="text" name="name" placeholder="例:RuRey 0w0">
            <select name="region">
                <option value=""></option>
                <option value="na1">NA</option>
                <option value="kr">KR</option>
                <option value="jp1">JP</option>
            </select>
            <input type="submit" value="送信">
        </form>
        <div>
@endsection
