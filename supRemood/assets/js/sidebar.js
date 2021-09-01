let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}



let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".logo-icon");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});


let sidebarUp = document.querySelector(".sidebar");
let arrowbtn = document.querySelector(".arrow-btn");
console.log(sidebarBtn);
arrowbtn.addEventListener("click", ()=>{
    sidebarUp.classList.toggle("down");
});

const body = document.querySelector("body");
const navbar = document.querySelector(".nav-bar");
const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
const link1 = document.querySelector('.btn-link1');
const link2 = document.querySelector('.btn-link2');
const link3 = document.querySelector('.btn-link3');
const sidebarShow = document.querySelector(".sidebar");


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


link3.onclick = ()=>{
	menu.classList.remove("active");
	menuBtn.classList.remove("hide");
	cancelBtn.classList.remove("show");
	body.classList.remove("disabledScroll");
}


window.onscroll = ()=>{
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}


