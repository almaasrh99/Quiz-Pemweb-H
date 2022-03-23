// jQuery(function ($) {
//   $(document).ajaxSend(function () {
//     $("#overlay").fadeIn(300);
//   });

//   $("#submit").click(function () {
//     $.ajax({
//       type: "GET",
//       success: function (data) {
//         console.log(data);
//       },
//     }).done(function () {
//       setTimeout(function () {
//         $("#overlay").fadeOut(300);
//       }, 500);
//     });
//   });
// });

$("#load").click(function () {
  $.ajax({
    url: "#",
    beforeSend: function () {
      $(".spinner").css("display", "block");
    },
    success: function (result) {
      $(".spinner").css("display", "none");
      $(".container").html(result);
    },
  });
});
