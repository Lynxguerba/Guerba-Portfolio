<style>
    .homepage {
        background: rgba(0,0,0,0.9);
        height: 100vh;
    }
    img[alt="profile"] {
        width: 500px;
        filter: drop-shadow(1px 1px 20px #0a95b8);
    }
    img[alt="img-about-me"] {
        width: 300px;
        height: 250px;
    }
    @media only screen and (min-width: 768px) {
        img[alt="img-about-me"] {
            width: 500px;
            height: 450px;
        }
    }
    .explore-btn {
        width: 70%;
        height: 30px;
        background: rgba(0,0,0,0);
        outline: none;
        color: white;
        border: 1px solid white;
        transition: 0.5s;
        text-decoration: none;
    }
    .explore-btn:hover {
        background: white;
        color: black;
    }
    img[alt="homeIcon"] {
        width: 45px;
        height: 45px;
    }
    #output {
        color: #22cbf6;
        text-shadow: 1px 1px 20px #0a95b8;
    }
</style>

<div class="homepage d-flex align-items-center" id="home">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-grid align-items-center order-last order-md-first" style="z-index: 2">
                    <div class="container">

                        <h3 class="text-light fw-bold" style="z-index: 2; line-height: 0.5">Hello! I'am
                            <span class="fw-bold h1" id="output" style="line-height: 1"></span>
                        </h3>

                        <p class="text-light" style="z-index:2">
                            "I am passionate web developer and designer.
                            With experience in creating dynamic, user-friendly websites,
                            I turn ideas into beautiful digital experiences.
                            Scroll down to explore my latest projects and learn more about my work."
                        </p>

                        <div class="d-flex">
                            <a href="https://www.facebook.com/dinno.guerba.5">
                                <img src="icons/facebook.png" alt="homeIcon">
                            </a>
                            <span style="width: 10px"></span>
                            <a href="https://github.com/Lynxguerba">
                                <img src="icons/github.png" alt="homeIcon">
                            </a>
                        </div>
                        <div style="height: 25px"></div>
                        <div class="d-flex justify-content-center">
                            <a href="#aboutus" class="explore-btn text-center"> Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 d-flex justify-content-center order-first order-md-last">
                    <div class="d-flex justify-content-center">
                        <img src="profile_pic.png" alt="profile" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const target = "Dinno Guerba";
    const delay = 20; // Time delay between each letter transition in milliseconds

    function animateWord(word) {
        let currentOutput = '';

        function animateNextLetter(index) {
            if (index >= word.length) return;

            const targetLetter = word[index];
            let alphabet = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ';
            let i = 0;

            const interval = setInterval(() => {
                document.getElementById('output').innerText = currentOutput + alphabet[i];
                if (alphabet[i] === targetLetter) {
                    clearInterval(interval);
                    currentOutput += targetLetter;
                    animateNextLetter(index + 1);
                }
                i++;
            },
                delay);
        }

        animateNextLetter(0);
    }

    animateWord(target);
</script>