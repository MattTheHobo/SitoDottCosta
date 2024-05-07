<?php include 'navbar.html'?>
        <!--HomePage-->

        <div class="home-page-container">
            <ul>
                <li>
                    <h1 class="home-page1">Dottor Diego Costa</h1>
                </li>
                <li>
                    <h1 class="home-page2">Psicologo</h1>
                </li>
            </ul>
        </div>

        <hr class="rounded">

        <!--Image Carousel-->

        <h1 class="mio-studio" >Il Mio Studio</h1>

        <div class="display-container">
            <img class="slides" src="./images/studio2.jpeg" style="width:100%">
            <img class="slides" src="./images/studio4.jpeg" style="width:100%">
            <img class="slides" src="./images/studio8.jpeg" style="width:100%">
        
            <button class="button display-left fa-solid fa-angle-left" onclick="plusDivs(-1)"></button>
            <button class="button display-right fa-solid fa-angle-right" onclick="plusDivs(1)"></button>
        </div>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n) {
                showDivs(slideIndex += n);
            }
            
            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("slides");

                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                x[slideIndex-1].style.display = "block";  
            }
        </script>

<?php include 'footer.html'?>