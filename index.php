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
            <!-- Indicator Dots -->
            <div class="indicators"></div>
            <ul class="list">
                <li class="item"><img class="carous-image" src="./images/studio2Resiz.jpeg" alt="image/jpeg"></li>
                <li class="item"><img class="carous-image" src="./images/studio4Resiz.jpeg" alt="image/jpeg"></li>
                <!-- <li class="item"><img class="carous-image" src="./images/studio8Resiz.jpeg" alt="image/jpeg"></li> -->
                <li class="item"><img class="carous-image" src="./images/studio12Resiz.jpeg" alt="image/jpeg"></li>
                <li class="item"><img class="carous-image" src="./images/studio13Resiz.jpeg" alt="image/jpeg"></li>
                <li class="item"><img class="carous-image" src="./images/studio14Resiz.jpeg" alt="image/jpeg"></li>
            </ul>
            <button onclick="handleClick('previous')" class="button button--previous" type="button"><i class="fa-solid fa-hand-point-left"></i></button>
            <button onclick="handleClick('next')" class="button button--next" type="button"><i class="fa-solid fa-hand-point-right"></i></button>
        </div>

        <script>
            const list = document.querySelector(".list");
            const items = document.querySelectorAll(".item");

            // We want to know the width of one of the items. 
            // We'll use this to decide how many pixels we want our carousel to scroll.
            const item = document.querySelector(".item");
            const itemHeight = item.offsetHeight;

            // Initialize the current index
            let currentIndex = 0;
            
            // Create indicators
            const indicatorsContainer = document.querySelector(".indicators");
            items.forEach((_, index) => {
                const indicator = document.createElement("span");
                indicator.classList.add("indicator");
                if (index === 0) {
                    // Mark the first as active initially
                    indicator.classList.add("active"); 
                }
                indicatorsContainer.appendChild(indicator);
            });

            // Set the current index based on scroll position after loading
            function setCurrentIndexFromScroll() {
                const scrollTop = list.scrollTop;
                currentIndex = Math.round(scrollTop / itemHeight);
                updateIndicators();
            }

            // Update indicators based on the current index
            function updateIndicators() {
                const indicators = document.querySelectorAll(".indicator");
                indicators.forEach((indicator, index) => {
                    if (index === currentIndex) {
                        indicator.classList.add("active");
                    } else {
                        indicator.classList.remove("active");
                    }
                });
            }

            function handleClick(direction) {
                // Based on the direction we call `scrollBy` with the item width we got earlier
                if(direction === "previous" && currentIndex > 0) {
                    currentIndex -= 1;
                    list.scrollBy({ left: -itemHeight / 2, behavior: "smooth" });
                } else if (direction === "previous" && currentIndex == 0) {
                    currentIndex = items.length - 1;
                    list.scrollBy({ left: (itemHeight) * (items.length), behavior: "smooth" });
                } else if(direction === "next" && currentIndex < items.length - 1) {
                    currentIndex += 1;
                    list.scrollBy({ left: itemHeight / 2, behavior: "smooth" });
                } else if(direction === "next" && currentIndex == items.length - 1) {
                    currentIndex = 0;
                    list.scrollBy({ left: (-itemHeight) * (items.length), behavior: "smooth" });
                }
                updateIndicators();
            }

            // Set initial current index based on scroll position after a delay to allow layout to load
            window.addEventListener("load", () => {
                setTimeout(setCurrentIndexFromScroll, 200); // Adjust timeout if necessary
            });
        </script>

<?php include 'footer.html'?>