
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/IC.png" sizes="64 x 64" type="image/png">
    
    <title>G. Dinno Portfolio</title>
    
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- GOOGLE FONT-->
    <link rel="stylesheet" href="roboto.css">
    
    
    <style>
            *{
                font-family: 'Roboto';
                /*outline: 1px solid red;*/

            }
            
            html {
                    scroll-behavior: smooth;
                }
            .barrier{
                width: 60%;
                border-top: 1px solid #00ccff;
            }
            
            /* Top Reveal*/
            .reveal {
                position: relative;
                transform: translateY(150px);
                opacity: 0;
                transition: all 0.9s ease;
            }
            .reveal.active {
                transform: translateY(0px);
                opacity: 1;
            }
            
         
    </style>
</head>
<body>
    
    <!-- BACKGROUND -->
    <?php  include("background.php");?>
    
    <!-- LOADING SCREEN-->
    <?php  include("loading.php");?>
   
    <!-- NAVBAR -->
    <?php include("navbar.php");?>
    
    <!-- HOME -->
    <?php include("home.php")?>
    
    <!--  ABOUT ME-->
   <?php include("aboutus.php")?>
   <?php include("mission_vision.php")?>
   
   <!-- SKILLS -->
   <?php include("skills.php")?>
   
   <!-- PROJECTS -->
   <?php include("project.php")?>
   
   <!-- SERVICES -->
   <?php include("services.php")?>
   
   <!-- TOOLS -->
   <?php include("tools.php")?>
   
   <!-- MESSAGE -->
   <?php include("message.php")?>
   
   <!-- CONTACT -->
   <?php include("contact.php")?>
   
   <!-- FOOTER -->
   <?php include("footer.php")?>
   
   
    
    
    <!-- BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- REVEAL ANIMATION -->
    <script src="reveal.js"></script>
   <script>
    window.addEventListener('scroll', reveal);


    function reveal() {
        var revealsLeft = document.querySelectorAll('.reveal_left');
        var revealsRight = document.querySelectorAll('.reveal_right');
        
        var windowheight = window.innerHeight;

        // Adjust reveal point based on screen width
        var revealpoint = window.innerWidth <= 768 ? 50 : 150;

        function handleReveal(reveals) {
            for (var i = 0; i < reveals.length; i++) {
                var revealtop = reveals[i].getBoundingClientRect().top;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
        }

        handleReveal(revealsLeft);
        handleReveal(revealsRight);
    }
</script>
</body>
</html>