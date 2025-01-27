<style>
   /* .background-clip {
          position: fixed;
          right: 0;
          bottom: 0;
          z-index: -1;
          min-width: 100%;
          min-height: 100%;
          width: auto;
          height: auto;
    }
    @media (min-aspect-ratio: 16/9) {
          .background-clip {
            width: 100%;
            height: auto;
          }
    }
    @media (max-aspect-ratio: 16/9) {
          .background-clip {
            width: auto;
            height: 100%;
          }
    }*/
/* ANIMATED BACKGROUND */
.animate {
    background-color: #181818;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: -1;
}

.bg-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.bg-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  /* background-color: #353535; */
  background-color: #0a95b8;
  bottom: 60px;
  -webkit-animation: square 25s infinite;
  animation: square 25s infinite;
  -webkit-transition-timing-function: linear;
  transition-timing-function: linear;
  opacity: 0;
}

.bg-bubbles li:nth-child(1) {
  left: 3%;
  border-radius: 50em;
  background: transparent;
  border: 4px solid #0a95b8;
}
.bg-bubbles li:nth-child(2) {
  left: 6%;
  width: 75px;
  height: 75px;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 17s;
  animation-duration: 17s;
}
.bg-bubbles li:nth-child(3) {
  left: 15%;
  width: 175px;
  height: 175px;
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
}
.bg-bubbles li:nth-child(4) {
  left: 40%;
  width: 90px;
  height: 90px;
  -webkit-animation-duration: 22s;
  animation-duration: 22s;
}
.bg-bubbles li:nth-child(5) {
  left: 70%;
  background: transparent;
  border: 4px solid #0a95b8;
}
.bg-bubbles li:nth-child(6) {
  left: 90%;
  width: 90px;
  height: 90px;
  -webkit-animation-delay: 3s;
  animation-delay: 3s;
  border-radius: 50em;
  background: transparent;
  border: 4px solid #0a95b8;
}
.bg-bubbles li:nth-child(7) {
  left: 32%;
  width: 60px;
  height: 60px;
  -webkit-animation-delay: 7s;
  animation-delay: 7s;
  background: transparent;
  border: 4px solid #0a95b8;
}
.bg-bubbles li:nth-child(8) {
  left: 55%;
  width: 50px;
  height: 50px;
  -webkit-animation-delay: 15s;
  animation-delay: 15s;
  -webkit-animation-duration: 40s;
  animation-duration: 40s;
}
.bg-bubbles li:nth-child(9) {
  left: 30%;
  width: 140px;
  height: 140px;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 40s;
  animation-duration: 40s;
  border-radius: 50em;
  background: transparent;
  border: 4px solid white;
}
.bg-bubbles li:nth-child(10) {
  left: 90%;
  width: 60px;
  height: 60px;
  -webkit-animation-delay: 11s;
  animation-delay: 11s;
}
.bg-bubbles li:nth-child(11) {
  left: 10%;
  width: 40px;
  height: 40px;
  -webkit-animation-delay: 13s;
  animation-delay: 13s;
  border-radius: 50em;
}
.bg-bubbles li:nth-child(12) {
  left: 55%;
  width: 175px;
  height: 175px;
  -webkit-animation-delay: 7s;
  animation-delay: 7s;
  background: transparent;
  border: 4px solid white;
}

.bg-bubbles li:nth-child(13) {
  left: 65%;
  width: 100px;
  height: 100px;
  -webkit-animation-delay: 8s;
  animation-delay: 8s;
  border-radius: 50em;
}

@-webkit-keyframes square {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
    opacity: 1;
  }
}
@keyframes square {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
    opacity: 0;
  }
}
    
</style>

<!-- BACKGROUND-->
   <!-- <video autoplay loop muted plays-inline class="background-clip">
        <source src="background.mp4" type="video/mp4" />
    </video> -->
    
        <!-- BACKGROUND ANIMATION -->
     <div class="container-fluid">
         <div class="container">
             <div class="animate">
      <ul class="bg-bubbles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
      </ul>
    </div>
         </div>
     </div>
    