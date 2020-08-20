@extends('layout')
<section>
    @section ('content')

    <div class="sub-tabs">
        <div class="articles">
            
            <article class="container-tab" id="container-1">
                <h2>Геодезия, кадастър и устройство на територията</h2>
                <img src="{{ URL::to('/images/1.jpg') }}" alt="Avatar" class="image">
            </article>

            <article class="container-tab" id="container-2">
                <h2>ГИС</h2>
                <img src="{{ URL::to('/images/2.jpg') }}" alt="Avatar" class="image">
            </article>

            <article class="container-tab" id="container-3">
                <h2>Проекти</h2>
                <img src="{{ URL::to('/images/3.png') }}" alt="Avatar" class="image">
            </article>

            <article class="container-tab" id="container-4">
                <h2>Запитване</h2>
                <img src="{{ URL::to('/images/5.png') }}" alt="Avatar" class="image">
            </article>
        </div>
        <div class="about-box">
            <h3>За нас</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, quas laborum maiores magni, laboriosam assumenda voluptas sequi alias placeat voluptatum obcaecati necessitatibus ipsam accusantium, explicabo nulla quod. Dolorem, ex? Numquam.</p>
        </div>
    </div>


    <div class="wave">
    </div>
</section>
</div>
<!-- <div class="categories">

    <article class="container-tab">
        <img src="{{ URL::to('/images/1.jpg') }}" alt="Avatar" class="image">
        <h2>Геодезия, кадастър и устройство на територията</h2>
    </article>

    <article class="container-tab">
        <img src="{{ URL::to('/images/2.jpg') }}" alt="Avatar" class="image">
        <h2>ГИС</h2>
    </article>

    <article class="container-tab">
        <img src="{{ URL::to('/images/3.png') }}" alt="Avatar" class="image">
        <h2>Проекти</h2>
    </article>
</div> -->

<div class="detailed-info">
    <table class="content-table">
        <thead>
            <tr>
                <th>Въпрос</th>
                <th>Кратък отговор</th>
                <th>Линк/download (pdf)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lorem ipsum dolor sit amet consectetur?</td>
                <td>Adipisicing elit. Culpa similique expedita vel officiis aperia</td>
                <td class="link"><a href="#"><i class="fas fa-external-link-square-alt"></i></td>
            </tr>
            <tr class="even">
                <td>Lorem ipsum dolor sit amet consectetur?</td>
                <td>Adipisicing elit. Culpa similique expedita vel officiis aperia</td>
                <td class="link"><a href="#"><i class="fas fa-external-link-square-alt"></i></td>
            </tr>
            <tr>
                <td>Lorem ipsum dolor sit amet consectetur?</td>
                <td>Adipisicing elit. Culpa similique expedita vel officiis aperia</td>
                <td class="link"><a href="#"><i class="fas fa-external-link-square-alt"></i></td>
            </tr>
        </tbody>
    </table>
</div>



<!-- <button class="open-button" onclick="openForm()">
    <i class="far fa-question-circle"></i>
    <h3>Помощ</h3>
</button>

<div class="form-popup" id="myForm">
    <div class="top">
        <h3>Помощ</h3>
        <button type="submit" class="btn cancel" onclick="closeForm()">-</button>
    </div>
    <form action="/action_page.php" class="form-container">
        <h1>Въпросче ли имате?</h1>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Въпросчето</b></label>
        <input type="password" placeholder="Въпросчето" name="psw" required>

        <button type="submit" class="btn">Изпрати</button>
    </form>
</div> -->

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
@endsection