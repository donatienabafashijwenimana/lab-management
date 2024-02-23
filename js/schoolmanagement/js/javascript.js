$(document).ready(function(){
  $(".logout").hide()
  $(".nav1").click(function(){
    $(".logout").show()
  })
$(".addtrainer").click(function () {
  $("div").removeClass("active")
  $(this).addClass("active")
  $.post("addtrainer.php",
  function(data,status){
  $(".right-menu").html(data)
})
  })
  $(".addtrainee").click(function () {
  $("div").removeClass("active")
  $(this).addClass("active")
  $.post("addtrainee.php",
  function(data,status){
  $(".right-menu").html(data)
})
  })
  $(".assignmodule").click(function () {
    $("div").removeClass("active")
    $(this).addClass("active")
    $.post("addmodule.php",
    function(data,status){
    $(".right-menu").html(data)
  })
    })
    $(".addclass").click(function () {
      $("div").removeClass("active")
      $(this).addClass("active")
      $.post("addclass.php",
      function(data,status){
      $(".right-menu").html(data)
    })
      })
      $(".viewmodule").click(function () {
        $("div").removeClass("active")
        $(this).addClass("active")
        $.post("view module.php",
        function(data,status){
        $(".right-menu").html(data)
      })
        })
        $(".viewtrainee").click(function () {
          $("div").removeClass("active")
          $(this).addClass("active")
          $.post("view trainee.php",
          function(data,status){
          $(".right-menu").html(data)
        })
          })
          $(".viewtrainer").click(function () {
            $("div").removeClass("active")
            $(this).addClass("active")
            $.post("view trainer.php",
            function(data,status){
            $(".right-menu").html(data)
          })
            })
            $(".viewmarks").click(function () {
              $("div").removeClass("active")
              $(this).addClass("active")
              $.post("view marks.php",
              function(data,status){
              $(".right-menu").html(data)
            })
              })
})