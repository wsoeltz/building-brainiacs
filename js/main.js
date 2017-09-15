$( document ).ready(function(){
    $('.testimonialContainer:not(.active)').on('click', function(event) {
        event.preventDefault();
        $(this).addClass('active');
        $('body').addClass('modalOpen');
    });
    $('.modalBackdrop').on('click', function(){
        $('.testimonialContainer.active').removeClass('active');
        $('body').removeClass('modalOpen');
    });
    $('.testimonialModal').on('click', 'a.closeModal', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $('.testimonialContainer.active').removeClass('active');
        $('body').removeClass('modalOpen');
    });
    $(function() {
        $('.matchHeight').matchHeight();
    });
    $( window ).resize(function() {
        $('.matchHeight').matchHeight();
    });
    navigator.sayswho= (function(){
        var ua= navigator.userAgent, tem,
        M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if(/trident/i.test(M[1])){
            tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
            return 'IE '+(tem[1] || '');
        }
        if(M[1]=== 'Chrome'){
            tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
            if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
        }
        M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
        if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
        return M.join(' ');
    })();
    var version = navigator.sayswho;

    if (version=='Safari 6') {
        $('.specialist-avatar').css('margin-right', '12px');
    }

    $('#clickForPaulTryon').on('click', function(event){
        event.preventDefault();
        $(this).find('i.fa').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
        $('#aboutPaulTryon').slideToggle();
        $('#aboutPaulTryon img').fadeToggle();
    });

    if (window.location.hash == '#emailsuccess') {
        $('.email-success-message').show();
    };
    $('a.close').on('click', function(){
        $('.email-success-message').fadeOut();
    })
});