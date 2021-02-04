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
        echo "<a class='nav-link' href='index.php'>Dashboard</a>";
        echo "</li>";

        //Echo out virtual machines link
        //Check if current file is virtual_machines and echo out an active link if it is
        if ($currFile == "virtual_machines") { echo "<li class='nav-item active'>"; }
        //Echo out inactive link if it is not
        else { echo "<li class='nav-item'>"; }
        echo "<a class='nav-link' href='#'>Virtal Machines</a>";
        echo "</li>";

        //Echo out service list link
        //Check if current file is service_list and echo out an active link if it is
        if ($currFile == "service_list") { echo "<li class='nav-item active'>"; }
        //Echo out inactive link if it is not
        else { echo "<li class='nav-item'>"; }
        echo "<a class='nav-link' href='#'>Service List</a>";
        echo "</li>";

        //Check if user has permissions to view account manager link
        if (check_permissions(100) == 0) {
          //Echo out account manager link
          //Check if current file is account_manager and echo out an active link if it is
          if ($currFile == "account_manager") { echo "<li class='nav-item active'>"; }
          //Echo out inactive link if it is not
          else { echo "<li class='nav-item'>"; }
          echo "<a class='nav-link' href='user_manager.php'>Account Manager</a>";
          echo "</li>";
        }

        //Echo out about link
        //Check if current file is about and echo out an active link if it is
        if ($currFile == "about") { echo "<li class='nav-item active'>"; }
        //Echo out inactive link if it is not
        else { echo "<li class='nav-item'>"; }
        echo "<a class='nav-link' href='#'>About</a>";
        echo "</li>";
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-warning" href="users.php?logout=1">Logout</a>
    </form>
  </div>
</nav>
