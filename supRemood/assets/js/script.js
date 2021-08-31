window.onscroll = ()=>{
	this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  }
  
const body = document.querySelector("body");
const navbar = document.querySelector(".nav-bar");
const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
const link1 = document.querySelector('.btn-link1');
const link2 = document.querySelector('.btn-link2');
const link3 = document.querySelector('.btn-link3');
const sidebarShow = document.querySelector(".sidebar");
const abt_btn = document.querySelector(".about-btn");

menuBtn.onclick = ()=>{
  menu.classList.add("active");
  menuBtn.classList.add("hide");
  cancelBtn.classList.add("show");
  body.classList.add("disabledScroll");
  sidebarShow.classList.toggle("show1");
}

cancelBtn.onclick = ()=>{
  menu.classList.remove("active");
  menuBtn.classList.remove("hide");
  cancelBtn.classList.remove("show");
  body.classList.remove("disabledScroll");
  sidebarShow.classList.toggle("show1");
}

link1.onclick = ()=>{
	menu.classList.remove("active");
	menuBtn.classList.remove("hide");
	cancelBtn.classList.remove("show");
	body.classList.remove("disabledScroll");
}
link2.onclick = ()=>{
	menu.classList.remove("active");
	menuBtn.classList.remove("hide");
	cancelBtn.classList.remove("show");
	body.classList.remove("disabledScroll");
}


link3.onclick = ()=>{
	menu.classList.remove("active");
	menuBtn.classList.remove("hide");
	cancelBtn.classList.remove("show");
	body.classList.remove("disabledScroll");
}

abt_btn.onclick = ()=>{
	window.location = 'index.php#cont-about';
}


  
