<?php

include 'header.php';
?>
<style type="text/css">
    /* Slow-motion Zoom Container */
.img-hover-zoom--slowmo img {
  transform-origin: 50% 65%;
  transition: transform 5s, filter 3s ease-in-out;
  filter: brightness(150%);
}

/* The Transformation */
.img-hover-zoom--slowmo:hover img {
  filter: brightness(100%);
  transform: scale(1.5);
}
</style>
<body class="home-page bp-legacy home page-template-default page page-id-845 wpb-js-composer js-comp-ver-5.5.2 vc_responsive no-js" style=" ">




    <?php
    include 'menu.php';

    ?>
        <!--Responsive header-->
    <div class="top-image">
    <img src="images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->
    
<section class="inner-page">
    <div class="container">
        <div class="page-title">
            <h1>Contact <span>Us</span></h1>
        </div><!-- Page Title -->
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <h3 class="sub-head">CONTACT INFORMATION</h3>
                    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=australia&amp;aq=&amp;sll=-25.274398,133.775136&amp;sspn=41.490127,85.166016&amp;ie=UTF8&amp;hq=&amp;hnear=Australia&amp;t=m&amp;z=4&amp;ll=-25.274398,133.775136&amp;output=embed"></iframe>
                    <p>Aenean sit a ametlandit a urna. Sed vehicula rhoncus tellus, quis accumsan nunc dicti quiis enean sit amet nibh ut magna malesuada convallis. Quisque pulvinar odio et justo convalis mollis.Aenean elit eros, molestie ac viverra nec, blandit a urna.</p>
                    <ul class="contact-details">
                        <li>
                            <span><i class="icon-home"></i>ADDRESS</span>
                            <p>#8901 Marmora Road Chi Minh City, Vietnam</p>
                        </li>
                        <li>
                            <span><i class="icon-phone-sign"></i>PHONE NO</span>
                            <p>+00 035 835 282 / +00 034 965 353</p>
                        </li>
                        <li>
                            <span><i class="icon-envelope-alt"></i>EMAIL ID</span>
                            <p>#8901 Marmora Road Chi Minh City, Vietnam</p>
                        </li>
                        <li>
                            <span><i class="icon-link"></i>WEB ADDRESS</span>
                            <p>http://www.yourwebsite.com</p>
                        </li>
                    </ul>
                </div>
            </div>  <!-- Contact Info -->
            <div class="col-md-6">
                <div class="form">
                    <h3 class="sub-head">CONTACT US BY MESSAGE</h3>
                    <p>Anean sit amet nibh ut magna malesuada <span>*</span></p>
                    <div id="message"></div>
                    <form method="post"  action="https://html.webinane.com/lifeline/contact.php" name="contactform" id="contactform">
                        <label for="name" accesskey="U">Full name <span>*</span></label>
                        <input name="name" class="form-control input-field" type="text" id="name" size="30" value="" />
                        <label for="email" accesskey="E">Email Address <span>*</span></label>
                        
                        <input name="email" class="form-control input-field" type="text" id="email" size="30" value="" />
                        <label for="comments" accesskey="C">Message <span>*</span></label>
                        <textarea name="comments" id="comments" rows="7" class="form-control input-field"></textarea>
                        <div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div>
                        <input type="submit" class="form-button submit" id="submit" value="SEND MESSAGE" />
                    </form>
                </div>
            </div>  <!-- Message Form -->
        </div>  
    </div>  
        
 
    
    
</section>
</div>
        
       <?php
       include 'footer.php';

       ?>
        
</body>

</html>