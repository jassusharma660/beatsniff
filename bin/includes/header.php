<div id="header-pad"></div>
<form method="get" class="search" action="<?php echo $bin;?>search.php">
    <button type="submit"><img src="<?php echo $icons;?>search.svg"/></button>
    <input type="search" class="search-input" placeholder="What are you lookig for?...">
</form>
<div id="header-links">
    <div class="icons">
        <img src="<?php echo $icons."upload.svg"?>"/>
    </div>
    <a href="<?php echo $bin;?>./view-all.php?action=cart">
        <div class="icons">
            <img src="<?php echo $icons."cart.svg"?>"/>
            <span>
                <div><?php echo rand(0,100);?></div>
            </span>
        </div>
    </a>
    <div class="profile-icons" id="open-setting">
        <img src="<?php echo $icons;?>user.svg" alt="login"/>
        <span class="alert"></span>
        <span class="name">Jassu Sharma</span>
    </div>
</div>