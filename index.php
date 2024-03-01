<?php
  require 'vendor/autoload.php';
  $dotenv = DotenvVault\DotenvVault::createImmutable(__DIR__);
  $dotenv->safeLoad();
  include 'inc/head.php';
  include 'inc/navigation.php';
  include 'inc/cookie.php';
?>


<!-- ======== Main Start ==================== -->

  <main>


    <!-- =======================================
    ========Hero slider ==================== -->
  <div class="hero-slider" id="hero-slider-lo">

      <div class="autoplay" id="hero-lo">

        <div class="test-slide slide-1"> 
          <div class="container-inner flex-central">
            <div class="hero-container" >        
            <div class="hero-item">
              <h2 class="hero-title">The East of England's Leading Technology Company</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Performance-driven digital and technology services with complete transparency.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-purple">WHY CHOOSE US?<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div>
          </div> 
          </div>
        </div>  
  
        <div class="test-slide slide-2">
          <div class="container-inner flex-central">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Bespoke Software</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Delivering expert bespoke software solutions across a range of industries.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-blue-pale">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-3">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">IT Support</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Fast and cost-effective IT support services for your business.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-blue">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-4">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Digital Marketing</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Generating your new business through results-driven marketing activities.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-green">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-5">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Telecoms Services</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">A new approach to connectivity, see how we can help your business.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-red">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-6">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Web Design</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">For businesses looking to make a strong and effective first impression.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-purple">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-7">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Cyber Security</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Keeping businesses and their customers sensitive information protected.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-red-pink">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


      </div>

      
      </div>

    <!-- =========================================
    ====== Our Services ===================== -->
    

  <div class="our-services">
    <div class="container-inner" id="our-services-lo">

      <div class="service-title">
        <div> <h1>Our Services</h1></div>

        <div class="view-outer-hidden">
          <a class="view-link" href="#"><p>View Our work</p><p class="gap-blank">-</p><i class="fa-solid fa-arrow-right fa-2xl" style="color:inherit;"></i></a>
        </div>

      </div>

      <div class="service-block-top">

      <a href="">
        <div class="container-service-blue-pale bes-soft">
          <span><i class="icn-service-blue-pale fa-solid fa-laptop"></i></span>
          <span class="h2">Bespoke Software</span>
          <span class="p">Business software solutions for all your business needs including intergrations and reporting.</span>
          <span class="btn-service-blue-pale">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-blue">
          <span><i class="icn-service-blue fa-sharp fa-solid fa-display"></i></span>
          <span class="h2">IT Support</span>
          <span class="p">Fully managed IT support and consultancy packages tailored to meet your business needs.</span>
          <span class="btn-service-blue">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-green">
          <span><i class="icn-service-green fa-solid fa-chart-simple"></i></span>
          <span class="h2">Digital Marketing</span>
          <span class="p">Driven brand awareness & ROI through creative digital marketing campaigns.</span>
          <span class="btn-service-green">READ MORE</span>
        </div>
      </a>

      </div>


    <div class="service-block-bot">

      <a href="">
        <div class="container-service-red">
          <span><i class="icn-service-red fa-solid fa-phone-volume"></i></span>
          <span class="h2">Telecoms Services</span>
          <span class="p">Business telephony solutions including mobile & connectivity solutions.</span>
          <span class="btn-service-red">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-purple">
          <span><i class="icn-service-purple fa-solid fa-code"></i></span>
          <span class="h2">Web Design</span>
          <span class="p">User-centric design for businesses looking to make a lasting impression.</span>
          <span class="btn-service-purple">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-red-pink">

          <span><i class="icn-service-red-pink fa-solid fa-shield-halved"></i></span>
          <span class="h2">Cyber Security</span>
          <span class="p">Prevention, testing, consultancy and breach management services.</span>
          <span class="btn-service-red-pink">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-orange">
          <span><i class="icn-service-orange fa-solid fa-graduation-cap fa-flip-horizontal"></i></span>
          <span class="h2">Developer Training</span>
          <span class="p">Web design and software training courses designed to secure a job in tech.</span>
          <span class="btn-service-orange">READ MORE</span>
        </div>
      </a>

      </div>


        <div class="view-outer">
        <a class="view-link" href="#"><p>View Our work</p><p class="gap-blank">-</p> <i class="fa-solid fa-arrow-right fa-2xl" style="color:inherit;"></i></a>
      </div>


    </div>
  </div>


  <!-- =======================================
  ========Accreditation Carousel ==================== -->

<div class="carousel">
  <div class="carousel-container autoplay-carousel">

    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/future-50.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/google-partner.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/iso_27001.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/princess-royal-training.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/living_wage.png" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/norfolk_prohelp.png" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/norfolk-carbon-charter.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/PPC_logo.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/investing-in-future-growth.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/qms.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/skills-of-tomorrow.jpg" alt="customer logo"></div>

  </div>
</div>


  <!-- =======================================
  ========Intro and Reviews ==================== -->

  <div class="company-intro">

    <div class="container-inner"  id="company-intro-lo">

      <div class="intro-container">
        
      

      <div class="col-1">

        <div class="intro-title-container">
          <h1><strong class="intro-title">Welcome To Netmatters</strong></h1>
        </div>

        <div>
          <p class="font-lite">
            <strong class="strong">Netmatters is a leading <a href="#" class="link-white-bold" > Bespoke Software</a>, <a href="#" class="link-white-bold" >IT Support</a>, and <a href="#" class="link-white-bold" >Digital Marketing</a> company based in the East of England with offices in <a href="#" class="link-white-bold" >London</a>, <a href="#" class="link-white-bold" >Cambridge</a>, <a href="#" class="link-white-bold" >Wymondham</a>, and <a href="#" class="link-white-bold" >Great Yarmouth</a>.</strong><br><br>
            We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.<br><br>
            We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.<br><br>
          </p>
        </div>

        <div class="intro-btns">
          <div class="btn-container">
            <a href="#"><div class="btn-blk-dark">WHY CHOOSE US? <i class="fa-solid fa-arrow-right" style="color:white;"></i></div></a>
          </div>

          <div class="btn-container">
            <a href="#"><div class="btn-blk-dark">OUR CULTURE <i class="fa-solid fa-arrow-right" style="color:white;"></i></div></a>
          </div>
        </div>

      </div>
  

      <div class="col-2">
        
        <div class="intro-title-container">
          <h1><strong class="intro-title">What Our Clients Think</strong></h1>
        </div>

        <div class="flex-row">
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
        </div>

          <div class="review">
            <p>Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</p>
          </div>

          <div class="author-name">
            <p class="news-text-grey">Eleanor Bishop, Head of Marketing - <a href="#" class="link-white">Ashcroft Partnership LLP</a></p>
          </div>

        <div class="intro-btns">
          <div>
          <a href="#"><div class="btn-intro-blue-l">GOOGLE REVIEWS <i class="fa-solid fa-arrow-right" style="color:white;"></i></div></a>
          </div>
          <div>
            <a href="#"><div class="btn-intro-green-l">TRUSTPILOT REVIEWS <i class="fa-solid fa-arrow-right" style="color:white;"></i></div></a>
          </div>

      </div>

      </div>

      </div>

    </div>
  </div>


  <!-- =======================================
  ========Latest News ==================== -->

  <div class="news">

    <div class="container-inner" id="news-lo">

      <div class="news-top">

      <div class="news-title">
        <h1>Latest News</h1>
      </div>

      <div class="view-outer-hidden">
        <a class="view-all" href="#">
          <p>View All</p><p class="gap-blank">-</p>
          <i class="fa-solid fa-arrow-right fa-2xl" style="color:inherit;"></i>
        </a>
      </div>
      

    </div>
    
      <div class="news-col">

      <?php
        include 'inc/news_articles.php';
      ?>


      <!-- <div class="flex-col">
      <a href="#" class="news-card">
        <div class="news-item">
          <div class="top-right-outer">
          <div class="top-right-blue">
            <span class="h5">CASE STUDIES</span>
          </div>
        </div>
          <div class="news-img">
            <img src="img/news-1.png" alt="***DO LATER***">
          </div>
          <div class="news-text">
            <div class="news-para">
              <h4 class="text-blue">Staying Secure and Connected With Netmatters -... <span class="text-grey">- 6 MINUTE READ</span></h4>
              <p>Urban Mission Schools and Community (UMSC) is an independent school aiming to re-engage youth...</p>
            </div>
            <span class="btn-news-blue">READ MORE</span>
            <hr class="hr">    
            <div class="news-bot">
              <img class="author-image" src="img/nm-logo-dark-small.png" alt="Netmatters Logo">
              <P><span class="strong">Posted by Netmatters</span> <br> 11th May 2023</P> 
            
            </div>
          </div>         
          
        </div>
        </a>
      </div> --> 
        

        
      <!-- <div class="flex-col">
        <a href="#" class="news-card"> 
        <div class="news-item">
          <div class="top-right-outer">
          <div class="top-right-purple">
            <span class="h5">CASE STUDIES</span>
          </div>
        </div>
          <div class="news-img">
            <img src="img/news-2.png" alt="***DO LATER***">
          </div>
          <div class="news-text">
            <div class="news-para">
              <h4 class="text-purple">Glaven Valley - Web Case Study <span class="text-grey"> - 5 MINUTE READ</span></h4>
              <p>The Client - Since 2001, Glaven Valley has been a leading platform for the listing and booking of self-...</p>
            </div>
            <span class="btn-news-purple">READ MORE</span>    
            <hr class="hr">            
            <div class="news-bot">
              <img class="author-image" src="img/nm-logo-dark-small.png" alt="Netmatters Logo">
              <P><span class="strong">Posted by Netmatters</span><br> 10th May 2023</P> 
            </div>
          </div>         
          
        </div>
      </a>
      </div> -->
        


      <!-- <div class="flex-col med-dis"> 
        <a href="#" class="news-card">      
        <div class="news-item">
          <div class="top-right-outer">
            <div class="top-right-purple">
              <span class="h5">NEWS</span>
            </div> 
          </div>       

          <div class="news-img">
            <img src="img/news-3.png" alt="***DO LATER***">
          </div>          
          <div class="news-text">            
            <div class="news-para">
              <h4 class="text-purple">Bethany Shakespeare - Netmatters 5 Year Legend... <span class="text-grey">- 3 MINUTE READ</span></h4>
              <p>Today we are congratulating Bethany Shakespeare on achieving the Netmatters Long Service Award and b...</p>
            </div>            
            <span class="btn-news-purple">READ MORE</span>
            <hr class="hr">             
            <div class="news-bot">
              <img class="author-image" src="img/nm-logo-dark-small.png" alt="Netmatters Logo">
              <P><span class="strong">Posted by Netmatters</span><br> 8th May 2023</P>               
            </div>
          </div>
        </div>       
      </a>      
      </div>    -->
      
    

      <div class="view-outer">
        <a class="view-all" href="#">
          <p>View All</p><p class="gap-blank">-</p>
          <i class="fa-solid fa-arrow-right fa-2xl" style="color:inherit;"></i>
        </a>
      </div>
    

    </div>

    </div>
  </div>
  


  <!-- =========================================
  ====== Client carousel ======== -->

	<div class="carousel">
      <div class="carousel-container autoplay-carousel">
              
        <div class="img-container">  
          <div class="pop-con">
            <div class="pop-up">
              <h3>Survey Solutions</h3>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/survey_solutions_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>One Traveller</h3>
            <p class="pop-up-text"> <a class="link-white-bold" href="#">One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
            <span class="btn-hover-purple">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/onetravellerlogo_white_figuire.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Searles Leisure Resort</h3>
            <p class="pop-up-text">Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
            <span class="btn-hover-green">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/searles_logo.jpg" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Sweetzy</h3>
            <p class="pop-up-text">Sweetzy are an online sweets retailer, based in Wymondham.</p>
            <span class="btn-hover-green">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/sweetzy_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Crane Garden Buildings</h3>
            <p class="pop-up-text">Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/crane_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Black Swan Care Group</h3>
            <p class="pop-up-text">Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
            <span class="btn-hover-blue-pale">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/black_swan_logo.png" alt="customer logo">
        </div>
        
        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Ashcroft Partnership LLP</h3>
            <p class="pop-up-text">Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
            <span class="btn-hover-purple">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/ashcroftlogo_landscape_goldblack_DP60P-small.png" alt="customer logo">
        </div>      
      
        <div class="img-container"> 
          <div class="pop-con">
          <div class="pop-up">
            <h3>Howes Percival</h3>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/howespercivallogo.png" alt="customer logo">
        </div>

        <div class="img-container"> 
          <div class="pop-con">
          <div class="pop-up">
            <h3>BEAT</h3>
            <p class="pop-up-text">The UK's eating disorder charity founded in 1989.</p>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/beat_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>GDST</h3>
            <p class="pop-up-text">The <a class="link-white-bold" href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independent girls' schools.</p>
            <span class="btn-hover-green">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/girls_day_school_trust_logob.png" alt="customer logo">
        </div>  
      
        <div class="img-container">  
          <div class="pop-con">            
          <div class="pop-up">
            <h3>Xupes</h3>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/xupes_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Girl Guiding Anglia</h3>
            <p class="pop-up-text">Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK.</p>
            <span class="btn-hover-blue">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/girl_guides_anglia_logo.png" alt="customer logo">
        </div>  
      
        <div class="img-container"> 
          <div class="pop-con">            
          <div class="pop-up">
            <h3>Busseys</h3>
            <p class="pop-up-text">One of the UK's leading Ford dealerships.</p>
          </div>        
          <div class="box-arrow"></div>
        </div>

          <img class="carousel-greyscale" src="./img/clients/busseys.png.png" alt="customer logo">
        </div>

      </div>
    </div>

  
  <!-- =========================================
  ====== Form (Newsletter sign up) ======== -->
  <?php
  include 'inc/news_letter_sign_up.php';
  ?>
  

  </main>
      
<?php
  include 'inc/footer.php';
?>

