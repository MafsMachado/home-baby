$(document).ready(function(){
  $('.btnToggle').click(function(){
    $('.navbar, .navIcons, navLinks').show();
    $('.navIcons').css('display', 'flex');
    $('.navIcons').css('flex-direction', 'column');
    $('.navIcons').css('justify-content', 'center');
    $('.navIcons').css('align-items', 'center');
    $('.navLinks').css('display', 'flex');
    $('.navLinks').css('flex-direction', 'column');
    $('.navLinks').css('justify-content', 'center');
    $('.navLinks').css('align-items', 'center');
  });

});


window.onscroll = setLogoSize;
window.onload = setLogoSize;

function setLogoSize () {
    logo = document.getElementById("logo");
    //abaixo do topo
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      logo.src="img/logoicon.png";
      logo.style.width="100px";
    }
    //no topo
    else {
        logo.src="img/fulllogo.png";
        logo.style.width=null;
    }
  }

  