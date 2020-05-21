$(document).ready(function(){
    
    //////////SLIDER/////////
    var galw = $('#gallary-post').width(),
        elenum = $('.mini-post').length,
        i=0;
                
        $('.slider').width(galw*elenum);
        $('#prev, #next').click(function(){
        var id= this.id=='next'?i++:i--;
        i = i==-1? elenum-1 : i % elenum;
        $('.slider').stop().animate({left:-i*130},300);0
    })
    ////SETTING//POPUP//////
    
    $('#setting-popup').hide();
    
    $('#open-setting').click(function(){
        getSettingData();
    });
    
     $(document).on('click touch', function(event) {            
        if(!$(event.target).parents().addBack().is('#setting-popup .data')
           && !$(event.target).parents().addBack().is('#open-setting')) {
            $('#setting-popup').fadeOut(100);
        }
    });
    
    ///PROFILE//SECTIONS///
    
    $('.about-profile-section').hide();
    $('.songs-profile-section').hide();
    
    $('.artist-profile-timeline').slideUp(0);
    
    /////////SIDEPANEL//////
    $('#sidepanel').slimscroll({
        height: '95%',
        width: '16%',
        railVisible: true,
        railBorderRadius: '0px',
        borderRadius: '0px',
        size: '10',
        allowPageScroll: true,
        touchScrollStep: 40,
        wheelStep: 10
    }).parent().css({'position':'fixed','top':'0px'});
    
    $('.side-comments-post').slimscroll({
        height: '80vh',
        railBorderRadius: '0px',
        borderRadius: '0px',
        size: '0',
        allowPageScroll: true
    });
    $('.slimScrollBar,.slimScrollRail').css({'display':'none'});
    
    /////ALBUM/POPUP//////

    $('#photo-gallary-popup').hide();
    $('#photo-gallary-popup .close').click(function(){
        $('#photo-gallary-popup').hide();   
    });
    
    //////////////////////
    ///SONG LYRICS POPUP///
    $('.lyrics-text-popup').hide();
    $('#song-lyrics-button').click(function(){
        $('.lyrics-text-popup').show(100);
        $('#content').css({'position':'fixed','top':'50px'});
        $('#header').css({'position':'fixed'});
        $(window).scrollTop(0);
    }); 
    $('.background').click(function(){
        $('.lyrics-text-popup').hide(100);
        $(window).scrollTop(0);
        $('#content').css({'position':'','top':''});
        $('#header').css({'position':''});
    });
    $('.close_popup').click(function(){
        $('.lyrics-text-popup').hide(100);
        $('#content').css({'position':'','top':''});
        $('#header').css({'position':''});
        $(window).scrollTop(0);
    });
    //////////////////////
    //Review/Stars//
    
        $('.rate_widget').each(function(i) {
            var widget = this;
            var out_data = {
                widget_id : $(widget).attr('id'),
                fetch: 1
            };
            $.post(
                './includes/ratings.php',
                out_data,
                function(INFO) {
                    $(widget).data( 'fsr', INFO );
                    set_votes(widget);
                },
                'json'
            );
        });
    
        $('.ratings_stars').hover(
            // Handles the mouseover
            function() {
                $(this).prevAll().andSelf().addClass('ratings_over');
                $(this).nextAll().removeClass('ratings_vote'); 
            },
            // Handles the mouseout
            function() {
                $(this).prevAll().andSelf().removeClass('ratings_over');
                // can't use 'this' because it wont contain the updated data
                set_votes($(this).parent());
            }
        );
        
        
        // This actually records the vote
        $('.ratings_stars').bind('click', function() {
            var star = this;
            var widget = $(this).parent();
            
            var clicked_data = {
                clicked_on : $(star).attr('class'),
                widget_id : $(star).parent().attr('id')
            };
            $.post(
                './includes/ratings.php',
                clicked_data,
                function(INFO) {
                    widget.data( 'fsr', INFO );
                    set_votes(widget);
                },
                'json'
            ); 
        });
    
    ///LAZY//LOAD///
    
    $("img").unveil();
    
    ////////////////
    
});
/////////////////////////
function like(attr){

    $('#unlike'+attr).hide();
    $('#like'+attr).show();
    
}    
function dislike(attr){
 
    $('#like'+attr).hide();
    $('#unlike'+attr).show();
    
}   
////////////////////////////
function artistlike(attr){

    $('#artistunlike'+attr).hide();
    $('#artistlike'+attr).show();
    
}    
function artistdislike(attr){
 
    $('#artistlike'+attr).hide();
    $('#artistunlike'+attr).show();
    
} 
///////////////////////////
function songlike(attr){

    $('#songunlike'+attr).hide();
    $('#songlike'+attr).show();
    
}    
function songdislike(attr){
 
    $('#songlike'+attr).hide();
    $('#songunlike'+attr).show();
    
}    
//////////////////////////
function addToFav(attr){

    $('#rmfav'+attr).hide();
    $('#fav'+attr).show();
    
}    
function removeFromFav(attr){
 
    $('#fav'+attr).hide();
    $('#rmfav'+attr).show();
    
}    
//////////SET///REVIEWS//////////


    function set_votes(widget){

        var avg = $(widget).data('fsr').whole_avg;
        var votes = $(widget).data('fsr').number_votes;
        var exact = $(widget).data('fsr').dec_avg;
        var one = $(widget).data('fsr').one;
        var two = $(widget).data('fsr').two;
        var three = $(widget).data('fsr').three;
        var four = $(widget).data('fsr').four;
        var five = $(widget).data('fsr').five;
        $('.review-points-rating').text(exact);
        $('.review-points-count').text(votes+' people');
        $('.progress-background .one').css('width',calcPercent(one,votes)+'%');
        $('.progress-background .two').css('width',calcPercent(two,votes)+'%');
        $('.progress-background .three').css('width',calcPercent(three,votes)+'%');
        $('.progress-background .four').css('width',calcPercent(four,votes)+'%');
        $('.progress-background .five').css('width',calcPercent(five,votes)+'%');
        $('.review-stars-sml-right .one').text(one);
        $('.review-stars-sml-right .two').text(two);
        $('.review-stars-sml-right .three').text(three);
        $('.review-stars-sml-right .four').text(four);
        $('.review-stars-sml-right .five').text(five);
        $(widget).find('.star_' + avg).prevAll().andSelf().addClass('ratings_vote');
        $(widget).find('.star_' + avg).nextAll().removeClass('ratings_vote'); 
       
    }
    function calcPercent(num,per){
        var c = (parseFloat(num)/parseFloat(per))*100;
        return parseFloat(c);
    }

/////////////////////////////////
    ///PROFILE//SECTIONS///
function switchProfileTab(action,e){
    switch(action){
        case 'about':
            $('.profile-sections').find('div').nextAll().removeClass('selected');
            $('.profile-sections').find('div').prevAll().removeClass('selected');
            $('.profile-sections .about').addClass('selected');
            $('.about-profile-section').show();
            $('.timeline-profile-section').hide();
            $('.songs-profile-section').hide();
            break;
        case 'timeline':
            $('.profile-sections').find('div').nextAll().removeClass('selected');
            $('.profile-sections').find('div').prevAll().removeClass('selected');
            $('.profile-sections .timeline').addClass('selected');
            $('.about-profile-section').hide();
            $('.timeline-profile-section').show();
            $('.songs-profile-section').hide();
            break;
        case 'songs':
            $('.profile-sections').find('div').nextAll().removeClass('selected');
            $('.profile-sections').find('div').prevAll().removeClass('selected');
            $('.profile-sections .songs').addClass('selected');
            $('.about-profile-section').hide();
            $('.timeline-profile-section').hide();
            $('.songs-profile-section').show();
            break;
    }
}
/////////////SETTING//POPUP//////////////
function showMoreComment(action,id){
    if(action=="show"){
        $('.show-artist-profile-timeline'+id).text("HIDE ALL COMMENTS");
        $('.artist-profile-timeline'+id).slideToggle(200);
        $('.show-artist-profile-timeline'+id).attr("onclick","showMoreComment('hide',"+id+")");
    }
    else{
        $('.show-artist-profile-timeline'+id).text("SHOW ALL COMMENTS");
        $('.artist-profile-timeline'+id).slideToggle(200);
        $('.show-artist-profile-timeline'+id).attr("onclick","showMoreComment('show',"+id+")");
    }
}
///////////////////////////////
function showAlbumPopup(id){
    
    $('#photo-gallary-popup .photo img').attr('src','../userdata/profile-pics/full/'+id+'.jpg');
     $('#photo-gallary-popup').show();
}
function getSettingData(){
    var user = $('#setting-popup').attr('user-id');
    var page = $('#setting-popup').attr('page-id');
    var data = {user: user,
                page: page};
    var url = $('#setting-popup .data').attr('data-link');
    if(data!='')
	{
		$.ajax({
            type: "POST",
            url: url,
            data: data,
            cache: false,
            success: function(html){
                $('#setting-popup .data').html(html);
            },
		});
        
        $('#setting-popup').fadeIn(200);
	}
}
function showTabsSetting(id){

    $('#setting-popup .content .notification').css({'display':'none'});
    $('#setting-popup .content .general').css({'display':'none'});
    $('#setting-popup .content .security').css({'display':'none'});
    $('#setting-popup .content .recent').css({'display':'none'});
    
    $('#setting-popup .setting-sidebar div').removeClass('selected');
    
    $('#setting-popup .content .'+id).css({'display':'block'});
    $('#setting-popup .setting-sidebar .'+id).addClass('selected');
}
function triggerEdit(arg,event=null){
    switch(arg){
        case 'email':
            var email = $('#setting-popup .content .email span').text();
            $('#setting-popup .content .email span').html("<input class='email' value='"+email+"' onkeydown='triggerEdit(\"sendemaildata\",event.keyCode || event.charCode)'/>");
            break;
        case 'sendemaildata':
            if(event==13){
                
                var email = $('#setting-popup .content .email span input').val();
            
                $('#setting-popup .content .email span').text(email);
                
            }
            break;
            
        case 'gender':
            var gender = $('#setting-popup .content .gender span').text();
            $('#setting-popup .content .gender span').html("<select class='gender' onchange='triggerEdit(\"sendgenderdata\")'><option value=''>select</option><option value='male'>male</option><option value='female'>female</option><option value='other'>others</option></select>");
            break;
        case 'sendgenderdata':
                var gender = $('#setting-popup .content .gender span select').val();
                $('#setting-popup .content .gender span').text(gender);
            break;
        case 'country':
            var country = $('#setting-popup .content .country .data').html();
            $('#setting-popup .content .country span').html(country);
            break;
        case 'sendcountrydata':
                var country = $('#setting-popup .content .country span select :selected').attr('data');
                
                var countrycode = $('#setting-popup .content .country span select').val();
            
                $('#setting-popup .content .country span').text(country);
                if ( countrycode != "" ){
                    countrycode = countrycode.toUpperCase();
                    var country = '+'+countryCodeList[countrycode];
                }
                else{
                     countrycode = '+00';
                }
                $('#mobile-code').val(country);
            break;
            
        case 'mobile':
            var mobile = $('#setting-popup .content .mobile span').text();
            $('#setting-popup .content .mobile span').html("<input class='mobile' value='"+mobile+"' onkeydown='triggerEdit(\"sendmobiledata\",event.keyCode || event.charCode)'/>");
            break;
        case 'sendmobiledata':
            if(event==13){
                
                var mobile = $('#setting-popup .content .mobile span input').val();
            
                $('#setting-popup .content .mobile span').text(mobile);
                
            }
            break;
        case 'password':
            $('.security .change-password').hide();
            $('.security .data-on-hold .loading').css({'display':'block'});
            break;
        case 'clearrecent':
            $('.recent .count').text("No recent activity found.");
            $('.recent .activities .tab-style').fadeOut(200);
            break;
    }
}