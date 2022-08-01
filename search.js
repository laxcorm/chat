/* $('input').on("focus", function () {
    setInterval(function () {
        let login = $('input').val();
        $.ajax({
            url: "members_list.php",
            data: { login: login },
            dataType: "json"
        }).done(
            function (result) {
                let list = "";
                result.forEach(element => {
                    list = list + '<button type="button" class="list-group-item list-group-item-action" id="' + element.id + '">' +
                        element.login + '</button>'
                });
                $(".list-group").append(list);
            })
    }, 10);
})

$("button.list-group-item").click(function () {
    $("form.d-flex input").val($(this).text()).attr("id", $(this).attr('id'))
})

$("form.d-flex input").on('input',
    function () {
        let id = $(this).attr('id');
        $.ajax(
            {
                url: "chat.php?=" + id,
                dataType: "json"
            }
        ).done(
            function (result) {
                let chat ='';
                result.forEach(element => {
                    chat = chat +  '<div class="direct-chat-msg">' +
                        '<div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">' + element.login + '</span>' +
                        '<span class="direct-chat-timestamp pull-right">' + element.time + '</span>' +
                        '</div> <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">' +
                        '<div class="direct-chat-text" id="' +element.id + '">' + element.message +'</div></div>'
                });
                $(".box-body").append(chat);
            }
        )
    }
) */


/*
на случай создания таблицы при onclick
function tableCreate() {
    let id = $('form.d-flex input').attr('id');

    $.ajax(
        {
            url: "table_create.php",
            data: { id: id },
        }
    )

  //  $( "input[name='message']" ).removeAttr("onclick");//внести на первый месседж
}
*/
function chat(id) {
    $.ajax(
        {
            url: "chat_user.php",
            data: { id: id },
            dataType: "text"
        }
    ).done(
        function (result) {
            if (result == "first") {
              
                $( "form[name='mes_form']").attr('id',result);
                $("input[name='message']").val($( 'form[name="mes_form"]').attr('id'));
                // $('a[href="chat"]').click(function (e) { 
                //     e.preventDefault();
                //     $('input[name="message"]').removeAttr('value');
                //  })
            }


            /* else {
                $(".direct-chat-messages").html(result);
            } */
        }
    )
}



    
    let setIn;
    
    $("form.d-flex input").on("focus",function () {
        setIn = setInterval(function () {
            if ($("form.d-flex input").val() != false) {
                let log = $('input').val();
                $.ajax({
                    url: "members_list.php",
                    data: { login: log },
                    dataType: "json"
                }).done(
                    function (result) {
                        if (result) {
                            let list = '';
                            result.forEach(element => {
                                list += '<button id="'+element.id + '" type="button" class="list-group-item list-group-item-action">' +element.login+'</button>';
                            });
                            $("form~div.list-group").html(list);
                        }
                        //тут путаница
                        $("button.list-group-item").on('click', function (e) {
                            e.preventDefault();
                            $('form.d-flex input').val($(this).text());
                            $('form.d-flex input').attr('id', $(this).attr('id'));// возможно брать из сессии id а не так
                          
                            chat($(this).attr('id'));
                           
                            $("button.list-group-item").remove();
                        })
                        
                    }
                )
            } else {
                $('button.list-group-item').remove();
            }
        }, 500);
    });
    
    $('form.d-flex input').focusout(function () { clearInterval(setIn) });

