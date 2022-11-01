const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = '#cbc0d3';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'whitesmoke';
        body.style.transition = '2s';
    }
});
const kotak4 = document.getElementById("koTak4");
kotak4.style.background = '#f092a5';

kotak4.addEventListener('mouseenter', function(){
    kotak4.style.background = '#b196c1';
})

kotak4.addEventListener('mouseout', function(){
    kotak4.style.background = '#f092a5';
})

const igLogo = document.getElementById("igLogo");
igLogo.style.color = 'whitesmoke';
igLogo.style.fontSize = '15px';

const uname = document.getElementById("uname");
uname.style.color = 'whitesmoke';
uname.style.fontSize = '20px';

const waLogo = document.getElementById("waLogo");
waLogo.style.color = 'whitesmoke';
waLogo.style.fontSize = '15px';

const waNo = document.getElementById("waNo");
waNo.style.color = 'whitesmoke';
waNo.style.fontSize = '14px'

const emailLogo = document.getElementById("emailLogo");
emailLogo.style.color = 'whitesmoke';
emailLogo.style.fontSize = '15px';

const email = document.getElementById("email");
email.style.color = 'whitesmoke';
email.style.fontSize = '17px';

const locLogo = document.getElementById("locLogo");
locLogo.style.color = 'whitesmoke';
locLogo.style.fontSize = '15px';

const loc = document.getElementById("loc");
loc.style.color = 'whitesmoke';
loc.style.fontSize = '17px';

const foto = document.getElementById("foto2");

foto.addEventListener('click', function(){
    foto.src = "https://i.pinimg.com/564x/28/5a/37/285a37fe3cd8e83f9be0a088b231868d.jpg";
})

foto.addEventListener('dblclick', function(){
    foto.src = "https://i.pinimg.com/564x/4f/7f/94/4f7f94271d808178ea7a4e2e6800488e.jpg";
})
