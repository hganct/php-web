import { test } from "./test.js";

// var appOne = document.getElementById("miniApp1");
// var appTwo = document.getElementById("miniApp2");
// var appThree = document.getElementById("miniApp3");
// appOne.addEventListener("click", function () {
//   alert("Ứng dụng đang xây dựng");
// });
// appTwo.addEventListener("click", function () {
//   alert("Ứng dụng đang xây dựng");
// });
// appThree.addEventListener("click", function () {
//   alert("Ứng dụng đang xây dựng");
// });

test();

$(document).ready(function () {
  $("#registerForm").submit(function (event) {
    event.preventDefault();

    var username = $("#username").val();
    var password = $("#password").val();
    var email = $("#email").val();

    $.ajax({
      type: "POST",
      url: "ajax/account/AccountCreate.php",
      data: {
        username: username,
        password: password,
        email: email,
      },
      success: function (response) {
        alert(response.message);
      },
    });
  });
});
