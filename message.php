<?php
include("conn.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $message = $_POST['message'];

    // Correct SQL Query
    $sql = "INSERT INTO messages (name, message) VALUES ('$name', '$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Message Sent!');</script>";
        header('Location: index.php#contactus');
    } else {
        echo "<script>alert('Failed to Send Message!');</script>";
    }
}
?>


<style>
.message{
    background: #dddddd;
}
.message__content{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px;
    background: #212429;
    border-radius: 10px;
    box-shadow: 10px 15px 20px #212429;
}

</style>

<div class="message" >
        <div id="contactus" style="height:150px"></div>
        
         
        <div class="container-fluid">
            
            <div class="container d-flex justify-content-center">
               <div class="row message__content reveal">
                   <div class="col-12 col-md-6 message__box d-grid">
                       <h1 class="text-light fw-bold">Message Me!</h1>
                       <form method="post">
                           <div class="form-floating mb-3">
                              <input type="text" name="name" class="form-control" id="floatingInput" placeholder="anonymous name" required>
                              <label for="floatingInput">Anonymous Name</label>
                            </div>
                            <div class="form-floating mb-3">
                              <textarea name="message" class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px" required></textarea>
                              <label for="floatingTextarea2">Message</label>
                            </div>
                            <button name="submit"  class="btn btn-primary" style="width: 100%" onclick="return confirm(\'Record Successfully Added!\')">Sent</button>
                        </form>
                   </div>
                   <div class="col-12 col-md-6 mt-3">
                       <h3 class="text-light fw-bold">Have Questions? </h3>
                       <h5 class="text-light">Message Me & Well Put You On The Path To Success!</h5>
                       <img  src="images/Message.png" alt="" class="img-fluid">
                   </div>
               </div>
               
            </div>
            <div style="height: 120px"></div>
        </div>
</div>

<script>
        function limitWords(textarea) {
            const words = textarea.value.split(/\s+/).filter(Boolean);
            if (words.length > 400) {
                // Truncate to the first 400 words
                textarea.value = words.slice(0, 400).join(' ');
                alert('You cannot enter more than 400 words.');
            }
        }
    </script>
    
    