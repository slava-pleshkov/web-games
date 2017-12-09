$(function() {
  var pos = 54;
  var count = 0;
  var hit = 0;

  $("#start").on("click", function() {
    hit = 10;
    $(this).attr("disabled", "true");
    var str = "";
    for (var i = 0; i < 100; i++) {
      str += "<div class='item'>" + i + "</div>";
    }

    $("#game").html(str);

    $(".item")
      .eq(pos)
      .addClass("hero");

    proverkaPos();
  });

  document.onkeydown = function() {
    var key = event.keyCode;
    if (key == 38) {
      hit--;
      $("#hit").text(hit);
      $(".item")
        .eq(pos)
        .removeClass("hero");
      pos = pos - 10;
      if (pos < 0) {
        pos = pos + 100;
      }

      $(".item")
        .eq(pos)
        .addClass("hero");
      KillEat();
    }
    if (key == 40) {
      hit--;
      $("#hit").text(hit);
      $(".item")
        .eq(pos)
        .removeClass("hero");
      pos = pos + 10;
      if (pos >= 100) {
        pos = pos - 100;
      }
      $(".item")
        .eq(pos)
        .addClass("hero");
      KillEat();
    }
    if (key == 37) {
      hit--;
      $("#hit").text(hit);
      $(".item")
        .eq(pos)
        .removeClass("hero");
      if (pos % 10 == 0) {
        pos = pos + 9;
      } else {
        pos = pos - 1;
      }
      $(".item")
        .eq(pos)
        .addClass("hero");
      KillEat();
    }
    if (key == 39) {
      hit--;
      $("#hit").text(hit);
      $(".item")
        .eq(pos)
        .removeClass("hero");
      if (pos % 10 == 9) {
        pos = pos - 9;
      } else {
        pos = pos + 1;
      }
      $(".item")
        .eq(pos)
        .addClass("hero");
      KillEat();
    }
    gameOver();
  };

  function proverkaPos() {
    var posEat = rand();
    if (posEat == pos) {
      posEat = rand();
    }
    $(".item")
      .eq(posEat)
      .addClass("eat");
  }
  // random
  function rand() {
    return Math.floor(Math.random() * 100);
  }

  function KillEat() {
    if (
      $(".item")
        .eq(pos)
        .hasClass("eat")
    ) {
      $(".item")
        .eq(pos)
        .removeClass("eat");
      count++;
      hit += 10;
      $("#hit").text(hit);
      $("#count").text(count);
      setTimeout(proverkaPos, 1000);
    }
  }
  function gameOver() {
    if (hit <= 0) {
      $("#game").html("<h1>Game over</h1>");
      hit = 0;
      $("#hit").text(hit);
      $("#start").removeAttr("disabled");
    }
  }
});
