//animate smooth scroll
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
$('#login_nav').on('click', function(){
    console.log('asdasd');
      
      document.getElementById("myForm").style.display = "block";
});

$('#btn_cancel').on('click', function(){
  document.getElementById("myForm").style.display = "none";
});