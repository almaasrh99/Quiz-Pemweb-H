$(document).ready(function () {
  $.fancyMessenger({
    onSend: function (obj) {
      // Send your message here.
      console.log($(obj).find("textarea").val());
      return true;
    },
    available: {
      fromHour: 8,
      untilHour: 16,
    },
  });
});
