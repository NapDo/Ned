
 <div class="sidebar left hidden-xs">
           <a id="brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('/public/img/logoin.png');?>"></a>
		 
       
	
				<?php
if ($fullname != false)
  foreach ($fullname->result() as $key => $q): ?>
       
            

 <div id="menu" data-scrollable>
 
				<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header has-drawer is-upgraded" data-upgraded=",MaterialLayout" data-scrollable>
	      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50" style="width :269px;">
        <header class="demo-drawer-header">
          <img src="<?php echo base_url('/public/user/uploads/avatars/'.$q->img_thumb);?>" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php $q->email;?></span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
        <FORM ACTION="<?php echo base_url('index.php/@'.$q->username);?>">  <button class="mdl-menu__item" >Profile</button>
		</form>
             <FORM ACTION="<?php echo base_url('index.php/@'.$q->username.'/team');?>">  <button class="mdl-menu__item">My Team</button>
			 </form>
             <FORM ACTION="<?php echo base_url('index.php/home/logout');?>">  <button class="mdl-menu__item">Logout...</button>
			 </form>
            </ul>
          </div>
        </header>
		     <?php endforeach ?>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">home</i>Home</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">inbox</i>Inbox</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">delete</i>Trash</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">report</i>Spam</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">forum</i>Forums</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">flag</i>Updates</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">local_offer</i>Promos</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">shopping_cart</i>Purchases</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">people</i>Social</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">help_outline</i></a>
        </nav>
      </div>
        </nav>
		</div>
        </div>
    </div>
