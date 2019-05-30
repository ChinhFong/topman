$(document).ready(function(){
//tell you which page that you on .
var path = window.location.pathname;
if(path=='/'){
    $('#home').attr('class','active');
}else if(path=='/profile' || path=='/strategy' || path=='/management' || path=='/license'){
    $('#aboutus').attr('class','active dropdown');
}
else if(path=='/services'){
    $('#services').attr('class','active');
}
else if(path=='/recruitment'){
    $('#jobs').attr('class','active');
}
else if(path=='/processing'){
    $('#progress').attr('class','active');
}
else if(path=='/faq'){
    $('#faq').attr('class','active');
}
else if(path=='/gallery'){
    $('#photo').attr('class','active');
}
else if(path=='/contact'){
    $('#contact').attr('class','active');
}
//this part is for dynamic display what have client choose on language part Ex: if client choose english when reload page language select box will be English.
var cl = $('#locale').val();
if(cl=="en"){
  // $('.en').prop('selected','true');
  $('.localefont').css('font-family','Open Sans, sans-serif');
  $('.image-font').attr('src','img/icon-flag/english.png');
}else if(cl=="th"){
  $('.localefont').css('font-family','Open Sans, sans-serif');
  $('.image-font').attr('src','img/icon-flag/thai_flag.png');
}else if(cl=="ch"){
  $('.localefont').css('font-family','"楷体",Open Sans, sans-serif');
  $('.image-font').attr('src','img/icon-flag/chinese.png');
  document.body.style.fontFamily="'楷体'";
}else{
  $('.localefont').css('font-family','khmeroscontent');
  $('.image-font').attr('src','img/icon-flag/khmer.png');
}
//end
function setLocale(hidden,val){
    hidden.val(val);
}

$('.kh').click(function(){
  setLocale($('#locale'),'kh');
  $('.lang').submit();
});
$('.en').click(function(){
   setLocale($('#locale'),'en');
  $('.lang').submit();
});
$('.th').click(function(){
  setLocale($('#locale'),'th');
  $('.lang').submit();
});
$('.ch').click(function(){
  setLocale($('#locale'),'ch');
  $('.lang').submit();
});

});
