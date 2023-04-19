<!-- contact section start -->

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fas fa-paper-plane"></i>kevalpatel8456@gmail.com</p>
                <p><i class="fas fa-phone-square"></i>7698729424</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <a href="images/Keval_Patel_BIO_DATA.pdf" download class="btn btn2">Download CV</a>
            </div>

            <div class="contact-right">
                <form action="" method="POST" name="submit-to-google-sheet">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="email" name="Email" placeholder="Your Email" required>
                    <textarea name="Message" id=""  rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>

                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>
</div>



<!-- contact section send -->


<!-- -----contact js section start-------->

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxyQZJ4gCnIQkavzt2XKJymkX_UeFf4PFTxlY3L1leTSdv8bbYZTEU6dkDzsde3mzKa/exec'
  const form = document.forms['submit-to-google-sheet']
  const msg = document.getElementById("msg")

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        msg.innerHTML = "Message sent successfully"
        setTimeout(function(){
            msg.innerHTML = ""
        },5000)
        form.reset()
      })
      .catch(error => console.error('Error!', error.message))
  })
</script>

<!-- -----contact js section end-------->