jQuery(document).ready(function ($) {
  var numbers = $(".hiddenNumber");

  var num1 = numbers[0].innerText;
  var num2 = numbers[1].innerText;
  var num3 = numbers[2].innerText;
  var num4 = numbers[3].innerText;

    // init controller
  var controller = new ScrollMagic.Controller();

  // build scene
  var scene1 = new ScrollMagic.Scene({
    triggerElement: ".num1",
    reverse: false,
  })
    .setClassToggle(".num1", "visible") // add class to reveal
    .addTo(controller)
    //.addIndicators() // add indicators (requires plugin)
    .on("start", function (e) {
      $("#num1").numScroll({
        number: num1
      });
    })

    var scene2 = new ScrollMagic.Scene({
      triggerElement: ".num2",
      reverse: false,
    })
      .setClassToggle(".num2", "visible") // add class to reveal
      .addTo(controller)
      //.addIndicators() // add indicators (requires plugin)
      .on("start", function (e) {
        $("#num2").numScroll({
          number: num2
        });
      })

    var scene3 = new ScrollMagic.Scene({
      triggerElement: ".num3",
      reverse: false,
    })
      .setClassToggle(".num3", "visible") // add class to reveal
      .addTo(controller)
      //.addIndicators() // add indicators (requires plugin)
      .on("start", function (e) {
        $("#num3").numScroll({
          number: num3
      });
    })

    var scene4 = new ScrollMagic.Scene({
      triggerElement: ".num4",
      reverse: false,
    })
      .setClassToggle(".num4", "visible") // add class to reveal
      .addTo(controller)
      //.addIndicators() // add indicators (requires plugin)
      .on("start", function (e) {
        $("#num4").numScroll({
          number: num4
      });
    })
});
