$(document).ready(function () {

    const options = {
        root: document.querySelector('.direct-chat-messages'),
        threshold: 1
    }

    let target = document.querySelector('.direct-chat-messages > .direct-chat-msg:last-child');
   // let lastId = $('.direct-chat-messages > .direct-chat-msg:last-child').attr('id');
    let callback = function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {

                $("#doit").innerText("DpOt");
                /* $.ajax(
                    {
                        method: "get",
                        url: "current_chat.php?id=" + lastId,
                        cache: false,
                        //  data: { id: lastId },
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
                ) */


            }
        }
        )
    }

    let observer = new IntersectionObserver(callback, options);

    observer.observe(target);

});

