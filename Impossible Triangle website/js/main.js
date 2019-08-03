//animate smooth scroll for nav contact
//#contact_nav to listen if there is a click on elemnt with this ID
//.contact_field to get position of contact section start.
//contact_pos to store position of contact section
$('#contact_nav').on('click', function () {
    const contact_pos = $('.contact_field').position().top;
    console.log(contact_pos);
    $('html, body').animate(
      {
        scrollTop: contact_pos
      },
      900
    );
});

//animate smooth scroll for nav about
//#about_nav to listen if there is a click on elemnt with this ID
//.my_about to get position of about section start.
//pos to store position of about section
$('#about_nav').on('click', function () {
  const pos = $('#my_about').position().top;
  console.log(pos);
  $('html, body').animate(
    {
      scrollTop: pos
    },
    900
  );
});

//animate smooth scroll for nav gallery
//#gallery_nav to listen if there is a click on elemnt with this ID
//#my_gallery to get position of gallery section start.
//pos to store position of gallery section
$('#gallery_nav').on('click', function () {
  const pos = $('#my_gallery').position().top;
  console.log(pos);
  $('html, body').animate(
    {
      scrollTop: pos
    },
    900
  );
});

//editing hidden style of login form to change it display property
//#login_nav to listen if there is a click on elemnt with this ID
//myForm to edit the elemnt with this ID.
$('#login_nav').on('click', function(){      
      document.getElementById("myForm").style.display = "block";
});

//editing hidden style of sign up form to change it display property
//#signup_nav to listen if there is a click on elemnt with this ID
//myForm_2 to edit the elemnt with this ID.
$('#singup_nav').on('click', function(){      
  document.getElementById("myForm_2").style.display = "block";
});

//editing displayed style of login form  to change it as hidden
//#btn_cancel to listen if there is a click on elemnt with this ID
//myForm to edit the elemnt with this ID.
$('#btn_cancel').on('click', function(){
  document.getElementById("myForm").style.display = "none";
});
//editing displayed style of sign up form  to change it as hidden
//#btn_cancel_2 to listen if there is a click on elemnt with this ID
//myForm_2 to edit the elemnt with this ID.
$('#btn_cancel_2').on('click', function(){
  document.getElementById("myForm_2").style.display = "none";
});

//animate smooth scroll for Go to Top of the page
//.go_top to listen if there is a click on elemnt with this ID
$('.go_top').on('click', function () {
  $('html, body').animate(
    {
      scrollTop: 0
    },
    900
  );
});