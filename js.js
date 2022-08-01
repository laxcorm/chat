
function(){
    let member = $("#search").value();
    $.ajax(
        {
            "url": "members_list.php?member="+member,
            "type": "get",
            "datatype": "text"
        }).done(function (result) { }

        );

}

$('#send').click(
    function () {
        let message = $('message').value();
        $.ajax(
            {
                "url": "message.php",
                "type": "post",
                "text": message,
                "datatype": "text"
            }
        ).done(
            function () {

            }
        )
    }
)


function chats_list(result) {
    let list = '<div class="list-group">';
    result.forEach(element => {
        list = list + '<a href="#" class="list-group-item list-group-item-action active">' +
            '<div class="d-flex w-100 justify-content-between"><h5 class="mb-1">List group item heading</h5>' +
            '<small>3 days ago</small></div><p class="mb-1">Some placeholder content in a paragraph.</p><small>And some small print.</small></a>';
    });
    list + '</div>';
}


$(document).ready(
   function chats() {
        $.ajax(
            {
                "url": "chats.php",
                "type": "get",
                "datatype": "json"
            }
        ).done(
            chats_list(result)
        )
    }
)