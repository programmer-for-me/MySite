function openNav() {
  document.getElementById("nav").style.height = "100%";
}
function closeNav() {
  document.getElementById("nav").style.height = "0%";
}
function mode() {
  let toggle = document.querySelector(".toggle").checked;
  if (!toggle) {
    light(toggle);
  } else {
    dark(toggle);
  }
} 
function light(toggle) {
  let body = document.querySelector("body");
  let welcome_text = document.querySelector(".welcome");
  let fa_bar = document.querySelector(".fa-bars");
  let logo = document.querySelector(".logo");
  let bar = document.querySelector(".bar");
  let sun = document.querySelector(".fa-sun");
  let moon = document.querySelector(".fa-moon");
  let booksGrid = document.querySelector(".booksGrid");
  let Title = document.querySelectorAll(".Title");

  let darkMode = [welcome_text, fa_bar, logo, sun, moon, booksGrid];
  for (var i = 0; i < darkMode.length; i++) {
    darkMode[i].style.color = '#333'
  }
  for (var i = 0; i < Title.length; i++) {
    Title[i].style.color = '#333';
  }

  body.style.backgroundColor = "#f1f1f1";
  bar.style.backgroundColor = "#f1f1f1";
  bar.style.boxShadow = "10px 10px 10px #333";
}
function dark(toggle) {
  let body = document.querySelector("body");
  let welcome_text = document.querySelector(".welcome");
  let fa_bar = document.querySelector(".fa-bars");
  let logo = document.querySelector(".logo");
  let bar = document.querySelector(".bar");
  let sun = document.querySelector(".fa-sun");
  let moon = document.querySelector(".fa-moon");
  let booksGrid = document.querySelector(".booksGrid");
  let Title = document.querySelectorAll(".Title");   

  let darkMode = [welcome_text, fa_bar, logo, sun, moon, booksGrid];
  for (var i = 0; i < darkMode.length; i++) {
    darkMode[i].style.color = '#f1f1f1';
  }
  for (var i = 0; i < Title.length; i++) {
    Title[i].style.color = '#f1f1f1';
  }

  body.style.backgroundColor = "#333";
  bar.style.backgroundColor = "#333";
  bar.style.boxShadow = "10px 10px 10px #f1f1f1";
}
