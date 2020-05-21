<?php
    error_reporting(0);
?>
<a href="<?php echo $home;?>">
    <div id="logo">
        <img src="<?php echo $logos;?>beatsniff-home.svg" alt="beatsniff"/>
</div>
</a>
 <a href="<?php echo $home;?>" class="links home<?php if($this_page=='home') echo' selected';?>">
    HOME
</a>
<div class="heading">CHANNELS</div>
    <a href="http://beatsniff.in/index.php?action=subs" class="links<?php if($this_page=='channel') echo' selected';?>">
        SUBSCRIBED
    </a>
    <a href="<?php echo $bin."my-channel.php";?>" class="links<?php if($this_page=='my-channel') echo' selected';?>">
        MY CHANNEL
    </a>
<div class="heading">FAVORITES</div>
    <a href="http://beatsniff.in/index.php?view=favs" class="links<?php if($this_page=='artists') echo' selected';?>">
        ARTISTS
    </a>
    <a href="http://beatsniff.in/index.php?view=favs" class="links<?php if($this_page=='songs') echo' selected';?>">
        SONGS
    </a>
    <a href="http://beatsniff.in/index.php?view=favs" class="links<?php if($this_page=='album') echo' selected';?>">
        ALBUMS
    </a>
    <a href="http://beatsniff.in/index.php?view=favs" class="links<?php if($this_page=='downloaded') echo' selected';?>">
        DOWNLOADED
    </a>

<div class="heading">QUICK LINKS</div>
    <a href="<?php echo $bin;?>top-liked.php" class="links<?php if($this_page=='top-liked-songs') echo' selected';?>">
        TOP LIKED SONGS
    </a>
    <a href="<?php echo $bin;?>new-released.php" class="links<?php if($this_page=='new-released-songs') echo' selected';?>">
        NEW RELEASED SONGS
    </a>
    <a href="<?php echo $bin;?>artists.php" class="links<?php if($this_page=='popular-artists') echo' selected';?>">
        POPULAR ARTISTS
    </a>

<div class="heading">SEARCH BY</div>
    <a href="<?php echo $bin;?>song-by-genre.php" class="links<?php if($this_page=='genre') echo' selected';?>">
        GENRE
    </a>
    <a href="<?php echo $bin;?>song-by-year.php" class="links<?php if($this_page=='year') echo' selected';?>">
        YEAR
    </a>