var welcomeText = document.querySelectorAll('#landing_text');
function displayText(){
for( var i = 0; i < welcomeText.length; i++){
	welcomeText[i].style.display = 'none';	
 }
}
function changeText(){
	setTimeout(function(){
			displayText()
      welcomeText[0].style.display = 'block';
		},)
		setTimeout(function(){
			displayText()
      welcomeText[1].style.display = 'block';
		}, 6000)
		setTimeout(function(){
			displayText()
			welcomeText[2].style.display = 'block';
		}, 9000)
		setTimeout(function(){
			changeText();
		}, 12000)
}
// changeText();
// var agent = document.getElementById('ag');
// var x1 = document.getElementById('1x');
// var statusag = document.getElementById('agent');
// var statustn = document.getElementById('tenant');
// var tenant = document.getElementById('tn');
// var sl = document.getElementById('sl');
// var tntx = document.getElementById('tntx');
// agent.addEventListener('click', function(){
// 	sl.classList.add('slide_right');
//   tntx.innerHTML = '<i class="fas fa-user"></i> agent';
//   statusag.click();
// })
// tenant.addEventListener('click', function(){
// 	sl.classList.remove('slide_right');
// 	sl.classList.add('slide_left');
//   tntx.innerHTML = '<i class="fas fa-user"></i> renter'
//   statustn.click();
// })
var m_nav = document.querySelector('#m-nav');
var m_bars = document.querySelector('#m-bars');
var m_modal = document.querySelector('#m-modal');
var nav_icon = document.querySelector('#nav-icon');
var x = 0;
m_bars.addEventListener('click', function(){
	if(x == 0){
		m_nav.style.display = 'block'
		m_modal.style.display = 'block'
		nav_icon.className = 'fas fa-times'
		x = 1
	}
	else{
		m_nav.style.display = 'none';
		m_modal.style.display = 'none';
		nav_icon.className = 'fas fa-bars'
		x = 0;
	}
})
// for passwords
var password = 'encyp';
function showOnclick(a, b){
	var a = document.getElementById(a);
	var b = document.getElementById(b);
	if(password == 'encyp'){
		a.type = 'text';
		b.className = 'fas fa-eye-slash';
		password = 'unencyp';
	}
	else{
		a.type = 'password'
		b.className = 'fas fa-eye';
		password = 'encyp';
	}
}