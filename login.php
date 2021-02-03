<?php include_once 'header.php'; ?>

<div class="main_content">
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link active" data-toggle="tab" href="#login">Login</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#create_account">Create Account</a>
	  </li>
	</ul>
	<div id="myTabContent" class="tab-content">
	  <div class="tab-pane fade show active" id="login">
	    <form id="login_form">
	    	<h4 class="text-primary">Login</h4>
	    	<span id="login_output"></span>
	    	Username:<input type="text" class="form-control" value="" name="login_username" placeholder="Username" autofocus="" >
	    </form>
	  </div>
	  <div class="tab-pane fade" id="create_account">
	    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
	  </div>
	</div>
</div>

<?php include_once 'footer.php'; ?>
