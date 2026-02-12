
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Raleway:wght@700&display=swap" rel="stylesheet">

<style>

.modal-header .close {
  position: absolute;
  top: 40px;
  right: 10px; 
  z-index: 99999999;
}

#phantom {
 display: none!important;
}
.modal, .banner {
  font-family: 'Inter', sans-serif;
}

.modal-header { 
  background: #efefef;
  color: #762F6A;
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1.5px;
  line-height: 100%;
  text-align: left;
  font-weight: 400;
  border: none; 
}

.modal-header * {
	margin: 0;
	padding: 0; 
}

.modal-dialog {
  max-width: 720px;
}

.modal-body h3 {
  color: #0B9DBC;
  font-size: 54px;
  font-family: 'Raleway', sans-serif;
  line-height: 90%;
  text-align: left; 
}

.modal-date {
color: #f3943f;
  font-size: 32px;
  text-transform: uppercase;
  text-align: left; 
  font-weight: 400;
}

.modal-tagline {
  color: #4ABA77;
  font-weight: 600;
  text-transform: uppercase; 
  margin-top: 10px;
  font-size: 23px;
  text-align: left; 
}

.modal-strong {
  font-weight: 800; 
  display: block;
}

.modal-footer {
	background-color: #0B9DBC;
	background-repeat: no-repeat;
  	background-position: bottom left;
  	background-size: contain;
  color: #FFFFFF;
  text-align: left;
}

.modal-button {
	background: rgb(70, 67, 140);
  color: #FFFFFF;
    font-family: 'Inter', sans-serif;
	font-weight: 800;
  outline: none;
  border: none;
  box-shadow: 0 7.5px 0 rgba(0,0,0,0.2);
  padding: 19px 38px;
  white-space: nowrap;
}


.banner {
  /* display: none; */
  position: fixed;
  top: 0; 
  left: 0; 
  width: 100%;
  height: 90px;
  padding-left: 20px;
  z-index: 999; 
  background-color: #0B9DBC; 
  overflow: hidden;
}

.banner * {
	position: relative; 
  	z-index: 1; 
}

.banner-strong {
    font-weight: 800; 
}

.banner-button {
	background: rgb(70, 67, 140);
  color: #FFFFFF;
    font-family: 'Inter', sans-serif;
	font-weight: 800;
  outline: none;
  border: none;
  box-shadow: 0 7.5px 0 rgba(0,0,0,0.2);
  padding: 15px 30px;
}

.banner-button:hover, .modal-button:hover{
  	color: #FFFFFF;
  	background: #57194D;
    box-shadow:none;
  	text-decoration: none; 
}

#conference-modal .close-modal  {
  display: none; 
 }

.banner-date {
  color: white;
}

@media screen and (min-width: 768px) {
  
  .banner {
    display: block;
    padding-left: 100px; 
    border-right: 8px solid #f3943f;
    background-image: url(https://lawyerwellbeing.net/wp-content/uploads/2024/03/wbil-logo-shadow.png);
    background-position: left center;
    background-size: contain;
    background-repeat: no-repeat;
    background-color: #0B9DBC; 
  }
  
  html {
	  margin-top: 90px!important;
	}
  
  .banner-title {
	  font-size: 24px;
  	color: white;
  	font-weight: 600;
    margin-bottom: 0; 
    display: block;
	}
  
  .banner-date {
  	font-size: 18px;
  	text-transform: uppercase; 
  	margin-bottom: 0; 
  	position: relative; 
    display: block; 
  }
  
  .banner-end {
    position: relative; 
	  background: rgb(164, 48, 141);
    /* background-image: url('data:image/svg+xml,<svg width="777" height="89" viewBox="0 0 777 89" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M164.688 0L75.5 62.3173L0.0994263 0H164.688Z" fill="%23B2D465"/><path fill-rule="evenodd" clip-rule="evenodd" d="M37.312 89H777V0H164.688L37.312 89Z" fill="%234ABA77"/></svg>'); 
    background-repeat: no-repeat;
    background-position: left center; 
    background-size: cover;  */
    padding: 0 20px;
  }

  .banner-end::before {
    content: '';
    position: absolute;
    top: -5px;
    left: -50px;
    width: 100px;
    height: 100px;
    background: #0B9DBC; 
    transform: rotate(45deg);

  }

  .banner-tagline {
    display: none; 
  }
}


@media screen and (min-width: 1024px) {
  
 

  .banner-title {
    font-size: 32px;
	}
  
  .banner-date {
  	font-size: 20px;
	}

  .banner-end {
    padding-left: 125px;
  }
  
  .modal-footer-text {
    font-size: 30px;
    line-height: 100%;
    padding-right: 50px;
    margin-bottom: 0; 
    display: block; 
  }
}

@media screen and (min-width: 1200px) {
   .banner-tagline {
      font-size: 24px;
      display: block;
      color: #FFFFFF;
      font-weight: 400;
      text-shadow: 0 0 6px rgba(0,0,0,0.2);
      margin-bottom: 0; 
  }
}

@media screen and (min-width: 1600px) {

  .banner-title {
      font-size: 40px;
    	display: inline-block;
  }
  
  .banner-date {
  	font-size: 24px;
    display: inline-block;
  }
  
    .banner-date::before {
	content: '|';
  	color: #4F8297;
  	font-weight: 400;
  	padding-right: 20px;
    padding-left: 20px;
	}
}

.overflow-visible {
    overflow: visible!important; 
  }

</style>

<script>

jQuery(document).ready(function() {  
  
  if (sessionStorage.getItem("show-modal") != 0) {
      sessionStorage.setItem("show-modal", 0);
    jQuery('#conference-modal').modal('show');
  }
  
  jQuery('body').on('click', '[data-dismiss="modal"]', function() {
    jQuery('#conference-modal').modal('hide');
    jQuery('.modal').addClass('hidden'); 
    jQuery('body').addClass('overflow-visible');
    jQuery('html').addClass('overflow-visible');
    jQuery('.jquery-modal').remove();
    sessionStorage.setItem("show-modal", 0);
  });
}); 
</script>

<div class="modal" tabindex="-1" role="dialog" id="conference-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-0">
        <div class="row gx-0 w-100">
          <div class="col-auto p-2 text-white" style="background: #f3943f">
            Stay Strong
          </div>
          <div class="col-auto p-2 text-white" style="background: rgb(58, 173, 220)">
          Align
          </div>
          <div class="col-auto p-2 text-white" style="background: rgb(164, 48, 141)">
            Engage & Grow
          </div>
          <div class="col-auto p-2 text-white" style="background: rgb(70, 67, 140)">
            Connect
          </div>
          <div class="col-auto p-2 text-white" style="background: rgb(37, 164, 101)">
          Feel Well
          </div>
</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body py-5">
		<div class="row">
			<div class="col">
              <h3 class="mt-3">Well-Being Week In Law</h3>
              <p class="modal-date">May 5-9, 2025</p>
			</div>
			<div class="col-auto">
              <img src="https://lawyerwellbeing.net/wp-content/uploads/2024/03/wbil-logo-shadow.png" alt="Well-Being Week In Law, May 6-10 2024" width="190px" class="img-fluid"/>

			</div>
		</div>

      </div>
      <div class="modal-footer">
        <p class="modal-footer-text"><strong>REGISTRATION</strong> IS NOW OPEN!</p>
        <a href="/well-being-week-in-law/register/" class="modal-button" >Register Now</a>
      </div>
    </div>
  </div>
</div>

<div class="banner">
	<div class="row h-100 mx-0">
		<div class="col-auto my-auto px-0">
          <h3 class="banner-title">Well-Being Week In Law</h3>
          <p class="banner-date">May 5-9, 2025</p>
        </div>
		<div class="ml-auto col-auto h-100 px-0">
			<div class="banner-end h-100">
				<div class="row h-100">
					<div class="ml-auto col-auto my-auto ">
                      <p class="banner-tagline"><span classs="banner-strong">REGISTRATION</span> IS NOW OPEN!</p>
                  	</div>
                    <div class="col-auto my-auto my-auto ">
                      <a href="/well-being-week-in-law/register/" class="banner-button" >Register Now</a>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>