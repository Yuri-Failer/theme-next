import $ from 'jquery';

export default class SubscribeForm {
  constructor() {
    this.form = $('#subscribe-from');
    this.el = $('#selectIndustry');
    this.subjectEl = $('#selectBusiness');
    this.options = {
      'Advertising': [
        "Accounting & Auditing",
        "Bookkeepers",
        "Financial Planners"
      ],
      'Associations & Clubs' : [
        "Advertising Agencies",
        "Radio & TV",
        "Internet and media company"
      ],
      'Accounting': [
        "Alumni Association",
        "Business Association",
        "Golf club",
        "Very Expensive Car Lovers Club"
      ]
    };
    this.initSelect();
  }

  initSelect() {

    $(this.el).change( event => {
      //Get selected item.
      let selectedItem = $(event.target).find(":selected").text();

    // Reset business dropdown list.
    this.subjectEl.empty();

    // Fill new items
    this.options[selectedItem].map( item => {
      this.subjectEl.append(`<option value="${item}">${item}</option>`);
  });

    // Show in form
    this.subjectEl.parent().show(300);
  });

    $(this.form).submit( event => {
      // Stop submissions
      event.preventDefault();

    //Send  data to back
    $.ajax({
      type: 'post',
      url: '/',
      data: $('#subscribe-from').serialize(),
      // Only check in console it has been sent.
      success: () => console.log('Email has been sent!'),
  });

    // Open Modal.
    $("#next-modal").modal('show')

  });
  }
}
