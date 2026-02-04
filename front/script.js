const navLink = document.querySelectorAll(".nav_link");
const title = document.getElementById("title");
const anchor = document.querySelectorAll("a");
const password = document.getElementById("password");
const email = document.getElementById("email");
const connexion_btn = document.querySelector(".connexion_btn");
const connexion_background = document.querySelector(".main_connexion");
let user_data = [];

navLink.forEach((nav_e) => {
  function color() {
    anchor_list = nav_e.children;
    nav_e.style.background = "#765233";
    for (i = 0; i < 2; i++) {
      anchor_list[i].style.color = "rgb(254, 234, 210)";
    }
  }
  function colorEnd() {
    anchor_list = nav_e.children;
    nav_e.style.background = "rgb(254, 234, 210)";
    for (i = 0; i < 2; i++) {
      anchor_list[i].style.color = "#765233";
    }
  }

  nav_e.addEventListener("mouseenter", color);
  nav_e.addEventListener("mouseleave", colorEnd);
});

// form submit ----------->

function resetForm() {
  password.value = "";
  email.value = "";
}

function submitForm() {
  input_password = password.value;
  input_email = email.value;
  if (input_email != "" && input_password != "") {
    resetForm();
    user_data.push(input_email, input_password);
    return user_data;
  }
}

// connexion_btn.addEventListener("click", submitForm);

// console.log(user_data);
