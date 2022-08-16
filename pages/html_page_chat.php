<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../chat_styles.css">
  <title>login</title>
  <!-- <script src="test.js"></script> -->
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xl-3">
        <?= $_SESSION['user']['login']; ?>
        <div class="test"></div>
      </div>
      <div class="col-xl-3"><?php var_dump($_SESSION['chats']);
                            echo $_SESSION['current_chat'] ?? false ?></div>
      <div class="col-xl-3">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="login" autocomplete="off">
        </form>
        <div class="list-group">

          <!-- <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
            The current button
          </button>
          <button type="button" class="list-group-item list-group-item-action" >A second item</button>
          <button type="button" class="list-group-item list-group-item-action">A third button item</button>
          <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
          <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button> -->
        </div>
      </div>
      <div class="col-xl-3"><a class="nav-link" href="/logout">Logout</a></div>
    </div>
    <div class="row">
      <div class="col-xl-6">
        <div class="list-group">
          <!-- <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small>3 days ago</small>
            </div>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small>And some small print.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small class="text-muted">And some muted small print.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">

            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small class="text-muted">And some muted small print.</small>
            <span class="badge bg-primary rounded-pill">14</span>
          </a> -->
        </div>
      </div>
      <div class="col-xl-6">

        <div class="box-body">
          <div class="direct-chat-messages">
            <!-- <div class="direct-chat-msg">
              <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Timona Siera</span>
                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
              </div> <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">
              <div class="direct-chat-text"> For what reason would it be advisable for me to think about business
                content? </div>
            </div>
            <div class="direct-chat-msg right">
              <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
              </div> <img class="direct-chat-img" src="https://img.icons8.com/office/36/000000/person-female.png" alt="message user image">
              <div class="direct-chat-text"> Thank you for your believe in our supports </div>
            </div>
            <div class="direct-chat-msg">
              <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Timona Siera</span>
                <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
              </div> <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">
              <div class="direct-chat-text"> For what reason would it be advisable for me to think about business
                content? </div>
            </div>
            <div class="direct-chat-msg right">
              <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
              </div> <img class="direct-chat-img" src="https://img.icons8.com/office/36/000000/person-female.png" alt="message user image">
              <div class="direct-chat-text"> I would love to. </div>
            </div> -->
          </div>
        </div>
        <div class="box-footer">
          <form name="mes_form">
            <div class="input-group"> <input type="text" name="message" placeholder="Type Message ..." class="form-control"> <span class="input-group-btn"> <button type="submit" class="btn btn-warning btn-flat">Send</button> </span> </div>
          </form>
        </div>
      </div>

    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../search.js" defer></script>
  <!-- <script src="../intersect.js" defer></script> -->
  <script src="../chat.js" defer></script>

</body>

</html>