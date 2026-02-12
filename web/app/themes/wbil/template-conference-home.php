<?php

/**
 * Template Name: Conference Homepage
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();
	get_template_part( 'template-parts/conference', 'head'); 
?>

<main class="main container-fluid container--max pt-5">

  <section class="py-md-5">
    <div class="row">
      <div class="col-12">
        <h1 class="title">
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
    
    <div class="row">
      <div class="col-xl-8">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="row table-row py-5 mt-5">
      <div class="col-12 col-md-6 mt-auto">
        <h2 class="section-title">ATTENDEE TYPES</h2>
      </div>
    </div>

    <div class="row table-row">
      <div class="col-12 col-md-6 pt-4 pb-3">
        <div>
          <h3 class="table-title">Full Conference Pass: Access to all days</h3>
          <p>Who: Consultants, Coaches, Law Firms (with more than 5 attorneys), Corporate Legal Departments, Corporate Counsel, Legal Service Providers, Training, Goods & Services, Professional Associations, Insurance Companies</p>
        </div>
      </div>
   
      <div class="col-6 col-md text-center pt-4 pb-3">
        <div class="p-3 text-center h-100 d-flex">
          <p class="pricing m-auto">$325</p>
        </div>
      </div>
    </div>

    <div class="row table-row">
      <div class="col-12 col-md-6 py-3">
        <div>
          <h3 class="table-title">Full Conference Pass: Access to all days (Special Rate)</h3>
          <p>Who: Government, Legal Aid, Nonprofit organization staff, Bar Association Staff, Small Law Firms (under 5 attorneys), Law Schools, Lawyer Assistance Programs, State Task Force Staff, Judges</p>
        </div>
      </div>

      <div class="col-6 col-md table-background py-3">
        <div class="p-3 text-center h-100 d-flex">
          <p class="m-auto">Special Rate</p>
        </div>
      </div>
    </div>

    <div class="row table-row">
      <div class="col-12 col-md-6 pt-3">
        <div>
          <h3 class="table-title">Full Conference Pass: Access to all days</h3>
          <p>Who: Law Students</p>
        </div>
      </div>

      <div class="col-6 col-md table-background py-3">
        <div class="p-3 text-center h-100 d-flex">
          <p class="m-auto">Complimentary</p>
        </div>
      </div>
    </div>


      <div class="col-12 my-5">
        <p><a class="button" href="https://institute.lawyerwellbeing.net/events/EventDetails.aspx?id=1883680" target="_blank">Register Now</a></p>
    </div>

      <div class="row my-5 py-5">
        <div class="col-sm-4 eventbutton p-lg-5">
            <h4 class="table-title">Already have an account?</h4>
            <p>If you have joined as an IWIL Partner or have a Staff or Subscriber account please sign in.</p>
            <p><a href="https://institute.lawyerwellbeing.net/Login.aspx" target="_blank" class="formbutton">Sign In</a></p>
        </div>
        <div class="col-sm-4 eventbutton p-lg-5">
            <h4 class="table-title">My Workplace is a partner</h4>
            <p>If your firm/workplace is an IWIL Partner, please contact your well-being leader for a log-in to receive complimentary conference registration or email IWIL Admins for assistance.</p>
            <p><a href="mailto:iwil@lawyerwellbeing.net" target="_blank" class="formbutton">Email Admins</a></p>
        </div>
        <div class="col-sm-4 eventbutton p-lg-5">
            <h4 class="table-title">Make an account!</h4>
            <p>If you would like to become a Partner or Subscriber or receive a staff discount, please create an account.</p>
            <p><a href="https://institute.lawyerwellbeing.net/general/register_member_type.asp" target="_blank" class="formbutton">Register</a></p>
        </div>
    </div>
  </section>



    <?php get_template_part( 'template-parts/section', 'sponsors'); ?>

</main>



<?php 
	get_footer(); 
?>
