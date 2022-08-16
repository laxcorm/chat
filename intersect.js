
function chatAdd(id) {

    let chatbox = querySelector(".direct-chat-messages");

    let observer = new IntersectionObserver((entries, observer) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {
                /////

                $.ajax({
                    method: "get",
                    url: "current_chat.php",
                    data: { id: id },
                    cache: false,
                    dataType: "json"
                }).done(
                    function (res) {
                       
                        res.forEach(
                            element => {
                                ////
                               let speech = "<div class='direct-chat-msg' id='" + element.id + "'>" +
                                    "<div class='direct-chat-info clearfix'> <span class='direct-chat-name pull-left'>" + element.login + "</span>" +
                                    "<span class='direct-chat-timestamp pull-right'>" + element.time + "</span></div>" +
                                    // "<img class='direct-chat-img' alt='message user image'>"+
                                    "<div class='direct-chat-text'>" + element.message + "</div></div>";

                                    chatbox.append(speech);
                                id = element.id;
                                if (id == 1) {
                                    return;
                                }

                            }
                        );

                    })
            }

            observer.unobserve(entry.target);
            observer.observe(document.querySelector('.direct-chat-messages  div:last-child'));

        })
    }, {
        threshold: 1
    });

    observer.observe(document.querySelector('.direct-chat-messages  div'));
}