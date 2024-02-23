$(document).ready(function(){
    $(".search").on("input",function(){
        var a= $(this).val()
        $.post("search.php",
        {
            key:a
        },
        function(data,status){
           $(".right-menu").prepend(data)
        })
    })

    $("#edit").click(function(){
            var a= $(this).val()
            $.post("edit.php",
            function(data,status){
                $(".right-menu").prepend(data)
            })
    })
})