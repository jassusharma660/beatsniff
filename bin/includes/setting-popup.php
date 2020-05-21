<?php
    error_reporting(0);
    require './country.php';
        
    if($_POST['user'] && $_POST['page']){
        if($_POST['page']=="index"){
            require '../../DIR.php';
        }
        else
            if($_POST['page']=="subs"){
            require '../DIR.php';
        }
?>
<div class="setting-header">
    <img src="<?php echo $icons."settings.svg"?>" style="height:15px;position:relative;top:1px;"/>
    Settings
    
    <img src="<?php echo $icons."cross.svg"?>" style="height:15px;cursor:pointer;float:right;" onclick="$('#setting-popup').fadeOut(100);"/>
    
</div>
<div class="setting-sidebar">
    
    <div class="tabs notification selected" onclick="showTabsSetting('notification')">Notifications</div>
    <div class="tabs general" onclick="showTabsSetting('general')">General</div>
    
    <div class="tabs security" onclick="showTabsSetting('security')">Security</div>
    <div class="tabs recent" onclick="showTabsSetting('recent')">Recent Activity</div>
    <a href="<?php echo $bin;?>./view-all.php?action=history"><div class="tabs wallet">Wallet
    <img src="<?php echo $icons."money.svg"?>" style="height:15px;float:right;"/>
    </div></a>
</div>
<div class="content">
    
    <div class="notification content-tab" id="scrollable_notification" style="display:block;">
        <div style="font-weight:bold;margin-top:20px;">
            <span class="count">Recent notification</span>
            <a href="<?php echo $bin;?>./view-all.php?action=notifications" class="view-all">view all</a>
        </div>
        <div class="activities">
            
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
        </div>
    </div>

    <div class="general content-tab">
        <div class="dp">
            <div class="hover">
                <img src="<?php echo $icons."pencil.svg"?>" style="height:40px;width:40px;position:relative;top:50%;transform:translateY(-50%);"/>
            </div>
            <img src="<?php echo $medium_profile_pics."jassu200x200.jpg"?>"/>
        </div>
        <div class="profile">
            <div class="name">
                Jassu Sharma
            </div>
            <div class="email">
                <div style="font-weight:bold;margin-top:20px;">Email</div>
                <span>jassusharma660@gmail.com</span>
                <img src="<?php echo $icons."pencil-black.svg"?>" style="height:20px;width:20px;cursor:pointer;position:relative;top:5px;" onclick="triggerEdit('email')"/>
            </div>
            <div class="gender">
                <div style="font-weight:bold;margin-top:20px;">Gender</div><span>male</span>
                <img src="<?php echo $icons."pencil-black.svg"?>" style="height:20px;width:20px;cursor:pointer;position:relative;top:5px;" onclick="triggerEdit('gender')"/>
            </div>
            <div class="country">
                <div style="font-weight:bold;margin-top:20px;">Country</div>
                <span>India</span>
                <img src="<?php echo $icons."pencil-black.svg"?>" style="height:20px;width:20px;cursor:pointer;position:relative;top:5px;" onclick="triggerEdit('country')"/>
                
                <div class="data" style="display:none;">
                <select type="text" class="text text-field" name="country" id="country" onchange='triggerEdit("sendcountrydata");'>
                    <option value="select" selected>Select Country</option>
                        <?php
                        foreach ($countries as $code => $name){
                        echo "<option value=\"$name\" data=\"$code\">$code</option>\n";
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="mobile">
                <div style="font-weight:bold;margin-top:20px;">Mobile</div>
                <input type="text" name="mobile-code" id="mobile-code" placeholder="+91" style="width:40px;text-align:center;" readonly/>
                <span>7807114435</span>
                <img src="<?php echo $icons."pencil-black.svg"?>" style="height:20px;width:20px;cursor:pointer;position:relative;top:5px;" onclick="triggerEdit('mobile')"/>
            </div>
        
        </div>
        <div class="button"><button>Save</button></div>
    </div>
    
    <div class="security content-tab">
        <div style="font-weight:bold;margin-top:20px;">Change password</div>      
        <div class="change-password">
            <input type="password" placeholder="Current password" name="pass">
            <input type="password" placeholder="New password" name="npass">
            <input type="password" placeholder="Repeat new password" name="rpass">
            <div class="button"><button onclick="triggerEdit('password')">Next</button></div>
        </div>
        <div class="data-on-hold">
            <img src="<?php echo $icons;?>loading-black.gif" class="loading"/>
        </div>
    </div>
    <div class="recent content-tab">
        <div style="font-weight:bold;margin-top:20px;">
            <span class="count">Your recent 5 activities</span>
            <a href="<?php echo $bin;?>./view-all.php?action=recent" class="view-all">view all</a>
            <img src="<?php echo $icons;?>delete.svg" class="del" onclick="triggerEdit('clearrecent')"/>
        </div>
        <div class="activities">
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
        </div>
    </div>
</div>
<script>

        var countryCodeList = new Array();

    countryCodeList['AF'] = '93';
    countryCodeList['AX'] = '358';
    countryCodeList['AL'] = '355';
    countryCodeList['DZ'] = '213';
    countryCodeList['AS'] = '1-684';
    countryCodeList['AD'] = '376';
    countryCodeList['AO'] = '244';
    countryCodeList['AI'] = '1-264';
    countryCodeList['AQ'] = '672';
    countryCodeList['AG'] = '1-268';
    countryCodeList['AR'] = '54';
    countryCodeList['AM'] = '374';
    countryCodeList['AW'] = '297';
    countryCodeList['AU'] = '61';
    countryCodeList['AT'] = '43';
    countryCodeList['AZ'] = '994';
    countryCodeList['BS'] = '1-242';
    countryCodeList['BH'] = '973';
    countryCodeList['BD'] = '880';
    countryCodeList['BB'] = '1-246';
    countryCodeList['BY'] = '375';
    countryCodeList['BE'] = '32';
    countryCodeList['BZ'] = '501';
    countryCodeList['BJ'] = '229';
    countryCodeList['BM'] = '1-441';
    countryCodeList['BT'] = '975';
    countryCodeList['BO'] = '591';
    countryCodeList['BA'] = '387';
    countryCodeList['BW'] = '67';
    countryCodeList['BR'] = '55';
    countryCodeList['IO'] = '246';
    countryCodeList['VG'] = '1-284';
    countryCodeList['BN'] = '673';
    countryCodeList['BG'] = '359';
    countryCodeList['BF'] = '226';
    countryCodeList['BI'] = '257';
    countryCodeList['KH'] = '855';
    countryCodeList['CM'] = '237';
    countryCodeList['CA'] = '1';
    countryCodeList['CV'] = '238';
    countryCodeList['KY'] = '1-345';
    countryCodeList['CF'] = '236';
    countryCodeList['TD'] = '235';
    countryCodeList['CL'] = '56';
    countryCodeList['CN'] = '86';
    countryCodeList['CX'] = '61';
    countryCodeList['CC'] = '61';
    countryCodeList['CO'] = '57';
    countryCodeList['KM'] = '269';
    countryCodeList['CK'] = '682';
    countryCodeList['CR'] = '506';
    countryCodeList['HR'] = '385';
    countryCodeList['CU'] = '53';
    countryCodeList['CW'] = '599';
    countryCodeList['CY'] = '357';
    countryCodeList['CZ'] = '420';
    countryCodeList['CD'] = '243';
    countryCodeList['DK'] = '45';
    countryCodeList['DJ'] = '253';
    countryCodeList['DM'] = '1-767';
    countryCodeList['DO'] = '1-809';
    countryCodeList['TL'] = '670';
    countryCodeList['EC'] = '593';
    countryCodeList['EG'] = '20';
    countryCodeList['SV'] = '503';
    countryCodeList['GQ'] = '240';
    countryCodeList['ER'] = '291';
    countryCodeList['EE'] = '372';
    countryCodeList['ET'] = '251';
    countryCodeList['FK'] = '500';
    countryCodeList['FO'] = '298';
    countryCodeList['FJ'] = '679';
    countryCodeList['FI'] = '358';
    countryCodeList['FR'] = '33';
    countryCodeList['PF'] = '689';
    countryCodeList['GA'] = '241';
    countryCodeList['GM'] = '220';
    countryCodeList['GE'] = '995';
    countryCodeList['DE'] = '49';
    countryCodeList['GH'] = '233';
    countryCodeList['GI'] = '350';
    countryCodeList['GR'] = '30';
    countryCodeList['GL'] = '299';
    countryCodeList['GL'] = '1-473';
    countryCodeList['GU'] = '1-671';
    countryCodeList['GT'] = '502';
    countryCodeList['GG'] = '44-1481';
    countryCodeList['GN'] = '224';
    countryCodeList['GW'] = '245';
    countryCodeList['GY'] = '592';
    countryCodeList['HT'] = '509';
    countryCodeList['HN'] = '504';
    countryCodeList['HK'] = '852';
    countryCodeList['HU'] = '36';
    countryCodeList['IS'] = '354';
    countryCodeList['IN'] = '91';
    countryCodeList['ID'] = '62';
    countryCodeList['IR'] = '98';
    countryCodeList['IQ'] = '964';
    countryCodeList['IE'] = '353';
    countryCodeList['IM'] = '44-1624';
    countryCodeList['IL'] = '972';
    countryCodeList['IT'] = '39';
    countryCodeList['CI'] = '225';
    countryCodeList['JM'] = '1-876';
    countryCodeList['JP'] = '81';
    countryCodeList['JE'] = '44-1534';
    countryCodeList['JO'] = '962';
    countryCodeList['KZ'] = '7';
    countryCodeList['KE'] = '254';
    countryCodeList['KI'] = '686';
    countryCodeList['XK'] = '383';
    countryCodeList['KW'] = '965';
    countryCodeList['KG'] = '996';
    countryCodeList['LA'] = '856';
    countryCodeList['LV'] = '371';
    countryCodeList['LB'] = '961';
    countryCodeList['LS'] = '266';
    countryCodeList['LR'] = '231';
    countryCodeList['LY'] = '218';
    countryCodeList['LI'] = '423';
    countryCodeList['LT'] = '370';
    countryCodeList['LU'] = '352';
    countryCodeList['MO'] = '853';
    countryCodeList['MK'] = '389';
    countryCodeList['MG'] = '261';
    countryCodeList['MW'] = '265';
    countryCodeList['MY'] = '60';
    countryCodeList['MV'] = '960';
    countryCodeList['ML'] = '223';
    countryCodeList['MT'] = '356';
    countryCodeList['MH'] = '692';
    countryCodeList['MR'] = '222';
    countryCodeList['MU'] = '230';
    countryCodeList['YT'] = '262';
    countryCodeList['MX'] = '52';
    countryCodeList['FM'] = '691';
    countryCodeList['MD'] = '373';
    countryCodeList['MC'] = '377';
    countryCodeList['MN'] = '976';
    countryCodeList['ME'] = '382';
    countryCodeList['MS'] = '1-664';
    countryCodeList['MA'] = '212';
    countryCodeList['MZ'] = '258';
    countryCodeList['MM'] = '95';
    countryCodeList['NA'] = '264';
    countryCodeList['NR'] = '674';
    countryCodeList['NP'] = '977';
    countryCodeList['NL'] = '31';
    countryCodeList['AN'] = '599';
    countryCodeList['NC'] = '687';
    countryCodeList['NZ'] = '64';
    countryCodeList['NI'] = '505';
    countryCodeList['NE'] = '227';
    countryCodeList['NG'] = '234';
    countryCodeList['NU'] = '683';
    countryCodeList['KP'] = '850';
    countryCodeList['MP'] = '1-670';
    countryCodeList['NO'] = '47';
    countryCodeList['OM'] = '968';
    countryCodeList['PK'] = '92';
    countryCodeList['PW'] = '680';
    countryCodeList['PS'] = '970';
    countryCodeList['PA'] = '507';
    countryCodeList['PG'] = '675';
    countryCodeList['PY'] = '595';
    countryCodeList['PE'] = '51';
    countryCodeList['PH'] = '63';
    countryCodeList['PN'] = '64';
    countryCodeList['PL'] = '48';
    countryCodeList['PT'] = '351';
    countryCodeList['PR'] = '1-787';
    countryCodeList['QA'] = '974';
    countryCodeList['CG'] = '242';
    countryCodeList['RE'] = '262';
    countryCodeList['RO'] = '40';
    countryCodeList['RU'] = '7';
    countryCodeList['RW'] = '250';
    countryCodeList['BL'] = '590';
    countryCodeList['SH'] = '290';
    countryCodeList['KN'] = '1-869';
    countryCodeList['LC'] = '1-758';
    countryCodeList['MF'] = '590';
    countryCodeList['PM'] = '508';
    countryCodeList['VC'] = '1-784';
    countryCodeList['WS'] = '685';
    countryCodeList['SM'] = '378';
    countryCodeList['ST'] = '239';
    countryCodeList['SA'] = '966';
    countryCodeList['SN'] = '221';
    countryCodeList['RS'] = '381';
    countryCodeList['SC'] = '248';
    countryCodeList['SL'] = '232';
    countryCodeList['SG'] = '65';
    countryCodeList['SX'] = '1-721';
    countryCodeList['SK'] = '421';
    countryCodeList['SI'] = '386';
    countryCodeList['SB'] = '677';
    countryCodeList['SO'] = '252';
    countryCodeList['ZA'] = '27';
    countryCodeList['KR'] = '82';
    countryCodeList['SS'] = '211';
    countryCodeList['ES'] = '34';
    countryCodeList['LK'] = '94';
    countryCodeList['SD'] = '249';
    countryCodeList['SR'] = '597';
    countryCodeList['SJ'] = '47';
    countryCodeList['SZ'] = '268';
    countryCodeList['SE'] = '46';
    countryCodeList['CH'] = '41';
    countryCodeList['SY'] = '963';
    countryCodeList['TW'] = '886';
    countryCodeList['TJ'] = '992';
    countryCodeList['TZ'] = '255';
    countryCodeList['TH'] = '66';
    countryCodeList['TG'] = '228';
    countryCodeList['TK'] = '690';
    countryCodeList['TO'] = '676';
    countryCodeList['TT'] = '1-868';
    countryCodeList['TN'] = '216';
    countryCodeList['TR'] = '90';
    countryCodeList['TM'] = '993';
    countryCodeList['TC'] = '1-649';
    countryCodeList['TV'] = '688';
    countryCodeList['VI'] = '1-340';
    countryCodeList['UG'] = '256';
    countryCodeList['UA'] = '380';
    countryCodeList['AE'] = '971';
    countryCodeList['GB'] = '44';
    countryCodeList['US'] = '1';
    countryCodeList['UY'] = '598';
    countryCodeList['UZ'] = '998';
    countryCodeList['VU'] = '678';
    countryCodeList['VA'] = '379';
    countryCodeList['VE'] = '58';
    countryCodeList['VN'] = '84';
    countryCodeList['WF'] = '681';
    countryCodeList['EH'] = '212';
    countryCodeList['YE'] = '967';
    countryCodeList['ZM'] = '260';
    countryCodeList['ZW'] = '263';

</script>
<?php
    }
?>