<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700">




    <title>@পড়িPOINT/Commerce</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>



  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">

<!-- Logo -->

    <div class="logo">
      <a href="https://tamim130.github.io/poripoint.github.io/"><em>@পড়ি</em> Point</a>
    </div>


  <!-- Menu -->
  
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li><a href="#section7">Today's Work</a></li>
        <li><a href="#section5">Book</a></li>
        <li class="has-submenu"><a href="#">Find</a>
          <ul class="sub-menu">
             <li><a href="#section2">Sheet</a></li>
             <li><a href="#section3">Question Bank</a></li>
          </ul>
        </li>
        <li class="has-submenu"><a href="#">More</a>
          <ul class="sub-menu">
            <li><a href="#section11">Videos</a></li>
            <li><a href="#section10">Apps</a></li>
          </ul>
          </li>
        <li><a href="#section6">Contact</a></li>
        
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->

  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>
      <div class="video-overlay header-text">
          <div class="caption">
              <h2><em>Your</em> Classroom</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section5">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>

  
  





  
<!-- Today's Work  Section7 -->



<section class="section courses" data-section="section7">
 
   
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Today's Work</h2>
        </div>
      </div>

      <div class="item">
       
   <div class="pricingdiv">
	
	
  
      <ul class="theplan">
         <br>
		     <li class="title">Batch-III</li>
         <br>
         <br>
         <br>
		     <li>Arian Hasan </li>
         <li>S M Jubayer Bappy </li>
         <li>Md. Shaun </li>
         <li>Arif Abran Khan </li>
		
		
         <br>
         <br>
         <br>
         <br>
		     <li><a class="pricebutton" href="https://drive.google.com/drive/folders/1z0Ki7RdPgpgr39mqNfgkYxksah6Z14uG?usp=sharing" target="_blank" rel="nofollow">Take a Tour</a></li>
	       </ul>

 

  
      </div>



 

</section>
<style>

.pricingdiv{
  display: flex;
  justify-content: center;
  
}

.pricingdiv ul.theplan{
  list-style-type:none;
  margin: 0;
  padding: 0;
  display:flex;
  flex-direction:column;
  border-top-left-radius: 50px;
  border-bottom-right-radius: 50px;
  border-top-right-radius: 50px;
  border-bottom-left-radius: 50px;
  color: white;
  text-align: center;
  /* align-items: center; */
  background-image: url(assets/images/lamp-neon-label-vector-26152660.jpg);
  /* background: #000000; */
  position:static;
  width: 360px; /* width of each table */
  margin-right: 25px; /* spacing between tables */
  margin-bottom: 1em;
  transition: all .5s;
}

.pricingdiv ul.theplan:hover{ /* when mouse hover over pricing table */
  transform: scale(1.05);
  transition: all 1s;
  z-index: 100;
  box-shadow: 0 0 20px white;
}

.pricingdiv ul.theplan li{
  margin: 10px 20px;
  font-size: 25px;
  position: relative;
}

.pricingdiv ul.theplan li.title{
  font-size: 120%;
  font-weight: bold;
  text-align: center;
  margin-top: 2px;
  border-radius: 15px;
  text-transform: uppercase;
  border:2px solid  rgb(67, 255, 10) ;
 
}

.pricingdiv ul.theplan:nth-of-type(2){
  background-image: url(assets/images/lamp-neon-label-vector-26152660.jpg);
  /* background: #000000; */



}
    

.pricingdiv ul.theplan:last-of-type{ /* remove right margin in very last table */
  margin-right: 0;
  padding: auto;
}

/*very last LI within each pricing UL */
.pricingdiv ul.theplan li:last-of-type{

  text-align: center;
  margin-top: auto; /*align last LI (price button li) to the very bottom of UL */
  padding: auto;
}  

.pricingdiv a.pricebutton{
  background: rgb(167, 1, 136);
  text-decoration: none;
  padding: 10px;
  display: inline-block;
  margin: 20px auto;
  font-size: 18px;
  border-radius: 5px;
  color: rgb(255, 255, 255);
  text-transform: uppercase;
  padding: auto;
}

@media only screen and (max-width: 500px) {
  .pricingdiv ul.theplan{
    border-radius: 0;
    width: 100%;
    margin-right: 0;
    padding: auto;
  }
  
  .pricingdiv ul.theplan:hover{
    transform: none;
    box-shadow: none;
    padding: auto;
  }
  
  .pricingdiv a.pricebutton{
    display: block;
  }
}

</style>









<!-- Book Section5 -->

<section class="section courses" data-section="section5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Book</h2>
        </div>
      </div>

      <div class="owl-carousel owl-theme">

        <div class="item">
          <img width="280" height="280"  src="assets/images/books-jan18.jpg" alt="Course #1">
          <div class="down-content">
            <h4>Year:2021 All Books</h4>
            <p><b>NCTB 9-10 Book Link</b></p>
            
            <div class="author-image">
              <img src="assets/images/open_book_sticker.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="http://nctb.gov.bd/site/page/ab6d31b3-7e74-4faf-b086-1cc8ccd09710"   target="_blank" rel="nofollow">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>



        <div class="item">
          <img width="280" height="280"  src="assets/images/depositphotos_8834910-stock-photo-education.jpg" alt="Course #1">
          <div class="down-content">
            <h4>Year:2020 All Books</h4>
            <p><b>NCTB 9-10 Book Link</b></p>
            
            <div class="author-image">
              <img src="assets/images/open_book_sticker.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="http://nctb.gov.bd/site/page/06666571-1632-4dd4-b534-0a7450947e3b/-"   target="_blank" rel="nofollow">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>



        <div class="item">
          <img width="280" height="280"  src="assets/images/various-book-books-college.jpg" alt="Course #1">
          <div class="down-content">
            <h4>Year:2019 All Books</h4>
            <p><b>NCTB 9-10 Book Link</b></p>
            
            <div class="author-image">
              <img src="assets/images/open_book_sticker.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="http://nctb.gov.bd/site/page/e6551aa3-2cd8-4e23-89cc-8a49cca3dc69/-"   target="_blank" rel="nofollow">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>


        <div class="item">
          <img width="280" height="280"  src="assets/images/37-379993_px-exam-wallpapers-4wc76kt-teacher-things-in-school.jpg" alt="Course #1">
          <div class="down-content">
            <h4>Year:2018 All Books</h4>
            <p><b>NCTB 9-10 Book Link</b></p>
            
            <div class="author-image">
              <img src="assets/images/open_book_sticker.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="http://nctb.gov.bd/site/page/91bd230a-d966-4015-b4d6-f6eb644ab3ea/-"   target="_blank" rel="nofollow">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>


        <div class="item">
          <img width="280" height="280"  src="assets/images/open-book-profit-icons-above-close-up-hd-video-big-concept-221172255.jpg" alt="Course #1">
          <div class="down-content">
            <h4>Year:2017 All Books</h4>
            <p><b>NCTB 9-10 Book Link</b></p>
            
            <div class="author-image">
              <img src="assets/images/open_book_sticker.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="http://nctb.gov.bd/site/page/63728c01-bbb8-40ab-8dad-0b476e5dfeb6/-"   target="_blank" rel="nofollow">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>



<!-- Sheet Section2 -->

<section class="section courses" data-section="section2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Sheet</h2>
        </div>
      </div>

      <div class="owl-carousel owl-theme">

        

        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (133).png" alt="Course #1">
          <div class="down-content">
            <h4>বাংলা ১ম পত্র</h4>
            <p><b>Explore it!!!!</b></p>
            <div class="author-image">
              <img  src="assets/images/st,small,507x507-pad,600x600,f8f8f8 (1).jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1fydP4NgkdP-mxAdbg80RFtuApHrVPFR7?usp=sharing">View  <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>

        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (134).png" alt="Course #1">
          <div class="down-content">
            <h4>বাংলা ২য় পত্র</h4>
            <p><b>Explore it!!!!</b></p>
            <div class="author-image">
              <img  src="assets/images/st,small,507x507-pad,600x600,f8f8f8 (1).jpg" alt="Author 1">
              
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1HsbgOO7fCzNNClPBjtKJ-1Kip61xudet?usp=sharing">View  <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
  
        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (137).png" alt="Course #1">
          <div class="down-content">
            <h4>English</h4>
            <p><b>Explore it!!!!</b></p>
            <div class="author-image">
              <img  src="assets/images/st,small,507x507-pad,600x600,f8f8f8 (1).jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1BU-zDSPteDEt9mCImElehQJoVQlKAx0D?usp=sharing">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        

        
        

      </div>
    </div>
  </div>
</section>









<!-- Question Bank Section3 -->

<section class="section courses" data-section="section3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Question Bank</h2>
        </div>
      </div>

      <div class="owl-carousel owl-theme">


        

       
       
        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (148).png" alt="Course #1">
          <div class="down-content">
            <h4>গণিত</h4>
            <p><b>Year:2015-2022</b></p>
            <div class="author-image">
              <img src="assets/images/set-handdra.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1G0Q2tzgW6_hJ1OJRMsS7PaKOOcOACv5J?usp=sharing">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (144).png" alt="Course #1">
          <div class="down-content">
            <h4>বাংলা ১ম পত্র </h4>
            <p><b>Year:2015-2022</b></p>
            <div class="author-image">
              <img src="assets/images/set-handdra.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1Fqb34ME2bz6-tjeB2g8bNLbiGOQADMeY?usp=sharing">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (145).png" alt="Course #1">
          <div class="down-content">
            <h4>বাংলা ২য় পত্র</h4>
            <p><b>Year:2015-2022</b></p>
            <div class="author-image">
              <img src="assets/images/set-handdra.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1FrpeBit9xotd5p4t0XObww-H_yECRZHb?usp=sharing">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (156).png" alt="Course #1">
          <div class="down-content">
            <h4> ইংরেজি ১ম পত্র</h4>
            <p><b>Year:2015-2022</b></p>
            <div class="author-image">
              <img src="assets/images/set-handdra.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1FuInz3N6OKoBQ12AtCJLzoU2kMNPZefS?usp=sharing">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (157).png" alt="Course #1">
          <div class="down-content">
            <h4>ইংরেজি ২য় পত্র</h4>
            <p><b>Year:2015-2022</b></p>
            <div class="author-image">
              <img src="assets/images/set-handdra.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1FyKQr-vNPknvidncRzqsWBxlNLwljGMl?usp=sharing">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (154).png" alt="Course #1">
          <div class="down-content">
            <h4>ইসলাম ধর্ম ও নৈতিক শিক্ষা</h4>
            <p><b>Year:2015-2022</b></p>
            <div class="author-image">
              <img src="assets/images/set-handdra.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1GD9gj9g1CWiWmc4W34zqGgJuR2jetguA?usp=sharing">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>

        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (155).png" alt="Course #1">
          <div class="down-content">
            <h4>তথ্য ও যোগাযোগ প্রযুক্তি</h4>
            <p><b>Year:2015-2022</b></p>
            <div class="author-image">
              <img src="assets/images/set-handdra.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1GDIDwPumkvikppztliNZkZ73OPY-CreQ?usp=sharing">View <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>





<!-- Videos Section11 -->


<section class="section courses" data-section="section11">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Videos</h2>
        </div>
      </div>

      <div class="owl-carousel owl-theme">


        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (174).png" alt="Course #1">
          <div class="down-content">
            <h4>Calculator Tricks</h4>
            <p><b>MX Series</b></p>
            <div class="author-image">
              <img src="assets/images/istockphoto-1295756182-612x612.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://www.youtube.com/playlist?list=PL1z9tFWGM7FcK39TlUXJD2tQKnjCf3Gxk " target="_blank" rel="nofollow">View  <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>


        <div class="item">
          <img width="280" height="280"  src="assets/images/Screenshot (175).png" alt="Course #2">
          <div class="down-content">
            <h4>Calculator Tricks</h4>
            <p><b>ES Series</b></p>
            <div class="author-image">
              <img src="assets/images/istockphoto-1295756182-612x612.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://www.youtube.com/playlist?list=PL1z9tFWGM7FcmsovIMZ1rlBUr0tVH5UUx" target="_blank" rel="nofollow">View  <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
       
        
       
        
     
  

      </div>
    </div>
  </div>
</section>








<!-- Apps Section10 -->

<section class="section courses" data-section="section10">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Apps</h2>
        </div>
      </div>

      <div class="owl-carousel owl-theme">


        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (169).png" alt="Course #1">
          <div class="down-content">
            <h4>Quran Online</h4>
            <p><b>Online Reading</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://quran.com/" target="_blank" rel="nofollow">Go <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>




        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (164).png" alt="Course #1">
          <div class="down-content">
            <h4>Cam Scanner</h4>
            <p><b>Primium Unlocked</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1fZ358CeMsTRCtoHacl7sOxRktkkoWpt3?usp=sharing" target="_blank" rel="nofollow">Go <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>


        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (159).png" alt="Course #2">
          <div class="down-content">
            <h4>Microsoft Office</h4>
            <p><b>Play Store</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://play.google.com/store/apps/details?id=com.microsoft.office.officehubrow&hl=en_US&gl=US&referrer=utm_source%3Dgoogle%26utm_medium%3Dorganic%26utm_term%3Dms+office+download+from+play+store&pcampaignid=APPU_1_CugPYcGyIM6c4-EP1reysAs" target="_blank" rel="nofollow">Go <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
       <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (160).png" alt="Course #1">
          <div class="down-content">
            <h4>Microsoft Word</h4>
            <p><b>Play Store</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://play.google.com/store/apps/details?id=com.microsoft.office.word&hl=en_US&gl=US" target="_blank" rel="nofollow">Go <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (161).png" alt="Course #1">
          <div class="down-content">
            <h4>Microsoft Excel</h4>
            <p><b>Play Store</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://play.google.com/store/apps/details?id=com.microsoft.office.excel&hl=en_US&gl=US" target="_blank" rel="nofollow">Go <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (162).png" alt="Course #1">
          <div class="down-content">
            <h4>MS PowerPoint</h4>
            <p><b>Play Store</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://play.google.com/store/apps/details?id=com.microsoft.office.powerpoint&hl=en_US&gl=US" target="_blank" rel="nofollow">Go <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>

        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (163).png" alt="Course #1">
          <div class="down-content">
            <h4>Google Classroom</h4>
            <p><b>Play Store</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://drive.google.com/drive/folders/1xAmyFBNvPZWeUozQ3-X9nsIgZfps9bx6?usp=sharing" target="_blank" rel="nofollow">Go<i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>

        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (165).png" alt="Course #1">
          <div class="down-content">
            <h4>Zoom Meeting</h4>
            <p><b>Play Store</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://play.google.com/store/search?q=zoom&c=apps&hl=en_US&gl=US" target="_blank" rel="nofollow">Go<i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>

        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (167).png" alt="Course #1">
          <div class="down-content">
            <h4>Al Quran</h4>
            <p><b>Play Store</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://play.google.com/store/apps/details?id=com.kutblog.arabicbanglaquran" target="_blank" rel="nofollow">Go<i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>


        <div class="item">
          <img width="280" height="260"  src="assets/images/Screenshot (166).png" alt="Course #1">
          <div class="down-content">
            <h4>Al Hadith</h4>
            <p><b>Play Store</b></p>
            <div class="author-image">
              <img  src="assets/images/find2.jpg" alt="Author 1">
            </div>
            <div class="text-button-pay">
              <a href="https://play.google.com/store/apps/details?id=com.ihadis.ihadis" target="_blank" rel="nofollow">Go<i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>






<!-- Contact Section6 -->

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-12"  align="middle">

 <form id="contact" action="https://formspree.io/f/xqknrewq" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required
                    minlength="4" maxlength="26" size="10">
                  </fieldset>
                </div>

               
                <div class="col-md-6">
                  <fieldset>
                    <input name="phone" type="tel" class="form-control" id="phone" placeholder="Your Phone Number" required
                       minlength="11" maxlength="11" size="10">
                  </fieldset>
                </div>         
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                

              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>


<br>
<br>








          <h1><a href="https://www.facebook.com/profile.php?id=100006864588997" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a> <a href="https://twitter.com/_IbnHossain_" target="_blank" rel="nofollow"><i class="fa fa-twitter-square"></i></a>    <a href="https://www.linkedin.com/in/mohammad-tamim-ibn-hossain-aa44b623a/" target="_blank" rel="nofollow"><i class="fa fa-linkedin-square"></i></a> <a href="https://www.instagram.com/_ibnhossain_/" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a> <a href="https://www.youtube.com/channel/UC2_eieujgoRqXGTJCDsJhgg" target="_blank" rel="nofollow"><i class="fa fa-youtube-square"></i></a> <a href="https://github.com/Tamim200042130/SWE-4202" target="_blank" rel="nofollow"><i class="fa fa-github-square"></i></a> </h1>
              </div>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </section>


<!-- Copyright -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2022 by Mohammad Tamim Ibn Hossain  
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });



    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4938034475866068"
    crossorigin="anonymous"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/62dca41f54f06e12d88b0178/1g8mu277b';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>