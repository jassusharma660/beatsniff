<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require '../config/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - <?php echo $_GET['action'];?></title>
        <script src="<?php echo $script;?>jquery-2.2.3.min.js"></script>
        <script src="<?php echo $script;?>site-helper.js"></script>
        <script src="<?php echo $script;?>jquery.slimscroll.min.js"></script>
        <script src="<?php echo $script;?>jquery.unveil.js"></script>
        
        <link href="<?php echo $css;?>style.css" rel="stylesheet" type="text/css" media="screen, projection">
        <link href="<?php echo $css;?>print-style.css" rel="stylesheet" type="text/css" media="print">
            
        <link rel="icon" type="image/ico" href="<?php echo $favicon;?>home.ico"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <div id="theme-bg"></div>
        <div id="theme-bg-tint"></div>
        
        
        <div id="header">
            <?php include $includes.'header.php';?>
        </div>
        
        <div id="sidepanel">
           <?php include $includes.'sidepanel.php';?>
        </div>
        
        <div id="content">
            <!---------------trending-songs---------------------------->
            <div id="post-trending">
                <?php 
                    if(isset($_GET['action']) && !empty($_GET['action'])){
                        if($_GET['action']=="notifications"){
                ?>
                 <div class="top-liked-post-title">
                    <span class="title-text">VIEW ALL
                        <span class="title-text-next">NOTIFICATIONS</span>
                    </span>
                    <span class="more">
                        <img src="<?php echo $icons;?>delete.svg"/>
                        <span class="pop_more">
                            DELETE ALL
                        </span>
                    </span>
                </div>
                <div class="view-all-notification">
                    
                    <div class="time">12 JULY 2016</div>
                    
                    <div class="tab-style">
                        <a href="<?php echo $bin."my-channel.php";?>"><span class="cbold-color">Rett and Link</span></a> requested to add you as an artist for <a href="<?php echo $bin."song-info.php";?>"><span class="cbold-color">I am on vacation</span></a><span class="cbold"> 2 days ago</span>
                        <div class="quote">
                            <span class="cbold-color">Rett and Link</span> Please click accept as we already have talked about the amount.
                        </div>
                        <div>
                            <button class="accept">Accept</button>
                            <button class="reject">Reject</button>
                        </div>
                    </div>

                    <div class="tab-style">
                        <a href="<?php echo $bin."artist-info.php";?>"><span class="cbold-color">ZYAN MALIK</span></a> commented on you song <a href="<?php echo $bin."song-info.php";?>"><span class="cbold-color">I'm textpert</span></a>.
                    </div>

                    <div class="tab-style">
                        <span class="cbold-color">Jassu Sharma</span> liked your song <a href="<?php echo $bin."song-info.php";?>"><span class="cbold-color">I'm textpert</span></a>.
                    </div>
                    
                    <div class="time">11 JULY 2016</div>
                    
                    <div class="tab-style">
                        <a href="<?php echo $bin."my-channel.php";?>"><span class="cbold-color">Rett and Link</span></a> requested to add you as an artist for <a href="<?php echo $bin."song-info.php";?>"><span class="cbold-color">I am on vacation</span></a><span class="cbold"> 2 days ago</span>
                        <div class="quote">
                            <span class="cbold-color">Rett and Link</span> Please click accept as we already have talked about the amount.
                        </div>
                        <div>
                            <button class="accept">Accept</button>
                            <button class="reject">Reject</button>
                        </div>
                    </div>
                    
                </div>
                <?php
                        }
                        else
                        if($_GET['action']=="recent"){
                ?>
                
                 <div class="top-liked-post-title">
                    <span class="title-text">VIEW ALL
                        <span class="title-text-next">LAST ACTIVITIES</span>
                    </span>
                    <span class="more">
                        <img src="<?php echo $icons;?>delete.svg"/>
                        <span class="pop_more">
                            DELETE ALL
                        </span>
                    </span>
                </div>
                <div class="view-all-recent">
                    
                    <div class="time">12 JULY 2016</div>

                    <div class="tab-style">
                        <span>06:45 PM</span>You liked song "Wild Things".
                    </div>
                    <div class="tab-style">
                        <span>10:11 AM</span>You subscribed to "Rett and Link".
                    </div>
                    <div class="tab-style">
                        <span>9:17 AM</span>You commented on song "Pillow Talk".
                    </div>
                    <div class="tab-style">
                        <span>7:01 AM</span>You added song "Overdose" to your favorites.
                    </div>
                    <div class="tab-style">
                        <span>6:00 AM</span>Successfully bought song "Pillow Talk" for 12 INR
                    </div>
                    <div class="time">12 JULY 2016</div>

                    <div class="tab-style">
                        <span>06:45 PM</span>You liked song "Wild Things".
                    </div>
                    <div class="tab-style">
                        <span>10:11 AM</span>You subscribed to "Rett and Link".
                    </div>
                    
                </div>
            <?php
                    }
                    else
                        if($_GET['action']=="cart"){
            ?>
                <div class="cart">
                    <div class="top-liked-post-title">
                        <span class="title-text">5 ITEMS
                            <span class="title-text-next">CART</span>
                        </span>
                    </div>
                    <div id="get-song-element">
                        
                        <?php for($i=1; $i<=5;$i++){?>
                        <div class="get-song-data">
                            <div class="get-song-size">
                                <span class="cbold"><?php echo $i;?>.</span>
                            </div>
                            <div class="get-song-icon">
                                <img src="<?php echo $small_profile_pics;?>zyan50x50.jpg" alt="music"/>
                            </div>
                            <div class="get-song-name">
                                <span>JUST THE WAY YOU ARE</span>
                            </div>
                            <div class="get-song-money">
                                <span>1O INR</span>
                            </div>
                            <div class="get-song-time">
                                <span>3:69</span>
                            </div>
                            <span class="remove-button">REMOVE</span>
                        </div>
                        <?php }?>
                        <div class="cart-grand-total">
                            <span class="text">TOTAL</span>
                            <span class="cost"> INR 50/-</span>
                        </div>
                        <div class="continue-button"><code>< </code>Continue adding</div>
                        <div class="checkout-button">Proceed to checkout ></div>
                        
                    </div>
                </div>
            <?php
                }
                else
                if($_GET['action']=="history"){
                    if($_GET['action']=="history" && !empty($_GET['request']) && !empty($_GET['txtid'])){
            ?>
                <div id="invoice">
                    <div style="width:100%;display:block;height:40px;">
                        <button id="print-button" onclick="javascript:window.print()">
                            <img src="<?php echo $icons."print.svg";?>"/>
                        </button>
                    </div>
                    
                    <img src="<?php echo $logos;?>beatsniff.svg" alt="beatsniff" class="watermark"/>

                    <div class="company">
                        <span class="logo">
                            <img src="<?php echo $logos."beatsniff-by-atun.svg";?>"/>
                        </span>
                        <div class="company-addr">
                            Sharma Niwas 
                            c/o Sh. Devender Kumar Sharma <br/>
                            Near NH - 205,
                            Vill - Parhech <br/>
                            PO - Ghanahatti
                            Teh. & Distt. - Shimla<br/>
                            171011
                        </div>
                    </div>
                    <div class="invoice-addr">
                        <div class="addr">
                            <div class="head">Bill to:</div>
                                Rett and Link,<br/>
                                Khasra no. 420,<br/>
                                Borewell wali gali<br/>
                                Andheri chowk,
                                Delhi - 7
                        </div>
                        <div class="invoice-detail">
                            <div class="head">Invoice</div>
                            <table>
                                <tr>
                                    <td class="th">Date</td>
                                    <td>13/07/2016</td>
                                </tr>
                                <tr>
                                    <td class="th">Invoice #</td>
                                    <td>1833</td>
                                </tr>
                                <tr>
                                    <td class="th">Amount Paid</td>
                                    <td>Rs. 100</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="invoice-data">
                        <table>
                            <tr>
                                <th>Iteam</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>//ZYAN12989</td>
                                <td>Song Pillow Talk by ZYAN</td>
                                <td>100.00</td>
                                <td>1</td>
                                <td class="right">100.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total</td>
                                <td class="right total">100.00</td>
                            </tr>
                        </table>
                    </div>
                </div>        
            <?php
                    }
                    else{
            ?>
                
                <div id="account-statement">
                    <div class="header">
                        <div class="dp">
                            <img src="<?php echo $small_profile_pics."deepak50x50.jpg";?>"/>
                        </div>
                        <div class="name">
                            <span>Deepak Kumar Sharma</span>
                        </div>
                        <div class="amount"><img src="<?php echo $icons."money1.svg";?>"/>100.00 <span class="currency">INR</span></div>
                    </div>
                    <button id="print-button" onclick="javascript:window.print()">
                        <img src="<?php echo $icons."print.svg";?>"/>
                    </button>
                    <div class="statement">
                        <span style="float:left;height:30px;margin-top:5px;font-weight:bold;letter-spacing:5px;">
                            <span style="position:relative;top:50%;transform:translateY(-50%);display:block;">
                                WALLET SUMMARY
                            </span>
                        </span>
                        <img src="<?php echo $logos;?>beatsniff.svg" alt="beatsniff" class="watermark"/>
                        <br/>
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Particulars</th>
                                <th>Iteam Id</th>
                                <th>Type</th>
                                <th>Debit</th>
                                <th>Credit</th>
                                <th class="right">Balance</th>
                            </tr>
                            <tr>
                                <td>9 May 2016</td>
                                <td>Sold song Christmas Song</td>
                                <td>#rettlink0912</td>
                                <td>CC</td>
                                <td>-NIL-</td>
                                <td>200.00</td>
                                <td class="right">200.00</td>
                            </tr>
                            
                            <tr>
                                <td>10 May 2016</td>
                                <td>
                                    <a href="./view-all.php?action=history&request=invoice&txtid=xay123">
                                        Purchase of song Pillow Talk
                                    </a>
                                </td>
                                <td>#zyan2176</td>
                                <td class="wallet">Wallet</td>
                                <td>200.00</td>
                                <td>-NIL-</td>
                                <td class="right">0.00</td>
                                
                            </tr>
                            
                            <tr>
                                <td>11 May 2016</td>
                                <td>
                                    <a href="./view-all.php?action=history&request=invoice&txtid=xay123">
                                        Purchase of song Pillow Talk
                                    </a>
                                </td>
                                <td>#zyan2176</td>
                                <td>NB</td>
                                <td>200.00</td>
                                <td>-NIL-</td>
                                <td class="right">0.00</td>
                            </tr>
                            <tr>
                                <td>12 May 2016</td>
                                <td>Sold song Christmas Song</td>
                                <td>#rettlink0912</td>
                                <td>NB</td>
                                <td>-NIL-</td>
                                <td>200.00</td>
                                <td class="right">200.00</td>
                            </tr>
                            <tr>
                                <td>13 May 2016</td>
                                <td>
                                    <a href="./view-all.php?action=history&request=invoice&payid=xay123">
                                        Cash Redeemed
                                    </a>
                                </td>
                                <td></td>
                                <td></td>
                                <td>200.00</td>
                                <td>-NIL-</td>
                                <td class="right">100.00</td>
                            </tr>
                            <tr class="total">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total</td>
                                <td></td>
                                <td></td>
                                <td class="right">100.00</td>
                            </tr>
                        </table>
                    </div>
                    <span class="cbold-color star-note">* For invoice kindly click on the corresponding record's particular above.</span>
                </div>
            <?php
                    }
                }
                else{
                    echo "<div class='cbold-h'>Nothing here buddy! Move alone.</div>";
                }
            }
             else{
                    echo "<div class='cbold-h'>Nothing here buddy! Move alone.</div>";
            }
            ?>
            </div>
            <?php
                if(!$_GET['action']=="history"){ ?>
            <!---------------trending-channels------------------------>
           
            <div id="post-trending-right">
                 <div class="top-liked-post-title">
                    <span class="title-text">CHANNELS
                        <span class="title-text-next">WORLD WIDE</span>
                    </span>
                </div>
                 
                <div class="top-artist-post-elements">
                    
                    <div class="chnl_subs">100 K<br/><span style="font-size:10px;">SUBS</span></div>
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>randl200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            RETT AND LINK
                        </div>
                        <div class="artist-caption-year">
                            /rett_and_link
                        </div>
                    </div>
                </div>
                 
                <div class="top-artist-post-elements">
                    
                    <div class="chnl_subs">1 M<br/><span style="font-size:10px;">SUBS</span></div>
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>sqcl200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            SQUARE CIECLES
                        </div>
                        <div class="artist-caption-year">
                            /squarcircles
                        </div>
                    </div>
                </div>
                
                <div class="top-artist-post-elements">
                    
                    <div class="chnl_subs">54 K<br/><span style="font-size:10px;">SUBS</span></div>
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>igyaan200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            IGYAAN
                        </div>
                        <div class="artist-caption-year">
                            /igyaan
                        </div>
                    </div>
                </div>
                
            </div>
            <?php }?>
            
        </div>
        
        <div id="setting-popup" user-id="<?php echo 'xyz123';?>" page-id="subs">
            <div class="data" data-link="<?php echo $includes.'setting-popup.php';?>">
            <img src="<?php echo $icons;?>loading-black.gif" class="loading"/><br/>
            </div>
        </div>
        
        <?php include $includes."footer.php";?>
        
    </body>
</html>