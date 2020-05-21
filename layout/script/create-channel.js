$(document).ready(function(){
    
    $('img').unveil();
    $('#channel-menu-popup').hide();
    $('#channel-menu-popup .url').hide();
    
    $('.after-hover-menu').hide();
    $(document).on('click touch', function(event) {            
        if(!$(event.target).parents().addBack().is('.after-hover-menu')
           && !$(event.target).parents().addBack().is('.clickMenu')) {
            $('.after-hover-menu').hide(100);
        }
    });
    
    $('#channel-menu-popup .form .error_log').hide();
    $('#channel-menu-popup .sending-data').hide();
    
    $('#channel-menu-popup .background').click(function(){
        createChannel('destroy');
        $('#channel-menu-popup').fadeOut(100);
    });
});
function initUpload(xh,h,w,from,size){
    
    var url = $('.editor-container').attr('post-data');

    $.post(url, {
        xh: xh,
        h: h,
        w: w,
        from: from,
        size: size
        },
        function(data, status){
            if(status=="success"){
                $('.editor-container').html(data);
                $('.cropit-image-input').click();
            }
    });
}

function showPopup(arg){
    switch(arg){
        case "createChannel":   createChannel();
    }
}
function createChannel(arg="null"){
    $('#channel-menu-popup').fadeIn(100);
    
    switch(arg){
        case "create":
            var name = $('#channel-menu-popup .chnl_name').val();
            var cat = $('#channel-menu-popup .cat').val();
            var info = $('#channel-menu-popup .about').val();
            var data = {name: name,
                        cat: cat,
                        info: info};

            var url = $('#channel-menu-popup').attr('data-link');
            $('#channel-menu-popup .sending-data').fadeIn(100);
            $('#channel-menu-popup .popup .form').css({'display':'none'});
            
            if(data!='')
            {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    dataType: "json",
                    cache: false,
                    success: function(html){
                        $('#channel-menu-popup .sending-data').fadeOut(100);
                        
                        if(html['status']=="true"){
                            $('#channel-menu-popup .popup').hide();
                            
                            $('#channel-menu-popup .url').show();
                            $('#channel-menu-popup .url input').val(html['url']);
                        }
                        else{
                            $('#channel-menu-popup .form .error_log').show();
                            $('#channel-menu-popup .popup .form .error_log').text(html['error']);
                            $('#channel-menu-popup .popup .form').css({'display':'block'});
                        }
                    },
                });
            }
            break;
        case "destroy":
            $('#channel-menu-popup .sending-data').fadeOut(100);
            $('#channel-menu-popup .popup .form').css({'display':'block'});
            $('#channel-menu-popup').fadeOut(100);
            break;
    }
}
function subscribe(action,id){
    if(action=="true"){
        $('.subscribe-'+id).text("subscribed");
        $('.subscribe-'+id).css({'background':'#999'}); 
        $('.subscribe-'+id).attr("onclick","subscribe('false','"+id+"')");
        /*RUN AJAX AND SUBSCRIBE*/ 
    }
    else{
        $('.subscribe-'+id).text("subscribe"); 
        $('.subscribe-'+id).css({'background':'#ff2b54'});
        $('.subscribe-'+id).attr("onclick","subscribe('true','"+id+"')");
        /*RUN AJAX AND UNSUBSCRIBE*/
    }
}
function clickMenu(action){
    $('.after-hover-menu').hide();
    $('.'+action).toggle(100);
}
function editChannel(arg="null"){
    
    switch(arg){
        case "":
            break;
    }
}