<title>Tags - Evernote Web</title>
<div class="wrapper">
  <nav id="sidebar">
   	<div class="sidebar-header" style="font-size: 13px">
      <img src="<?php echo base_url() ?>assets/img/profil.png" alt="" width="28px" style="border-radius: 50%">
      <a href="#" style="padding-left: 5px;"><?php echo $this->session->userdata('user_mail')?></a>
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
   		<li class="active">
   			<a href="<?php echo base_url('tags') ?>">
          <img src="<?php echo base_url() ?>assets/img/home-5.png" alt="">   
          Tags
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('trash') ?>">
          <img src="<?php echo base_url() ?>assets/img/home-6.png" alt="">
          Trash
        </a>
      </li>
      <li>
        <a href="">
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

  <div class="container content-2">
    <div class="content-3">
        <div class="row" style="border-bottom: 2px solid #333; padding-bottom: 25px">
            <h1>Tags</h1>
            <div class="search-bar my-0" style="position: absolute; right: 50px;">
                <input style="background-color: transparent; border: 1px solid #ccc; color: #333" type="search" placeholder="Find Tags...">
            </div>
        </div>
        <div style="position: absolute; top: 80px; right: 50px; color: #00a82d; font-size: 14px; cursor: pointer; font-weight: 500">
            New Tag
        </div>
        <div class="text-center" style="margin-top: 20px">
            <img src="<?php echo base_url() ?>assets/img/tags.png" alt="" style="margin-bottom: 45px">
            <p style="color: #333; font-size: 18px; margin-bottom: 10px; font-weight: 500">You don’t have any tags yet</p>
            <p style="color: #666; font-size: 14px; line-height: 22px; font-weight: 300; margin: 0 380px">At the bottom of a note, start typing to add a tag or to search the master list of tags.</p>
        </div>
    </div>
  </div>
</div>