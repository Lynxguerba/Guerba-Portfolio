<style>
    img[alt="icon"]{
                width: 23px;
                height: 23px;
            }
            .project-box{
                backdrop-filter: blur(20px) ;
                border: 1px solid white;
                border-radius: 10px;
            }
            .btn-github{
                text-align: center;
                color: white;
                text-decoration: none;
                border: 1px solid white;
                width: 80%;
                transition: .5s;
            }
            .btn-github:hover{
                background: white;
                color: black;
                border: 1px solid black;
            }
            .projects-content{
                padding: 20px;
                height: 80vh;
                overflow-y: auto;
                overflow-x: hidden;
            }
            @media only screen and (min-width:768px){
                .projects-content{
                    height: 88%;
                }
            }
            .project-details{
                width: 100%;
                height: 150px;
            }
            .pads{
                padding: 20px;
                border-radius: 10px;
                border: 2px solid white;
                transition: 0.5s;
            }
            .pads:hover{
                background: #3a5f68;
                box-shadow: 2px 2px 10px #00ccff;
            }
            .image-container {
                height: 120px;
                overflow: hidden;
                position: relative;
                display: block; /* Ensures the anchor tag behaves like a block element */
                border-radius: 15px;
            }
            .image-container img {
                width: 100%; /* Ensures the image scales with the container width */
                height: auto; /* Maintains the aspect ratio of the image */
                position: absolute; /* Positions the image within the container */
                top: 50%; /* Moves the image 50% down */
                left: 50%; /* Moves the image 50% to the right */
                transform: translate(-50%, -50%); /* Centers the image within the container */
            }
            
            .projects-content::-webkit-scrollbar {
    display: none;
}
.projects-content {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
            
</style>
<div class="projects" >
        <div id="projects" style="height:80px"></div>
        <div  class="d-flex justify-content-center" style="height: 40px">
            <div class="barrier"></div>
        </div>

        <div class="container-fluid">
           <div class="container reveal" >
                
                <h1 class="text-light fw-bold">Projects</h1>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="project-box d-grid justify-content-center">
                            <img src="icons/github.png" alt="" style="width: 100%; height: 100%">
                            <div class="project-content" style="padding: 25px; border-top: 1px solid white">
                                 <h4 class="text-light fw-bold">Take a Look!</h4>
                                 <p class="text-light">
                                    I create my projects using my phone, and when I have access to a laptop, I implement them there. My projects are available on my GitHub account, and some are hosted on free websites. If you want to visit my GitHub profile, feel free to check it out!
                                </p>
                                <div class="d-flex align-content-center justify-content-center">
                                    <a  class="btn-github" href="https://github.com/Lynxguerba" target="_blank">
                                        Visit me here!
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        
                        <hr>
                        <hr>
                    </div>
    
                    <div class="col-12 col-md-8">
                        <h3 class="text-light fw-bold">Here are some of my Works!</h3>
                        <div class="projects-content">
                            <div class="project-details">
                                <div class="pads">
                                    <h4 class="text-light fw-bold">Nyan Chat</h4>
                                    <p class="text-light">A web application that allows users to send and receive messages!</p>
                                    <a href="nyanchat.great-site.net/" class="image-container" target="_blank">
                                        <img src="images/nyan.png" alt="">
                                    </a> 
                                </div> <hr>
                                <div class="pads">
                                    <h4 class="text-light fw-bold">Daily Time Record System</h4>
                                    <p class="text-light">A tool used by organizations to track the working hours of employees.</p>
                                    <a href="https://github.com/Lynxguerba/DTR-System.git" class="image-container" target="_blank">
                                        <img src="images/dtr.jpg" alt="">
                                    </a> 
                                </div> <hr>
                                <div class="pads">
                                    <h4 class="text-light fw-bold">Cloning Website</h4>
                                    <p class="text-light">This website is a project from our first year. We cloned a TESDA website, marking our first experience in building a website.</p>
                                    <a href="https://lynxguerba.github.io/Tesda-Final_Project/" class="image-container" target="_blank">
                                        <img src="images/tesda.jpg" alt="">
                                    </a> 
                                </div> <hr>
                                <div class="pads">
                                    <h4 class="text-light fw-bold">CRUD System</h4>
                                    <p class="text-light">This project marks our first implementation of a CRUD system. We utilized PHP for backend development and SQL for database management. It's part of our second-year coursework.</p>
                                    <a href="https://github.com/Lynxguerba/CRUD.git" class="image-container" target="_blank">
                                        <img src="images/crud.jpg" alt="">
                                    </a> 
                                </div> <hr>
                                <div class="pads">
                                    <h4 class="text-light fw-bold">Calculator</h4>
                                    <p class="text-light">A calculator web application. First time a build this kind of app.</p>
                                    <a href="https://lynxguerba.github.io/CalulatorByDinno/" class="image-container" target="_blank">
                                        <img src="images/calculator.jpg" alt="">
                                    </a> 
                                </div> <hr>
                                <div class="pads">
                                    <h4 class="text-light fw-bold">Portfolio</h4>
                                    <p class="text-light">An Assessment Portfolio, the first portfolio that build!</p>
                                    <a href="https://lynxguerba.github.io/Assessment/" class="image-container" target="_blank">
                                        <img src="images/portfolio.jpg" alt="">
                                    </a> 
                                </div> <hr>
                                <div class="pads">
                                    <h4 class="text-light fw-bold">Inventory System</h4>
                                    <p class="text-light">A Stock management where it allows to track the inventories of a shop. We named the shop Printing Clothes where it manage the types of design and size of clothes.</p>
                                    <a href="https://github.com/Lynxguerba/Inventory.git" class="image-container" target="_blank">
                                        <img src="images/print.jpg" alt="">
                                    </a> 
                                </div> <hr>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>