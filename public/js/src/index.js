//imports
import isMobile from 'ismobilejs';
import './scss/fim-ios-detect-pwa-public.scss';


const userAgent = window.navigator.userAgent;
const media = window.matchMedia('(display-mode: standalone)').matches;
const isIOS = isMobile(userAgent).apple.device;
const closeButton = document.getElementById('ios-pwa-cta-close');
const ios_cta = document.getElementById('ios-pwa-cta');

setTimeout(showPopup, 5 * 1000);

function showPopup(){
  if( isIOS && !media && !getCookie('ios-pwa-cta')){
    //show popup
    ios_cta.classList.add('show');

  }
}

function getCookie(cname) {
    var cookieArr = document.cookie.split(";");
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        if(cname == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}


closeButton.addEventListener("click", function () {
    ios_cta.classList.remove('show');
    var timestamp = Math.floor(Date.now() / 1000);
    setCookie('ios-pwa-cta',timestamp, 30);
});


function setCookie(cname, cvalue, exdays){
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
