<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<ul class="nav">
    {menudata}
    <li><a href="{link}">{name}</a></li>
    {/menudata}
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">User Role<b class="caret"></b></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="/roles/actor/Guest">Guest</a></li>
                  <li><a href="/roles/actor/User">User</a></li>
                  <li><a href="/roles/actor/Admin">Admin</a></li>
      </ul>
    </li>   
    <li class="nav-item">
        <!-- TODO: We can't leave this is raw PHP... can we? CodeIgniter doesn't make this easy. -->
        <p class="nav-link" id="user-role-display"><?php echo $this->data['userrole']; ?></p>
    </li>
</ul>
