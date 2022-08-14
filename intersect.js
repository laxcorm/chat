$(document).ready(function () {

    //    let chatbox = document.querySelector('.direct-chat-messages');


    // функция создания элемента списка
    function createRed() {
        divred = document.createElement('div')
        divred.innerHTML = `${++n} item`;
        divred.classList.add("divred");
        chatbox.append(divred);
    }

    function chatAdd() {
        let child = document.querySelector('.direct-chat-messages  div:last-child');
        let id = child.getAttribute('id');

        $.ajax(
            {
                method: "get",
                url: "current_chat.php",
                cache: false,
                dataType: "json",
                data: { id: id }
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
                    $(".direct-chat-messages").append(dialog);
                }
                // else {
                //     $(".direct-chat-messages").html("<div><h2>No conversation</h2></div>");

                // }
            }
        )

    }






    let observer = new IntersectionObserver((entries, observer) => {
        
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                chatAdd()
            }
            observer.unobserve(entry.target)
            observer.observe(document.querySelector('.direct-chat-messages  div:last-child'))
        })
    }, {
        threshold: 1
    })

    observer.observe(document.querySelector('.direct-chat-messages div'))

});

