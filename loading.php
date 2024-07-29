<style>
    .loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background:#212429 ;
  transition: opacity .5s,  visibility .5s;
  z-index: 9999;
}

.loader--hidden {
  opacity: 0;
  visibility: hidden;
}

.loader::after {
  content: "";
  width: 75px;
  height: 75px;
  border: 15px solid #dddddd;
  border-top-color: #2ae2f9;
  border-radius: 50%;
  animation: loading .5s ease infinite;
}

@keyframes loading {
  from {
    transform: rotate(0turn);
  }
  to {
    transform: rotate(1turn);
  }
}
</style>

<!-- partial:index.partial.html -->
<div class="loader"></div>
<!-- partial -->
  <script>
      window.addEventListener("load", () => {
        const loader = document.querySelector(".loader");

        // Wait for 3 seconds before starting the fade-out transition
        setTimeout(() => {
            loader.classList.add("loader--hidden");

            // Wait for the transition to end before removing the loader
            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        }, 300); // 3000 milliseconds = 3 seconds
    });
  </script>