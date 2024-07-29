<style>
.logo-container {
    display: flex;
    justify-content: center;
    align-items: center; /* Center the image vertically */
    background: white;
    width: 49px;
    height: 48px;
    border-radius: 50%;
    overflow: hidden; /* Ensure the image doesn't overflow the container */
}
img[alt="dnsclogo"] {
      width: 50px;
      height: 50px;
      object-fit: cover; /* Maintain aspect ratio while covering the container */
}
</style>

<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body sticky-top" data-bs-theme="dark">
<div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#home">
        <div class="logo-container">
            <img src="dnsclogo.png" alt="dnsclogo">
        </div>
        <span style="width: 10px"></span>
        Dinno G
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <span style="width: 360px"></span>
            <a class="nav-link active" aria-current="page" href="#aboutus">About Me</a>
            <span style="width: 50px"></span>
            <a class="nav-link active" aria-current="page" href="#skills">Skills</a>
           <span style="width: 50px"></span>
            <a class="nav-link active" aria-current="page" href="#projects">Projects</a>
           <span style="width: 50px"></span>
            <a class="nav-link active" aria-current="page" href="#contactus">Contact</a>
            <span style="width: 100px"></span>
        </div>
    </div>
</div>
</nav>