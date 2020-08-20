@extends('layout')
<section class="top-image">
    @section ('content')
    <h2>ГИС</h2>
</section>

<div class="all-available-services">

    <article class="service" id="myBtn">
        <h2>Заглавие</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum exercitationem ea velit quidem libero accusantium ex, ....</p>
    </article>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Заглавие</h2>
            </div>
            <div class="modal-body">
                <h3>Подзаглавие</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, delectus libero similique fuga qui dolor eos nam autem laudantium et facere quis quo earum eaque, aspernatur natus. Expedita, non deleniti.</p>
            </div>
            <div class="modal-body">
                <h3>Подзаглавие</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero atque modi eaque nihil amet inventore nemo perspiciatis, voluptatem commodi! Similique eaque doloribus amet eveniet in sapiente tempore, provident non magnam.</p>
            </div>
            <div class="modal-footer">
                <h3>Цена:12345лв</h2>
            </div>
            
            
        </div>

    </div>

    <article class="service">
        <h2>Заглавие</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum exercitationem ea velit quidem libero accusantium ex, ....</p>
    </article>

    <article class="service">
        <h2>Заглавие</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum exercitationem ea velit quidem libero accusantium ex, ....</p>
    </article>

    <article class="service">
        <h2>Заглавие</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum exercitationem ea velit quidem libero accusantium ex, ....</p>
    </article>

    <article class="service">
        <h2>Заглавие</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum exercitationem ea velit quidem libero accusantium ex, ....</p>
    </article>

    <article class="service">
        <h2>Заглавие</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum exercitationem ea velit quidem libero accusantium ex, ....</p>
    </article>

    <article class="service">
        <h2>Заглавие</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum exercitationem ea velit quidem libero accusantium ex, ....</p>
    </article>


    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</div>


@endsection