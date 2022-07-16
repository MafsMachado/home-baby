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