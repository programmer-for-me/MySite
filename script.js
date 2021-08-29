function openNav() {
  document.getElementById("nav").style.height = "100%";
}
function closeNav() {
  document.getElementById("nav").style.height = "0%";
}
let body = document.querySelector("body");
let welcome_text = document.querySelector(".welcome");
let fa_bar = document.querySelector(".fa-bars");
let logo = document.querySelector(".logo");
let bar = document.querySelector(".bar");
let sun = document.querySelector(".fa-sun");
let moon = document.querySelector(".fa-moon");
let booksGrid = document.querySelector(".booksGrid");
let Title = document.querySelectorAll(".Title"); 
let sitesList = document.querySelector(".sitesList");  
let th = document.querySelectorAll(".th");
let siteName = document.querySelectorAll(".siteName");
let siteDesc = document.querySelectorAll(".siteDesc");
let siteLink = document.querySelectorAll(".siteLink");
let formItem = document.querySelectorAll(".form-item");

let darkMode = [welcome_text, fa_bar, logo, sun, moon, booksGrid];
function mode() {
  let toggle = document.querySelector(".toggle").checked;
  if (!toggle) {
    light(toggle);
  } else {
    dark(toggle);
  }
} 
function light(toggle) {
  for (var i = 0; i < darkMode.length; i++) {
    darkMode[i].style.color = '#333'
  }
  for (var i = 0; i < Title.length; i++) {
    Title[i].style.color = '#333';
  }
  for (var i = 0; i < th.length; i++) {
    th[i].style.borderBottom = '2px solid #333';
    th[i].style.color = '#333'
  }
  for (var i = 0; i < siteName.length; i++) {
    siteName[i].style.borderBottom = '2px solid #333';
    siteName[i].style.color = '#333'
  }
  for (var i = 0; i < siteLink.length; i++) {
    siteLink[i].style.borderBottom = '2px solid #333';
  }
  for (var i = 0; i < siteDesc.length; i++) {
    siteDesc[i].style.borderBottom = '2px solid #333';
    siteDesc[i].style.color = '#333'
  }
  for (var i = 0; i < formItem.length; i++) {
    formItem[i].style.border = '2px solid #333';
    formItem[i].style.color = '#333';
    formItem[i].style.backgroundColor = '#f1f1f1';
  }
  sitesList.style.border = "2px solid #333";

  body.style.backgroundColor = "#f1f1f1";
  bar.style.backgroundColor = "#f1f1f1";
  bar.style.boxShadow = "10px 10px 10px #333";
}
function dark(toggle) {
  for (var i = 0; i < darkMode.length; i++) {
    darkMode[i].style.color = '#f1f1f1';
  }
  for (var i = 0; i < Title.length; i++) {
    Title[i].style.color = '#f1f1f1';
  }
  for (var i = 0; i < th.length; i++) {
    th[i].style.borderBottom = '2px solid #f1f1f1';
    th[i].style.color = '#f1f1f1'
  }
  for (var i = 0; i < siteName.length; i++) {
    siteName[i].style.borderBottom = '2px solid #f1f1f1';
    siteName[i].style.color = '#f1f1f1'
  }
  for (var i = 0; i < siteDesc.length; i++) {
    siteDesc[i].style.borderBottom = '2px solid #f1f1f1';
    siteDesc[i].style.color = '#f1f1f1'
  }
  for (var i = 0; i < siteLink.length; i++) {
    siteLink[i].style.borderBottom = '2px solid #f1f1f1';
  }
  for (var i = 0; i < formItem.length; i++) {
    formItem[i].style.border = '2px solid #f1f1f1';
    formItem[i].style.color = '#f1f1f1'
    formItem[i].style.backgroundColor = '#333';
  }

  sitesList.style.border = "2px solid #f1f1f1";

  body.style.backgroundColor = "#333";
  bar.style.backgroundColor = "#333";
  bar.style.boxShadow = "10px 10px 10px #f1f1f1";
}
