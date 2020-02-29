<?php include('header.php'); ?>
<section class="jumbotron-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1><span>Listified</span> is a classified portal<br>
          for buying and selling your products</h1>
      </div>
    </div>
  </div>
</section>
<section class="search-keywords">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-10">
        <div class="keyword-form">
          <div class="row">
            <div class="col-sm-5">
              <label class="label-control">Search Keywords</label>
              <input type="text" class="text-k-control" placeholder="Enter Keywords">
            </div>
            <div class="col-sm-5">
              <label class="label-control">Location</label>
              <select class="select-k-control">
                <option>Select</option>
                <option selected>Lucknow</option>
              </select>
            </div>
            <div class="col-sm-2">
              <button class="btn-search" type="submit">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="category-section-h">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="all-category-h owl-carousel">
          <div class="cat-links"> <a href="#"> <img src="images/icons/electronics.png" class="img-fluid"> <span>Electronics</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/cars.png" class="img-fluid"> <span>Cars</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/animals.png" class="img-fluid"> <span>Animals</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/fashion.png" class="img-fluid"> <span>Fashion</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/furniture.png" class="img-fluid"> <span>Furniture</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/jobs.png" class="img-fluid"> <span>Jobs</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/matrimonials.png" class="img-fluid"> <span>Matrimonials</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/mobile.png" class="img-fluid"> <span>Mobile</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/real-estate.png" class="img-fluid"> <span>Real Estate</span> </a> </div>
          <div class="cat-links"> <a href="#"> <img src="images/icons/service.png"class="img-fluid"> <span>Services</span> </a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="featured-ads top-extra-space">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading-m">
          <h4>Featured Ads</h4>
          <p>Explore the greates places in the city.</p>
        </div>
      </div>
    </div>
    <div class="row">
		<?php for ($x = 0; $x <= 3; $x++) {?>
      <div class="col-sm-3">
        <div class="ad-list-main">
          <div class="ad-img"> 
			  <img class="img-fluid rounded-top" src="images/ad.png" alt="Ad">
              <div class="ad-new"> <a href="#"> New </a> </div>
          </div>
          <div class="ad-text">
            <div class="text-top">
              <div class="heading"> <a href="#">Blue Tshirt</a> </div>
            </div>
            <div class="text-stars">
              <p>Fashion Sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
		    </div>
			  <div class="ad-bottom">
			  	<i class="fas fa-map-marker"></i> Mumbai, India
			  </div>
          </div>
        </div>
      </div>
		<?php }?>
    </div>
  </div>
</section>
<section class="fresh-ads">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading-m">
          <h4>Fresh Recommendations</h4>
          <p>Explore the greates places in the city.</p>
        </div>
      </div>
    </div>
    <div class="row">
		<?php for ($x = 0; $x <= 7; $x++) {?>
      <div class="col-sm-3">
        <div class="ad-list-main">
          <div class="ad-img"> 
			  <img class="img-fluid rounded-top" src="images/ad.png" alt="Ad">
              <div class="ad-new"> <a href="#"> New </a> </div>
          </div>
          <div class="ad-text">
            <div class="text-top">
              <div class="heading"> <a href="#">Blue Tshirt</a> </div>
            </div>
            <div class="text-stars">
              <p>Fashion Sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
		    </div>
			  <div class="ad-bottom">
			  	<i class="fas fa-map-marker"></i> Mumbai, India
			  </div>
          </div>
        </div>
      </div>
		<?php }?>
		<div class="col-sm-12 mt-20 text-center">
			<a href="#" class="show-all-ads">Show All</a>
		</div>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>