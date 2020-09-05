
@extends('layout')
@section('title', 'topページ')
 
@section('content')
<div id="top">
    <header>
        <div class="container clear">
            <div class="header-left">
                <h1 class="header-title"><a href="/top">lawcommunity</a></h1>
            </div>
            <div class="header-right">
                <ul class="header-nav">
                    <li class="header-nav-item"><a href="/top">lawcommunityとは</a></li>
                    <li class="header-nav-item"><a href="">一覧</a></li>
                    <li class="header-nav-item"><a href="">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="top">
        <div class="top-image">
            <img src="image/law-top.jpg" alt="サンプル画像">
        </div>

    </section>
    <section class="information">
        <p>法学部OBOG、法律を学びたい人、法律に興味のある人のコミュニティです。</p>

    </section>
</div>
@endsection