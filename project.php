<style>


    .proj {
        padding: 40px;
    }
    .Di-background {
        width: 100%;
        box-shadow: 1px 1px 100px #141824;
        border-radius: 20px;
    }
    .btn_github {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .btn_github a {
        padding: 10px;
        border: 1px solid white;
        text-decoration: none;
        color: white;
        margin-top: 10px;
        border-radius: 10px;
        transition: 0.5s;
    }
    .btn_github a:hover {
        background: #0a95b8;
        filter: drop-shadow(1px 1px 20px #0a95b8);
        border: 1px solid #0a95b8;
        color: black;
    }
    .container_projects {
        background: transparent;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 10px;
    }
    .proj_detials {
        padding: 5px;
        background: #212429;
        outline: 2px solid #dddddd;
        border-radius: 5px;
        display: grid;
        justify-content: center;
        overflow: hidden;
        height: 200px;
        width: 400px;
        transition: 0.2s;
    }
    .proj_detials:hover {
        box-shadow: 2px 2px 20px #0a95b8;
    }
    .proj_detials img {
        height: 190px;
    }
</style>
<div class="projects">
    <div id="projects" style="height:80px"></div>
    <div class="d-flex justify-content-center" style="height: 40px">
        <div class="barrier"></div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <h1 class="text-light fw-bold reveal">Projects</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 mt-2 proj reveal">
                    <video autoplay loop muted plays-inline class="Di-background">
                        <source src="codee.mp4" type="video/mp4" />
                </video>
            </div>

            <div class="col-12 col-md-6 mt-2 d-grid align-content-center justify-content-center proj reveal">
                <h2 class="text-light fw-bold text-center">
                    <img src="icons/github.png" alt="" style="width: 45px; height: 45px; transform: translateY(-4px)">
                    Take a Look!
                </h2>
                <h4 class="text-light text-center">
                    I create my projects using my phone, and when I have access to a laptop, I implement them there. My projects are available on my GitHub account, and some are hosted on free websites. If you want to visit my GitHub profile, feel free to check it out!
                </h4>
                <div class="btn_github">
                    <a href="https://github.com/Lynxguerba" target="_blank">
                        Visit me here!
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row container_projects justify-content-center reveal">
            <h3 class="text-light mt-5 fw-bold text-center">Here are some of my Works!</h3>
            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="http://nyanchat.great-site.net/src/frontend/login.php" class="image-container" target="_blank">
                    <img src="images/nyan.png" alt="proj_img" class="img-fluid" title="NyanChat">
                </a>
            </div>
            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="http://dtr.kesug.com/?i=2" class="image-container" target="_blank">
                    <img src="images/dtr.jpg" alt="" class="img-fluid" title="Daily Time Record System">
                </a>
            </div>
            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="https://lynxguerba.github.io/Tesda-Final_Project/" class="image-container" target="_blank">
                    <img src="images/tesda.jpg" alt="" class="img-fluid" title="Cloning Website | TESDA">
                </a>
            </div>

            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="http://oop-crud.kesug.com/?i=1" class="image-container" target="_blank">
                    <img src="images/crud1.jpg" alt="" class="img-fluid" title="CRUD Operation">
                </a>
            </div>
            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="https://lynxguerba.github.io/CalulatorByDinno/" class="image-container" target="_blank">
                    <img src="images/calculator.jpg" alt="" class="img-fluid" title="Calculator">
                </a>
            </div>
            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="https://lynxguerba.github.io/Assessment/" class="image-container" target="_blank">
                    <img src="images/portfolio.jpg" alt="" class="img-fluid" title="Portfolio Assessment">
                </a>
            </div>
            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="https://github.com/Lynxguerba/Inventory.git" class="image-container" target="_blank">
                    <img src="images/print.jpg" alt="" class="img-fluid" title="Inventory System">
                </a>
            </div>
            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="http://guerba-css-background.kesug.com/?i=2" class="image-container" target="_blank">
                    <img src="images/css_background.jpg" alt="" class="img-fluid" title="CSS Linear Gradient Background Generator">
                </a>
            </div>
            <div class="col-12 col-md-4 mx-3 mt-4 proj_detials">
                <a href="https://sites.google.com/dnsc.edu.ph/group4site/home" class="image-container" target="_blank">
                    <img src="images/fashion.jpg" alt="" class="img-fluid" title="Google Site | Fashion Group 4">
                </a>
            </div>


            <hr style="border: none; height: 20px">
        </div>



    </div>

</div>
</div>