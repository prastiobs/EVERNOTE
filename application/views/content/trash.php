<title>Trash - Evernote Web</title>
<div class="wrapper">
  <nav id="sidebar">
   	<div class="sidebar-header" style="font-size: 13px">
      <img src="<?php echo base_url() ?>assets/img/profil.png" alt="" width="28px" style="border-radius: 50%">
      <a href="main.html" style="padding-left: 5px;"><?php echo $this->session->userdata('user_mail')?></a>
    </div>
    <div class="search-bar">
      <input type="search" placeholder="Search all notes...">
      <img src="<?php echo base_url() ?>assets/img/search-icon.png" alt="">
    </div>
    <div style="padding-left: 18px">
      <a href="<?php echo base_url('home') ?>" style="color: white">
        <img src="<?php echo base_url() ?>assets/img/new-note.png" alt="" width="35px">
        New Note
      </a>
    </div>
   	<ul class="list-unstyled components">
   		<li>
   			<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <img src="<?php echo base_url() ?>assets/img/home-1.png" alt="">
          Shortcuts
        </a>
   			<ul class="collapse list-unstyled" id="homeSubmenu">
   				<li>
   					<a href="#">home1</a>
  				</li>
 				</ul> 
   		</li>	
   		<li>
   			<a href="<?php echo base_url('home') ?>">
          <img src="<?php echo base_url() ?>assets/img/home-2.png" alt="">
          All Notes
        </a>
   		</li>
  	  <li>
   			<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <img src="<?php echo base_url() ?>assets/img/home-3.png" alt="">  
          Notebooks
        </a>
   			<ul class="collapse list-unstyled" id="pageSubmenu">
   				<li>
   					<a href="<?php echo base_url('notebook') ?>">My Notebook</a>
  				</li>
   			</ul> 
   		</li>
   		<li>
   			<a href="#">
          <img src="<?php echo base_url() ?>assets/img/home-4.png" alt="">
          Shared with Me
        </a>
   		</li>
   		<li>
   			<a href="<?php echo base_url('tags') ?>">
          <img src="<?php echo base_url() ?>assets/img/home-5.png" alt="">   
          Tags
        </a>
      </li>
      <li class="active">
        <a href="">
          <img src="<?php echo base_url() ?>assets/img/home-6.png" alt="">
          Trash
        </a>
      </li>
      <li>
        <a href="#">
          <img src="<?php echo base_url() ?>assets/img/home-7.png" alt="">
          Upgrade
        </a>
      </li>
      <li style="border-top: 1px solid #ccc; margin-top: 250px">
        <a href="C_home/logout">
          Logout
        </a>
      </li>
  	</ul> 		
  </nav>
   	
  <div class="content-1">
  	<div class="subcontent-1">
      <h1>Trash</h1>
      <span>1 notes</span>
    </div>
    <div class="subcontent-1">
      <h2 style="padding-bottom: 50px;">Untitled</h2>
      <span>52 minutes ago</span>
    </div>
  </div>

  <div class="content-2">
      <div class="line">
        <img src="<?php echo base_url() ?>assets/img/home-1.1.JPG" alt="" style="border-right: 1px solid #e6e6e6; padding: 0 10px">
        <img src="<?php echo base_url() ?>assets/img/home-1.2.JPG" alt="" style="padding-left: 10px;">
        <a href="notebooks.html">My Notebook</a>
      </div>
      <div>
        <form action="">
          <div class="form-group">
            <input type="text" name="title" id="title" class="form-control" placeholder="Title" readonly style="background: transparent">
            <textarea name="notes" cols="30" rows="20" class="form-control" placeholder="Start writting, dragfiles, or chose a template" readonly style="background: transparent"></textarea>	
          </div>
        </form>
      </div>
  </div>
</div>