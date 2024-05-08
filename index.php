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

        <div class="list-container">
            <ul class="list">
                <li class="item"><img class="carous-image-lt" src="./images/studio2.jpeg" alt="image/jpeg"></li>
                <li class="item"><img class="carous-image" src="./images/studio4.jpeg" alt="image/jpeg"></li>
                <li class="item"><img class="carous-image-rt" src="./images/studio8.jpeg" alt="image/jpeg"></li>
            </ul>
            <button onclick="handleClick('previous')" class="button button--previous" type="button">☚</button>
            <button onclick="handleClick('next')" class="button button--next" type="button">☛</button>
        </div>

        <script>
            const list = document.querySelector(".list");

            // We want to know the width of one of the items. We'll use this to decide how many pixels we want our carousel to scroll.
            const item = document.querySelector(".item");
            const itemHeight = item.offsetHeight;

            function handleClick(direction) {
                // Based on the direction we call `scrollBy` with the item width we got earlier
                if(direction === "previous") {
                list.scrollBy({ left: -itemHeight / 2, behavior: "smooth" });
                } else {
                list.scrollBy({ left: itemHeight / 2, behavior: "smooth" });
                }
            }
        </script>

<?php include 'footer.html'?>