$(function () {
    setInterval(function () {
        $.ajax(
            "/time/ajax.php",
            {
                data: {
                    type: "getTime"
                },
                success:function (result) {
                    $(".js-result-time").text(result);
                }
            }
        );
    },800);

    $(".js-chg").on("click",function () {
        var type = $(this).data("type");
        if (type.length<=0){
            return;
        }

        $.ajax(
            "/time/ajax.php",
            {
                method:"POST",
                data: {
                    type: type,
                },
            }
        );
    });
});