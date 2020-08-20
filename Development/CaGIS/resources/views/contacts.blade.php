@extends('layout')
<section class="top-image">
    @section ('content')
    <h2>Контакти</h2>
</section>

<div class="all-contacts">
    <article class="all-adress">
        <i class="fas fa-map-marker-alt"></i>
        <h2>Адрес</h2>
        <p>бул. „Христо Смирненски“ 1, 1164 ж.к. Лозенец, София, България</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.041483184517!2d23.328964528838455!3d42.68496846915514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa85a756db454f%3A0x1d462a7ef3c8e9f8!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQv9C-INCw0YDRhdC40YLQtdC60YLRg9GA0LAsINGB0YLRgNC-0LjRgtC10LvRgdGC0LLQviDQuCDQs9C10L7QtNC10LfQuNGP!5e0!3m2!1sbg!2snl!4v1593515373174!5m2!1sbg!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </article>
    <article class="phone-email">
        <i class="fas fa-phone"></i>
        <h2>Телефон и имейл</h2>
        <p>Тел:</p>
        <p>Имейл:</p>
    </article>
    <article class="email-sender">
        <i class="fas fa-question"></i>
        <h2>Имате върпос?</h2>

    </article>
</div>

@endsection