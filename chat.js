

$(function () {
    setInterval(function () {

        $.ajax(
            {
                method: "get",
                url: "current_chat.php",
                cache: false,
                dataType: "json"
            }
        ).done(
            function (result) {
                // вывод выбранного чата
                let dialog = "";
                if (result !== null) {
                    result.forEach(element => {
                        dialog += "<div class='direct-chat-msg' id='" + element.id + "'>" +
                            "<div class='direct-chat-info clearfix'> <span class='direct-chat-name pull-left'>" + element.login + "</span>" +
                            "<span class='direct-chat-timestamp pull-right'>" + element.time + "</span></div>" +
                            // "<img class='direct-chat-img' alt='message user image'>"+
                            "<div class='direct-chat-text'>" + element.message + "</div></div>";
                    });
                    $(".direct-chat-messages").html(dialog);
                }
                else {
                    $(".direct-chat-messages").html("<div><h2>No conversation</h2></div>");

                }
            }
        )
    }, 600);
})



$("form[name='mes_form']:not('#first')").submit(
    function (e) {
        e.preventDefault();
        let message = $("input[name='message']").val();


        //$("form[name='mes_form']")[0].reset();
        if (message !== '') {
            $.ajax(
                {
                    method: "post",
                    url: "message.php",
                    data: { message: message }
                }
            ).done(

                function () { $("form[name='mes_form']")[0].reset(); }
            )
        }
    }
)
//create table 

$(document).on("submit", "#first", function (e) {
    e.preventDefault();
    let message = $("input[name='message']").val(); 
 
    if (message!=='') {
        $.ajax(
            {

                url: "table_create.php",
                //dataType:"text"

            }
        ).done(function () {
            //let message = $("input[name='message']").val();
            $("#first")[0].reset();

            $.ajax(
                {
                    method: "post",
                    url: "message.php",
                    data: { message: message }
                }

            ).done(
                function () {
                    $("form[name='mes_form']").removeAttr('id');

                }
            )

        })
    }
})

//вывод бейджей
$(function () {
    $.ajax(
        {
            url: "last_message.php",
            dataType: "json",//пиздецццццц!!!!!!!!ПИЗДЕЦЦЦЦЦЦЦЦЦЦ ЖОПА ЖОПА ЖОПА 8 ЧАСОВ 8 ЧАСОВ
        }
    ).done(
        function (result) {
            // let bages = JSON.stringify(result);
            if (result) {
                let bages = '';
                //let obj =JSON.parse(result);
                result.forEach(element => {

                    bages += '<a href="chat" id="' + element.chat + '" class="list-group-item list-group-item-action">' +
                        '<div class="d-flex w-100 justify-content-between" style="background-color:blue;">' +
                        /* id пока не вношу */
                        '<h5 class="mb-1">' + element.login + '</h5>' +
                        '<small class="text-muted">' + element.time + '</small>' +
                        '</div><p class="mb-1">' + element.chat + '</p>' +
                        '<small class="text-muted">' + element.message + '</small></a>'
                });

                $(".col-xl-6 .list-group").html(bages);
            }

        })
})






$(document).on("click", "a[href='chat']",
    function (e) {
        e.preventDefault();

        let id = $(this).attr('id');
       
        $.ajax({
            get: "get",
            url: "change_current.php",
            data: { id: id },
            //dataType: "text"
        })/*.done(
            function (result) {
                $(".test").html(result);//просто проверка - вывод в блок тест
            }
        )*/
    }
)



/* $( "input[name='login']" ).submit(
    function () {
        let idu = $( "input[name='login']" ).attr('id');
        $.ajax(
            {
                url: "chat_search.php",
                data: { id: idu },
                dataType: "json"
            }
        ).done(
            function (result) {
                
            }
        )
    }
)

$(document).ready(
    function () {
        $.ajax(
            {
                url: "last-message.php",
               // data: { id: idu },
                dataType: "json"
            }
        )
    }

) */