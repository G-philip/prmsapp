//Accordion
const accordionBtns = document.querySelectorAll(".accordion");

accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle("is-open");

    let content = this.nextElementSibling;
    console.log(content);

    if (content.style.maxHeight) {
      //this is if the accordion is open
      content.style.maxHeight = null;
    } else {
      //if the accordion is currently closed
      content.style.maxHeight = content.scrollHeight + "px";
      console.log(content.style.maxHeight);
    }
  };
});
//End Accordion


//Opening commission div (new patient)
var commission   = $('#commission');
var initial     = commission.is(':checked');
var amount_box  = $('#amount_box')[initial ? 'removeClass' : 'addClass']('d-none');
//var amount_box_input = amount_box.find('input').attr("disabled", !initial);

commission.click(function(){
  amount_box[this.checked ? 'removeClass' : 'addClass']('d-none');
  //amount_box_input.attr('disabled', !this.checked);
});
  // $(function(){
  //     $(".checkme").click(function(event){
  //       var x = $(this).is(':checked');
  //       if ( x == true) {
  //         $(this).parents(".checkbox-card").find('.passport-box').show();
  //
  //       }else{
  //         $(this).parents(".checkbox-card").find('.passport-box').hide();
  //       }
  //     });
  // });
//End Opening commission div
//get patient fetchPatientBiodata

//End patient biodata

//Greeting 1
  //let greetings = document.querySelector('.greetings'),
    //time = document.querySelector('.time');

//setInterval(setText, 1000);

//function setPrefix(hours) {

    //let prefix = '';

    //if(hours >= 12) {
        //prefix = "PM";
    //} else {
        //prefix = "AM";
    //}
    //return prefix;
//};

//function calculateHours(hours) {

    //if(hours >= 12) {
        //hours -= 12;
    //}

    //if(hours == 0) {
        //hours += 12;
    //}

    //return hours;
//};

//function addZero(minutes) {

    //if(minutes < 10) {
        //minutes = `0${minutes}`;
    //}
    //return minutes;
//}

//function setText() {

    //let today = new Date(),
        //hours = today.getHours(),
        //minutes = today.getMinutes();

    //time.textContent = `${calculateHours(hours)}:${addZero(minutes)} ${setPrefix(hours)}`;

    //if(hours >= 0 && hours < 12) {
        //greetings.textContent = 'Buenos días';
        //greetings.style.setProperty('--color', 'orange');

    //} else if(hours >= 12 && hours < 18) {
        //greetings.textContent = 'Good afternoon';
        //greetings.style.setProperty('--color', 'blue');

    //} else if(hours >= 18 && hours < 24) {

        //greetings.textContent = 'Have a good one as your taking night duties';
        //greetings.style.setProperty('--color', 'green');
    //}

    //if(minutes % 2 == 0) {
        //greetings.style.setProperty('--color', 'purple');
    //}

//};

//End Greeting 1

//Greeting 2
//var today = new Date();
//var hourNow = today.getHours();
//var greeting;

//if (hourNow > 18) {
  //greeting = 'Good Evening!';
//} else if (hourNow > 12) {
  //greeting = 'Good Afternoon!';
//} else if (hourNow > 0) {
  //greeting = 'Good Morning!';
//} else {
  //greeting = 'Welcome!';
//}

//document.getElementById("welcome-greeting").innerHTML = greeting;

//End Greeting 2
