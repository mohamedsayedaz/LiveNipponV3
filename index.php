<?php get_header();?>

<!-- Exams Section-->
<div class="jumbotron" id="intro-section">
    <div class="row">
        <div class="col-sm-9 center-d">
            <h1 class="section-title" id="intro-title">Win A Cool Local Tour Of Shimokitazawa</h1>
        </div>
    </div>
</div>
<!-- Top Trips Section-->
<div class="jumbotron" id="best-sellers-section">
    <div class="row">
        <div class="col-md-6" id="best-seller-col">
            <h2 class="section-title">Our Best Sellers</h2>
        </div>
    </div>
    <div class="container">
        <div class="row offers_div">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 trip_offer" id="first_trip">
                <h3 class="trip_title">Mt Fuji And Hakone Trip</h3>
                <img class="img-thumbnail trip_img img-responsive" src="<?php echo get_template_directory_uri() . '/img/fuji.jpg' ; ?>" alt="Mt Fuji">
                <a href="#" class="btn btn-danger trip_btn">Read more</a>
            </div>
        
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 trip_offer" id="second_trip">
                <h3 class="trip_title">Mt Fuji Trip Sorrunding Area</h3>
                <img class="img-thumbnail trip_img img-responsive" src="<?php echo get_template_directory_uri() . '/img/fuji2.jpg' ; ?>" alt="Mt Fuji">
                <a href="#" class="btn btn-danger trip_btn">Read more</a>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 trip_offer" id="third_trip">
                <h3 class="trip_title">Tokyo Trip</h3>
                <img class="img-thumbnail trip_img img-responsive" src="<?php echo get_template_directory_uri() . '/img/tokyo.jpg' ; ?>" alt="Mt Fuji">
                <a href="#" class="btn btn-danger trip_btn">Read more</a>
            </div>
        </div>
    </div>
</div>
<!-- Reviews -->
<div class="jumbotron" id="customers-reviews">
    <div class="row">
        <div class="center-d col-md-6 col-sm-6 col-lg-6 review_col" >
            <h2 class="section-title">Customers Reviews</h2>
        </div>
    </div>
    
    <div class="row review-div" id="review-1">
        <div class="col-sm-2">
            <img class="img-thumbnail review-avatar-img img-responsive" src="<?php echo get_template_directory_uri() . '/img/u1.jpg' ; ?>">
            <p class="avatar-name">Dloh1213</p>
        </div>
        <div class="col-sm-9">
            <h3 class="review-title"><a href="#">Beautiful shrine, truly a must see!</a></h3>
            <p class="review-p">Review of: Nikko one day trip from Tokyo ( Private Charter With English Speaking Guide)</p>
            <input type="button" class="btn btn-danger btn-review" id="review1-btn" value="Show Details">
            <p id="review-1-p" class="review-p-body">This was our second trip touring with our wonderful guide Khizer. We had arrived in to Tokyo amidst all the shutdowns surrounding CoronaVirus fears. Khizer knew what was open and sent me a list of what we could choose from for our day. We chose the Toshugu Shrine complex in Nikko and the Edo Wonderland experience for the day. Both were amazing and having Khizer there with us made it that more enjoyable. He is so kind and accommodating and even offered to help us with information beyond our last day with him. It could have been a very stressful time but he made it a memorable experience that begs for your return to experience more. Hope to see you again soon Khizer!</p>
        </div>       
    </div>

    <div class="row review-div" id="review-2">
        <div class="col-sm-2">
            <img class="img-thumbnail review-avatar-img img-responsive" src="<?php echo get_template_directory_uri() . '/img/u3.jpg' ; ?>">
            <p class="avatar-name">Supermumof3</p>
        </div>
        <div class="col-sm-9">
            <h3 class="review-title"><a href="https://www.tripadvisor.com/ShowUserReviews-g1066457-d16847878-r739271163-Live_Nippon-Shinjuku_Tokyo_Tokyo_Prefecture_Kanto.html">Amazing private tour!! Highly recommended</a></h3>
            <p class="review-p">Review of Live Nippon</p>
            <input type="button" class="btn btn-danger btn-review" id="review2-btn" value="Show Details">
            <p id="review-2-p" class="review-p-body">We had a great day with our guide khizar. We were promptly collected from our hotel. Very professional and friendly guide. Very smart and clean car. We went to mt Fuji and were given an amazing and knowledgable commentary. We were super lucky with the weather and had sensational views. We did the lake boat ride and the cable car. Then went into the smoking volcano in Hakone. It was an amazing day. I can highly recommend this company.</p>
        </div>       
    </div>

    <div class="row review-div" id="review-3">
        <div class="col-sm-2">
            <img class="img-thumbnail review-avatar-img img-responsive" src="<?php echo get_template_directory_uri() . '/img/u2.jpg' ; ?>">
            <p class="avatar-name">IdaDK12345</p>
        </div>
        <div class="col-sm-9">
            <h3 class="review-title"><a href="https://www.tripadvisor.com/ShowUserReviews-g1066457-d16847878-r750577576-Live_Nippon-Shinjuku_Tokyo_Tokyo_Prefecture_Kanto.html">Great day trip to Mt. Fuji!</a></h3>
            <p class="review-p">Review of: 1 day private charter Mt Fuji and Hakone trip with English speaking Guide</p>
            <input type="button" class="btn btn-danger btn-review" id="review3-btn" value="Show Details">
            <p id="review-3-p" class="review-p-body">We had the pleasure of having Khizar as our guide for a one day private excursion to Mount Fuji. He was an excellent guide - very attentive, experienced and knowledgeable and he gladly answered all our questions about both the area and Japanese culture etc. And he was also happy to help us out with recommendations for our upcoming stay in Kyoto. The tour was completely costumized to our wishes and pace and Khizar was able to show us a number of different locations with great views of Mount Fuji from almost every angle. The tour also including a boat tour on Lake Kawaguchiko with beautiful views of Mount Fuji. We highly recommend booking a tour with this company as this is the perfect way to experience the beautiful Mount Fuji and its surroundings. And with Khizar you are in very good hands as he will make sure you have an unforgettable day and feel very well taken care off.</p>
        </div>       
    </div>

    <div class="row review-div" id="review-4">
        <div class="col-sm-2">
            <img class="img-thumbnail review-avatar-img img-responsive" src="<?php echo get_template_directory_uri() . '/img/u4.jpg' ; ?>">
            <p class="avatar-name">TravellingTan</p>
        </div>
        <div class="col-sm-9">
            <h3 class="review-title"><a href="https://www.tripadvisor.com/ShowUserReviews-g1066457-d16847878-r748349465-Live_Nippon-Shinjuku_Tokyo_Tokyo_Prefecture_Kanto.html">Amazing Trip!</a></h3>
            <p class="review-p">Review of: 1 day private charter Mt Fuji and Hakone trip with English speaking Guide</p>
            <input type="button" class="btn btn-danger btn-review" id="review4-btn" value="Show Details">
            <p id="review-4-p" class="review-p-body">I highly recommend to get this tour specially when you want to explore some of those beautiful places around mount fuji without the hustle of joining those big bus group tour. Our tour guide/driver Zia is very friendly and informative about the details of our trip..... Definitely try to get some of their tour packages again next time i go back to japan. Thank you for this Amazing Trip! Thanks Zia!s</p>
        </div>       
    </div>
</div>
<!-- Contact Us -->
<div id="Last-Section" class="jumbotron">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-lg-4 con-text">
     <div class="row" id="why-div">
      <h1 class="text-center" id="why-title">Why Book with Us</h1>
      <p class="text-center" id="why-p">In Our Team We are Local Japanese English Speaking Staff and Native English Guide. Our Well Trained Staff will try there best to make your trip memorable. We are Serving in Tourism Industry Since 15. We Grow as the market grow.</p>
     </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-back">
        <div class="col">
          <h3 class="ptitle"><img class="img-responsive r-icon" src="<?php echo get_template_directory_uri() . '/img/r.jpg' ; ?>" alt=""/>100% Customizable</h3>
          <p class="pparag">Tell us about your trip requirement. We'll work together to customize your trip to meet your exact requirement so that you have a memorable trip.</p>
        </div>
        <div class="col">
            <h3 class="ptitle"><img class="img-responsive r-icon" src="<?php echo get_template_directory_uri() . '/img/r.jpg' ; ?>" alt=""/>No Hidden Charges</h3>
          <p class="pparag">We don't add hidden extras cost. . There are no surprises with hidden costs.</p>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-back">
        <h3 class="ptitle"><img class="img-responsive r-icon" src="<?php echo get_template_directory_uri() . '/img/r.jpg' ; ?>" alt=""/>Local Experts Japanese and English Speaking Staff</h3>
          <p class="pparag">Local Experienced friendly Staff will help you travel around Japan.</p>
        <div class="col">
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
