<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">VBWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <?php
        //Start the session
        session_start();
        //Include the users file
        include_once 'users.php';

        //Echo out dashboard link
        //Check if current file is index and echo out an active link if it is
        if ($currFile == "index") { echo "<li class='nav-item active'>"; }
        //Echo out inactive link if it is not
        else { echo "<li class='nav-item'>"; }
        echo "<a class='nav-link fas fa-tachometer-alt content_center' href='index.php'><br>Dashboard</a>";
        echo "</li>";

        //Echo out virtual machines link
        //Check if current file is virtual_machines and echo out an active link if it is
        if ($currFile == "virtual_machines") { echo "<li class='nav-item active'>"; }
        //Echo out inactive link if it is not
        else { echo "<li class='nav-item'>"; }
        echo "<a class='nav-link fas fa-hdd content_center' href='#'><br>Virtual Machines</a>";
        echo "</li>";

        //Echo out service list link
        //Check if current file is service_list and echo out an active link if it is
        if ($currFile == "service_list") { echo "<li class='nav-item active'>"; }
        //Echo out inactive link if it is not
        else { echo "<li class='nav-item'>"; }
        echo "<a class='nav-link fas fa-concierge-bell content_center' href='#'><br>Services</a>";
        echo "</li>";

        //Check if user has permissions to view account manager link
        if (check_permissions(100) == 0) {
          //Echo out account manager link
          //Check if current file is account_manager and echo out an active link if it is
          if ($currFile == "account_manager") { echo "<li class='nav-item active'>"; }
          //Echo out inactive link if it is not
          else { echo "<li class='nav-item'>"; }
          echo "<a class='nav-link fas fa-users content_center' href='user_manager.php'><br>Accounts</a>";
          echo "</li>";
        }

        //Echo out about link
        //Check if current file is about and echo out an active link if it is
        if ($currFile == "about") { echo "<li class='nav-item active'>"; }
        //Echo out inactive link if it is not
        else { echo "<li class='nav-item'>"; }
        echo "<a class='nav-link fas fa-info-circle content_center' href='#'><br>About</a>";
        echo "</li>";
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="fas fa-sign-out-alt" style="color: #f0ad4e" href="users.php?logout=1"> Logout</a>
    </form>
  </div>
</nav>
