<style>
    .aboutus {
        background: #212429;
    }
    img[alt="about-me-img"] {
        width: 370px;
        height: 370px;
        filter: drop-shadow(1px 1px 20px #0a95b8);
    }
    .fade-left {
        position: relative;
        display: inline-block;
        justify-items: end;
    }
    .fade-left img {
        display: block;
        width: 100%;
        height: 300px;
        filter: brightness(45%);
    }

    .fade-left::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 50%;
        background: linear-gradient(to left, rgba(33, 36, 41, 0) 0%, rgba(33, 36, 41, 1) 100%);
        pointer-events: none;
    }
    .overlay-text {
        position: absolute;
        transform: translateY(10px);
        z-index: 1;
    }
</style>

<div class="aboutus">

    <div id="aboutus" style="height:80px"></div>
    <div class="d-flex justify-content-center" style="height: 40px">
        <div class="barrier"></div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row reveal">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="images/aboutme.png" alt="about-me-img" class="img-fluid">
                </div>

                <div class="col-12 col-md-6">

                    <div class="container title-about-me">
                        <h1 class="text-light fw-bold">About Me</h1>
                        <p class="text-light">
                            Hi, I'm Dinno Guerba, a Bachelor of Science in Information Technology student.I'm 20 years old and currently living in New Corella, Davao del Norte. I am pursuing my studies at Davao del Norte State College, where I am enrolled in the Bachelor of Science in Information Technology program.
                        </p>
                        <p class="text-light">
                            With a strong interest in technology and programming, I am dedicated to expanding my knowledge and skills in various areas of IT. My coursework has provided me with a solid foundation in programming, web development, and network management.
                        </p>
                        <p class="text-light">
                            My journey into the world of technology began in high school when I was first introduced to the basics of computer science. This initial exposure sparked a deep passion for IT, leading me to choose this field for my higher education.
                        </p>
                        <p class="text-light">
                            When I'm not immersed in my studies, I enjoy exploring the latest tech trends, engaging in outdoor activities, and spending time with family and friends.
                        </p>
                    </div>
                    <div style="height: 50px"></div>
                </div>
            </div>


            <div class="reveal">
                <h1 class="text-light fw-bold">Educational Background</h1>
                <div class="overlay-text">
                    <li class="text-light fw-bold">New Corella Central Elementary School
                        <ul>
                            2009 - 2015
                        </ul>
                    </li>
                    <li class="text-light fw-bold">New Corella National High School
                        <ul>
                            2015 - 2022
                        </ul>
                    </li>
                    <li class="text-light fw-bold">Davao del Norte State College
                        <ul>
                            Bachelor of Science in Information Technology <br>
                            2022
                        </ul>
                    </li>
                </div>
                <div class=" d-flex justify-content-end">
                    <div class="fade-left">
                        <img class="image-fluid" src="images/dnsc-school.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div style="height: 100px"></div>
        </div>


    </div>
</div>