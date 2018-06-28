<?php get_header(); ?>
<div class="d-block d-sm-none mobile-banner">
  <a href="tel:+792855225919" class="btn btn-sm"><span class="fa fa-phone"></span> 855-222-5919</a>
</div>
<div class="main">
  <div class="container">
    <div class="row">
      <section class="headline col-md-7 ">
        <h1 class="title">Simple, Fast & Transparent Insurance</h1>
        <p class="subtitle">We’re changing the face of insurance by merging technology,
          design and good old-fashioned insurance know-how.</p>
      </section>
      <div class="w-100"></div>
      <section class="form-section col-md-4">
        <h2>Tell us your business and we’ll get you a quote!</h2>
        <form id="subscribe-from" method="post">
          <input type="hidden" name="mc4wp-subscribe" value="1" />
          <input type="hidden" name="mc4wp-redirect" value="http://google.com" />
          <div class="form-group">
            <select class="form-control custom-select" name="mc4wp-INDUSTRY" id="selectIndustry">
              <option value="" disabled selected>Choose your industry</option>
              <option value="Accounting">Accounting</option>
              <option value="Advertising">Advertising</option>
              <option value="Associations & Clubs">Associations & Clubs</option>
            </select>
          </div>

          <div class="form-group business">
            <select class="form-control custom-select"  name="mc4wp-BUSINESS" id="selectBusiness">
              <option value="Accounting & Auditing">"Accounting & Auditing"</option>
              <option value="Bookkeepers">Bookkeepers</option>
              <option value="Financial Planners">Financial Planners</option>
            </select>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="EMAIL" id="EMAIL" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>

          <div class="d-none d-md-block">
            <p class="subtitle">Select the insurance type you're interested in</p>

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="generalCheck">
              <label class="custom-control-label" for="generalCheck">General & professional liability</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="workerCheck">
              <label class="custom-control-label" for="workerCheck">Workers' compensation</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="propertyCheck">
              <label class="custom-control-label" for="propertyCheck">Property & equipment</label>
            </div>
          </div>

          <button class="btn btn-submit btn-block" type="submit">Get Instant Quote</button>
        </form>
      </section>
   </div>
  </div>
  <div id="next-modal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="http://google.com" type="button" class="btn btn-primary">Go to Google</a>
        </div>
      </div>
    </div>
  </div>


</div>



<?php get_footer();
