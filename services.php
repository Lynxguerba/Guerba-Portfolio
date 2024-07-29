<style>
    .services__bottom{
        background: #212429;
        height: 350px;
    }
    .services__content{
        transform: translateY(250px);
        height:450px;
        overflow: auto;
    }
    .head__text{
        transform: translateY(220px);
    }
   .services__content::-webkit-scrollbar {
    display: none;
}
.services__content {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
    .card {
 width: 300px;
 height: 345px;
 padding: .8em;
 margin-top: 20px;
 background: #dddddd;
 position: relative;
 overflow: visible;
 box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.card-img {
 height: 40%;
 width: 100%;
 border-radius: .5rem;
 transition: .3s ease;
}

.card-info {
 padding-top: 10%;
}



/*Hover*/
.card-img:hover {
 transform: translateY(-25%);
 box-shadow: #0a95b8 0px 13px 47px -5px, #0a95b8 0px 8px 16px -8px;
}
img[alt="service_img"]{
    width:100%;
    height:100%;
}
</style>

<div class="services" >
    
    <div  class="d-flex justify-content-center" style="height: 40px">
        
        
    </div>
     
    <div class="container-fluid">
        <div class="container reveal">
            <h1 class="text-light fw-bold head__text">Services</h1>
            <div class="services__content d-flex">
                <div style="width: 12%"></div>
                <div class="mx-5">
                    
                    <div class="card">
                      <div class="card-img">
                          <img src="images/ui_ux.jpeg" alt="service_img">
                      </div>
                      <div class="card-info">
                        <h3 class="fw-bold">UI/UX Design </h3>
                        <p class="text-body">Creating low and high-fidelity wireframes and interactive prototypes to visualize the user interface and user experience.</p>
                      </div>
                          
                    </div>
                    
                </div>
                <div class="mx-5">
                    
                    <div class="card">
                      <div class="card-img">
                          <img src="images/web_develop.jpeg" alt="service_img">
                      </div>
                      <div class="card-info">
                        <h3 class="fw-bold">Web Development</h3>
                        <p class="text-body">Building responsive and interactive websites using HTML, CSS, JavaScript, and frameworks like React or Angular.</p>
                      </div>
                          
                    </div>
                    
                </div>
                <div class="mx-5">
                    
                    <div class="card">
                      <div class="card-img">
                          <img src="images/software_develop.jpeg" alt="service_img">
                      </div>
                      <div class="card-info">
                        <h3 class="fw-bold">Software Development</h3>
                        <p class="text-body">Designing and developing tailored software applications to meet specific business needs.</p>
                      </div>
                          
                    </div>
                    
                </div>
                <div style="width: 12%"></div>
            </div>
            
        </div>
    </div>
    
    <div class="container-fluid services__bottom">
        
    </div>
</div>
    