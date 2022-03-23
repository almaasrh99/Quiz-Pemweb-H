$(document).ready(function () {
  $("#submitWeather").click(function () {
    var city = $("#city").val();
    if (city != "") {
      $.ajax({
        url:
          "https://api.openweathermap.org/data/2.5/weather?q=" +
          city +
          "&units=metric" +
          "&APPID=xxx",
        type: "GET",
        dataType: "jsonp",
        success: function (data) {
          var widget = show(data);
          $("#show").html(widget);
          $("#city").val("");
        },
      });
    } else {
      $("#error").html("Field cannot be empty");
    }
  });
});
function show(data) {
  return "<h3><strong>Weather</strong>: " + data.main[0].temp + "</h3>";
}
