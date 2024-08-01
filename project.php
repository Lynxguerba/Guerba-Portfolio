<script src="../assets/js/color-modes.js"></script>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


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
        background: #212429;
        padding: 2px;
        border-radius: 5px;
        display: grid;
        justify-content: center;
        overflow: hidden;
        height: 400px;
        width: 430px;
        transition: 0.2s;
        border-radius: 10px;
    }
    .proj_detials:hover {
        box-shadow: 0 0 2px  #dddddd;
    }
    .proj_detials img {
        width: 600px;
        height: 230px;
        border: 1px solid white;
        
    }

    .main_projects {
        background: #2b3034;
        
    }
   .proj_content{
       padding-left: 20px;
       padding-left: 20px;
       padding-bottom: 10px;
       width: 100%;
   }
   *{
       
       
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

       


    </div>

</div>
</div>

<div class="container-fluid main_projects">
    <div class="container">
       
        <hr style="border: none; height: 20px">
        <div class="row justify-content-center reveal mt-5">
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/nyan.png" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">Nyan Chat</p>
                    <p class="text-light">A Web App allows user to interact on other users. Just like messenger application platform.</p>
                    <a href="http://nyanchat.great-site.net/src/frontend/login.php"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/dtr.jpg" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">Daily Time Record</p>
                    <p class="text-light">A web tool, is the process of monitoring and organizing time information.</p>
                    <a href="http://dtr.kesug.com/?i=2"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/tesda.jpg" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">Cloning Website</p>
                    <p class="text-light">1st Year Project, cloning website improving basic Html, Css and Javascript skills.</p>
                    <a href="https://lynxguerba.github.io/Tesda-Final_Project/"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/crud1.jpg" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">CRUD Operation</p>
                    <p class="text-light">An Assignment Activity, where system  refers to a set of basic function for managing data in a database.</p>
                    <a href="http://oop-crud.kesug.com/?i=1"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/calculator.jpg" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">Calculator</p>
                    <p class="text-light">It is for fun project, it helps me to understanding the basic concept of programming and arithmetic operation.</p>
                    <a href="https://lynxguerba.github.io/CalulatorByDinno/"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/portfolio.jpg" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">Basic Portfolio</p>
                    <p class="text-light">1st year Activity Assessment, where we allow to build a simple Portfolio.</p>
                    <a href="https://lynxguerba.github.io/Assessment/"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/print.jpg" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">Inventory System</p>
                    <p class="text-light">A tool used to track and manage goods and materials within a business.</p>
                    <a href="https://github.com/Lynxguerba/Inventory.git"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/css_background.jpg" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">CSS Linear Gradient Background Generator</p>
                    <p class="text-light">A tool that allows users to create linear gradient backgrounds without to write CSS code manually.</p>
                    <a href="http://guerba-css-background.kesug.com/?i=2"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-1 mt-2 proj_detials">
                <img src="images/fashion.jpg" alt="proj_img" class="img-fluid" title="NyanChat">
                <div class="proj_content d-grid">
                    <p class="text-light h5 fw-bold" style="line-height: .5">Google Site Project</p>
                    <p class="text-light">1st year Project where we experience hands-on web design and development, to enhancing technical skills.</p>
                    <a href="https://sites.google.com/dnsc.edu.ph/group4site/home"  target="_blank">
                        <button type="button" class="btn btn-outline-secondary">View</button>
                    </a>
                </div>
            </div>
            
        </div>
        
        <hr style="border: none; height: 40px">
    
    </div>
</div>
