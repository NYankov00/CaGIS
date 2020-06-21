@extends('layout')

@section ('content')
<div class="map">

</div>

<div class="categories">

    <article class="container">
        <img src="{{ URL::to('/images/about.jpg') }}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text">За нас</div>
        </div>
    </article>

    <article class="container">
        <img src="{{ URL::to('/images/services.jpg') }}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text">Услуги</div>
        </div>
    </article>

    <article class="container">
        <img src="{{ URL::to('/images/projects.jpg') }}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text">Проекти</div>
        </div>
    </article>

    <article class="container">
        <img src="{{ URL::to('/images/contacts.jpg') }}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text">Контакти</div>
        </div>
    </article>



</div>

@endsection