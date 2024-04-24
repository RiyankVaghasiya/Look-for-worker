const navlinks = document.getElementById("nav-links");
const navtoggle = document.getElementById("nav-toggle");

function addclass() {
  navlinks.classList.toggle("active");
}

$(document).ready(function () {
  $(".signin-btn").click(function (event) {
    showModal();
    event.stopPropagation();
  });
  $(".close-btn").click(function () {
    hideModal();
  });

  // Do nothing when clicking on the modal content
  $(".wrap").click(function (event) {
    event.stopPropagation();
  });
});

function showModal() {
  $("#overlay").fadeIn("slow");
  (function fun() {
    $(".login-container").css({
      top: "20%"
    });
    $(".body").css({
      overflow: "hidden"
    });
  })();
}

function hideModal() {
  $("#overlay").fadeOut("slow");
  (function fun2() {
    $(".login-container").css({
      top: "-100%"
    });
    $(".body").css({
      overflow: "auto"
    });
    $("#email").val('');
    $("#pass").val('');
  })();

}
$(document).on("click", function () {
  hideModal();
});

// register page js
$("#create-new-account").on("click", function () {
  $(".new-account-container")
    .addClass("active")
    .siblings()
    .removeClass("active");
});
$(".close-btn").on("click", function () {
  $(".new-account-container").removeClass("active");
  $("#fname").val('');
  $("#lname").val('');
  $("#email").val('');
  $("#registration_pass").val('');
  $("#registration_confirm_pass").val('');

});
$(".new-account-container").click(function (event) {
  event.stopPropagation();
});


// <!-- js validation -->

//php + js validation for not close pop up when email and pass is not correct


// categories and sub categories
$(document).ready(function () {
  $('#category-dropdown').on('change', function () {
    var category_id = this.value;
    $.ajax({
      url: "includes/sub-categories.php",
      type: "POST",
      data: {
        category_id: category_id
      },
      cache: false,
      success: function (result) {
        $("#sub-category-dropdown").html(result);
      }
    });
  });
});


//check for pass and confirm pass

function validateForm() {

  var password = document.getElementById("passwords").value;
  var confirmPassword = document.getElementById("confirm_pass").value;

  if (password != confirmPassword) {
    alert("Passwords do not match in confirm password");
    return false;
  }
  return true;

}

