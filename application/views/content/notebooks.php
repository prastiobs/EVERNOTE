<title>Notebooks - Evernote Web</title>
<div class="wrapper">
  <nav id="sidebar">
   	<div class="sidebar-header" style="font-size: 13px">
      <img src="<?php echo base_url() ?>assets/img/profil.png" alt="" width="28px" style="border-radius: 50%">
      <a href="main.html" style="padding-left: 5px;">Prastio Bagusindra</a>
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
  	  <li class="active">
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
      <li>
        <a href="<?php echo base_url('trash') ?>">
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

  <div class="content-2">
    <div class="content-3">
      <h1>Notebooks</h1>
      <h2>My notebook list</h2>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th style="text-align: center">TITLE</th>
            <th style="text-align: center">CREATION DATE</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $this->db->where(array('creator' => $this->session->userdata('user_mail')));
        $this->db->select('*');
        $query = $this->db->get('notebook');
        foreach ($query->result() as $key) {
          ?>
          <tr data-toggle="modal" data-target="#modal<?php echo $key->id?>">
            <td style="text-align: center"><?php echo $key->title;?></td>
            <td style="text-align: center"><?php echo $key->creation?></td>
          </tr>

          <div class="modal fade" id="modal<?php echo $key->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <form method="POST" action="<?php echo base_url() ?>index.php/C_home/updateNote">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?php echo $key->title?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <textarea name="noteValue" cols="30" rows="20" class="form-control" placeholder="Start writting, dragfiles, or chose a template"><?php echo $key->note?></textarea>
                <input hidden name="noteId" type="text" value="<?php echo $key->id?>">
                </div>
                <div class="modal-footer">
                <a href="<?php echo base_url() ?>index.php/C_home/deleteNote/<?php echo $key->id?>" class="btn btn-secondary">Delete</a>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <?php
        }?>
        </tbody>
      </table>
    </div>
  </div>
</div>