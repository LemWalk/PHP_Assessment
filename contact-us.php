<?php
    require 'vendor/autoload.php';
    $dotenv = DotenvVault\DotenvVault::createImmutable(__DIR__);
    $dotenv->safeLoad();
    include 'inc/form-validation.php';
    include 'inc/head.php';
    include 'inc/navigation.php';
    include 'inc/cookie.php';
?>



<main>  

<!-- ===== Home / Office bar ====== -->

<div id="home-top-lo">
    <div class="container-inner">
        <div class="home-top-inner">
            <p class="home-top-text"><strong>Home</strong> / Our Offices</p>
        </div>
    </div>
</div>

<!-- ===== Page Title ===== -->

    <div id="page-title-lo" class="contact-title-box">
        <div class="container-inner">
            <h1 class="contact-title-lrg">Our offices</h1>
        </div>
    </div>

<!-- ===== Office cards ===== -->

    <div id="office-cards-lo" class="office-container">
        <div class="container-inner">
            <div class="office-inner">

    <!-- London Office Card -->
                
                <div class="office-block">

                    <div class="office-top">

                        <div class="office-img">
                            <img class="img-office" src="img/offices/london.jpg" alt="Netmatters London Office">
                        </div>

                        <div class="office-info">
                            <div class="office-info-inner">
                                <h2 class="office-title">
                                    <a class="office-title-link" href="#">London Office</a>
                                </h2>    
                                    <p class="office-address">
                                        Unit G6,<br>
                                        Pixel Business Centre,<br>
                                        110 Brooker Road, Waltham Abbey,<br>
                                        London,<br>
                                        EN9 1JH
                                    </p>
                                    <h3 class="office-telephone-number">02045 397354</h3>
                                    <div class="btn-office-box"><a class="btn-office" href="#">VIEW MORE</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="office-map">
                        <img class="img-office-map" src="img/offices/london-map.png" alt="placeholders">
                    </div>

                </div>

    <!-- ===== Cambridge Office Card ===== -->

                <div class="office-block">
                    
                    <div class="office-top">

                        <div class="office-img">
                            <img class="img-office" src="img/offices/cambridge.jpg" alt="Netmatters Cambridge Office">
                        </div>

                        <div class="office-info">
                            <div class="office-info-inner">
                                <h2 class="office-title">
                                    <a class="office-title-link" href="#">Cambridge Office</a>
                                </h2>    
                                    <p class="office-address">
                                    Unit 1.31,<br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS
                                    </p>
                                    <h3 class="office-telephone-number">01223 37 57 72</h3>
                                    <div class="btn-office-box"><a class="btn-office" href="#">VIEW MORE</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="office-map">
                        <img class="img-office-map" src="img/offices/cambridge-map.png" alt="placeholders">
                    </div>

                </div>

    <!-- ===== Wymondham Office Card ===== -->

                <div class="office-block">
                    
                    <div class="office-top">

                        <div class="office-img">
                            <img class="img-office" src="img/offices/wymondham.jpg" alt="Netmatters Wymondham Office">
                        </div>

                        <div class="office-info">
                            <div class="office-info-inner">
                                <h2 class="office-title">
                                    <a class="office-title-link" href="#">Wymondham Office</a>
                                </h2>    
                                    <p class="office-address">
                                    Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ<br>
                                    </p>
                                    <h3 class="office-telephone-number">01603 70 40 20</h3>
                                    <div class="btn-office-box"><a class="btn-office" href="#">VIEW MORE</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="office-map">
                        <img class="img-office-map" src="img/offices/wymondham-map.png" alt="placeholders">
                    </div>

                </div>

    <!-- ===== Yarmouth Office Card ===== -->

                <div class="office-block">
                    
                    <div class="office-top">

                        <div class="office-img">
                            <img class="img-office" src="img/offices/yarmouth-2.jpg" alt="Netmatters Great Yarmouth Office">
                        </div>

                        <div class="office-info">
                            <div class="office-info-inner">
                                <h2 class="office-title">
                                    <a class="office-title-link" href="#">Great Yarmouth Office</a>
                                </h2>    
                                    <p class="office-address">
                                    Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA
                                    </p>
                                    <h3 class="office-telephone-number">01493 60 32 04</h3>
                                    <div class="btn-office-box"><a class="btn-office" href="#">VIEW MORE</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="office-map">
                        <img class="img-office-map" src="img/offices/yarmouth-map.png" alt="placeholders">
                    </div>

                </div>

            </div>
        </div>
    </div>


<!-- ===== Business Info ===== -->

    <div class="business-contact-container" id="business-contact-lo">
        <div class="container-inner">
            <div class="business-contact-inner">

                <div class="business-contact-details">
                    <p class="contact-text">Email us on:</p>
                    <a href="mailto:sales@netmatters.com" class="sales-email"><p class="contact-email">sales@netmatters.com</p></a>
                    <p class="contact-text">Business hours:</p>
                    <p class="contact-text">Monday - Friday 07:00 - 18:00</p>
                    <div class="out-of-hours-box">
                        <div class="out-of-hours-title-box">
                            <p class="out-of-hours-title">Out of Hours IT Support</p> <i class="fa-solid fa-chevron-down fa-sml fa-regular"></i>
                        </div>
                        <div class="out-of-hours-details">
                            <p class="out-of-hours-text-light">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <p class="contact-text">Monday - Friday 18:00 - 22:00 <br> Saturday 08:00 - 16:00 <br>  Sunday 10:00 - 18:00</p>
                            <p class="out-of-hours-text-light">To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
                        </div>
                    </div>
                </div>


<!-- ===== Contact Form ===== -->


                <form class="contact-form" id="contact-form-lo" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
                    <div class="form-inner">

                    <?php 
                    
                    if($_SESSION['form_valid'] == true) { 
                        echo "<div class=\"submit_message_box\"> ";
                        echo " <div  class=\"submit-successful \">Submission Successful!<i class=\" submit_message_close fa-solid fa-x fa-xs\"></i></div> ";
                        echo "</div> ";                        
                    }

                    if(
                        !empty($nameErr) ||
                        !empty($company_nameErr) ||
                        !empty($emailErr) ||
                        !empty($telephoneErr) ||
                        !empty($messageErr)) 
                            { 
                                echo "<div class=\"submit_message_box\"> ";
                                echo " <div  class=\"submit-failed\">Submission Unsuccessful: <br><br> ";
                                
                                if(!empty($nameErr)){
                                    echo htmlspecialchars("Name error: $nameErr");
                                    echo "<br><br>";
                                }

                                if(!empty($emailErr)){
                                    echo htmlspecialchars("Email error: $emailErr");
                                    echo"<br><br>";
                                }

                                if(!empty($telephoneErr)){
                                    echo htmlspecialchars("Telephone error: $telephoneErr");
                                    echo"<br><br>";
                                }
                                
                                
                                echo" <i class=\" submit_message_close_error fa-solid fa-x fa-xs\"></i></div> ";
                                echo "</div> ";                        
                            };

                        ?>   

                        <div class="input-boxes-contact">
		
                            <div class="data-input">
                                <label id="name-id" for="form-input-name">Your Name <span class="p-red">*</span></label>
                                <input class="form-input-box" id="form-input-name" type="text" value="<?php echo $name;?>" name="name" required <?php if(!empty($nameErr)) {echo 'style="border: 1px solid #a94442 !important;"';} ?> >
                            </div>

                            <div class="data-input">
                                <label id="company-name-id" for="form-input-company-name">Company Name</label>
                                <input id="form-input-company-name" type="text" value="<?php echo $company_name;?>" name="company_name">
                            </div>

                            <div class="data-input">
                                <label id="e-mail-id" for="form-input-email">Your Email <span class="p-red">*</span></label>
                                <input id="form-input-email" type="email" value="<?php echo $email;?>" name="email" required  <?php if(!empty($emailErr)) {echo 'style="border: 1px solid #a94442 !important;"';} ?> >
                            </div>

                            <div class="data-input">
                                <label id="telephone-id" for="form-input-telephone">Your Telephone Number <span class="p-red">*</span></label>
                                <input id="form-input-telephone" name="telephone" type="tel" minlength="10" maxlength="13" value="<?php echo $telephone;?>" required <?php if(!empty($telephoneErr)) {echo 'style="border: 1px solid #a94442 !important;"';} ?> >
                            </div>

                            <div class="data-input">
                                <label id="message-id" for="form-input-message">Your Message <span class="p-red">*</span></label>
                                <textarea name="message" id="form-input-message" cols="50" rows="10" placeholder="" value="<?php echo $message;?>" required <?php if(!empty($messageErr)) {echo 'style="border: 1px solid #a94442 !important;"';} ?> >Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?" 
                                </textarea>                    
                            </div>

                        </div>

                        <div class="checkbox-2">
                            <span class="custom-tickbox-2" for="form-checkbox" onclick="toggleActive(this)"></span>
                            <input type="hidden" id="form-checkbox" name="marketing"  value="0">
                            <label  class="form-text-2">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#" class="link-blk">Privacy Policy</a> for more information on how we keep your data safe.</label>
                        </div>


                        <div class="small-print">
                            <p class="small-print-text">This site is protected by reCAPTCHA and the Google <a href="#" class="link-blk">Privacy Policy</a> and <a href="#" class="link-blk">Terms of Service</a> apply.</p>
                        </div>

                    <div class="contact-bottom-row">

                        <div class="field-required">
                            <p class="field-text"><span class="p-red">* </span>Fields Required</p>
                        </div>
                        
                        <div id="contact-submit-btn-box">
                            <button id="contact-submit-btn" type="submit" class="btn-blk" >SEND ENQUIRY</button>
                        </div>   
                        
                        </div>                

                    </div>
                </form> 
            
            </div>
        </div>
    </div>

<?php
    include 'inc/news_letter_sign_up.php';
?>

</main>


<?php
    include 'inc/footer.php';
?>
