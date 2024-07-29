<style>
    img[alt="icons__skills"] {
        width: 40px;
        height: 40px;
    }
    .skills__icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    .__icon {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 60px;
        height: 60px;
        padding: 20px;
        border: 2px solid white;
        border-radius: 5px;
        backdrop-filter: blur(8px);
        transition: .2s;
    }
    .__icon:hover {
        background: #3f8b9e;
        box-shadow: 0 0 10px #14b4dc, 0 0 20px #14b4dc, 0 0 60px #14b4dc;
    }
    @media only screen and (min-width:768px) {
        .__icon {
            width: 100px;
            height: 100px;
        }
    }
    img[alt="ui_ux_icon"] {
        width: 70px;
        height: 70px;
    }
    .ui {
        width: auto;
    }
    .bar {
        width: 100%;
        height: 20px;
        border: 1px solid white;
        overflow: hidden;
        position: relative;
    }
    .progresss {
        width: 0;
        height: 19px;
        background: #14b4dc;
        box-shadow: 0 0 5px #14b4dc, 0 0 10px #14b4dc, 0 0 60px #14b4dc;
        transition: all 2s ease-in-out;
    }
</style>
<div class="skills">
    <div id="skills" style="height:80px"></div>
    <div class="d-flex justify-content-center" style="height: 40px">
        <div class="barrier"></div>
    </div>
    <div class="container-fluid">
        <div class="container reveal">
            <h1 class="text-light fw-bold">Skills</h1>
            <p class="text-light">
                My skills are not yet completely mastered, especially in programming. But I am really striving to master it through deep study and exploring systems, and debugging errors.
            </p>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="ui container d-grid">
                        <img src="icons/ui.png" alt="ui_ux_icon"> <br>
                        <h4 class="text-light" data-percentage="40">0%</h4>
                        <div class="bar">
                            <div class="progresss" data-percentage="40%"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="ux container d-grid">
                        <img src="icons/ux.png" alt="ui_ux_icon"> <br>
                        <h4 class="text-light" data-percentage="20">0%</h4>
                        <div class="bar">
                            <div class="progresss" data-percentage="20%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 d-flex flex-wrap justify-content-center align-items-center">
                    <div style="width: 100%;height: 30px"></div>
                    <div class="__icon mx-2 my-2">
                        <img src="icons/html.png" alt="icons__skills">
                    </div>
                    <div class="__icon mx-2 my-2">
                        <img src="icons/css.png" alt="icons__skills">
                    </div>
                    <div class="__icon mx-2 my-2">
                        <img src="icons/javascript.png" alt="icons__skills">
                    </div>
                    <div class="__icon mx-2 my-2">
                        <img src="icons/java.png" alt="icons__skills">
                    </div>
                    <div class="__icon mx-2 my-2">
                        <img src="icons/php1.png" alt="icons__skills">
                    </div>
                    <div class="__icon mx-2 my-2">
                        <img src="icons/mysql.png" alt="icons__skills">
                    </div>
                    <div class="__icon mx-2 my-2">
                        <img src="icons/laravel.png" alt="icons__skills">
                    </div>
                    <div class="__icon mx-2 my-2">
                        <img src="icons/bootstrap.png" alt="icons__skills">
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 120px"></div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const progressBars = document.querySelectorAll('.progresss');
        const percentageTexts = document.querySelectorAll('h4[data-percentage]');

        function handleIntersection(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target.querySelector('.progresss');
                    const text = entry.target.querySelector('h4[data-percentage]');
                    const percentage = bar.getAttribute('data-percentage');

                    if (bar && percentage) {
                        bar.style.width = percentage;
                    }

                    if (text) {
                        animateText(text);
                    }

                    observer.unobserve(entry.target); // Stop observing after animation starts
                }
            });
        }

        function animateText(element) {
            const finalValue = parseInt(element.getAttribute('data-percentage'),
                10);
            let currentValue = 0;
            const duration = 500; // Animation duration in milliseconds
            const increment = finalValue / (duration / 20); // Increase value every 20ms

            function updateText() {
                currentValue += increment;
                if (currentValue >= finalValue) {
                    element.textContent = `${finalValue}%`;
                } else {
                    element.textContent = `${Math.floor(currentValue)}%`;
                    requestAnimationFrame(updateText);
                }
            }
            updateText();
        }

        const observer = new IntersectionObserver(handleIntersection, {
            threshold: 0.1 // Adjust this value as needed
        });

        progressBars.forEach(bar => {
            observer.observe(bar.parentElement); // Observe the parent element of the progress bar
        });

        percentageTexts.forEach(text => {
            observer.observe(text.parentElement); // Observe the parent element of the text
        });
    });
</script>