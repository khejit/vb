$(document).ready(function(){

    //$('#signup-response').hide();

    $('#newsletter-signup').submit(function(e){

        e.preventDefault();

        if($(this).data('formstatus') !== 'submitting'){

            $.fn.slideFromAbove = function (time, callback){
                var $this = $(this);
                setTimeout(function(){
                    $this.css({
                        opacity: 1,
                        '-webkit-transform': 'translate3d(0,0,0)',
                        'transform': 'translate3d(0,0px,0)'
                    });
                }, time);
                if (typeof callback == 'function') { // make sure the callback is a function
                    callback.call(this); // brings the scope to the callback
                }
                return this;
            };

            $.fn.hideToAbove = function (time,callback){
                var $this = $(this);
                setTimeout(function(){
                    $this.css({
                        opacity: 0,
                        '-webkit-transform': 'translate3d(0,-30,0)',
                        'transform': 'translate3d(0,-30px,0)'
                    });
                }, time);
                if (typeof callback == 'function') { // make sure the callback is a function
                    callback.call(this); // brings the scope to the callback
                }
                return this;
            };

            var form = $(this),
                formData = form.serialize(),
                formUrl = form.attr('action'),
                formMethod = form.attr('method'),
                responseMsg = $('#signup-response'),
                loader = $('.signup-loading'),
                message = '';
            form.data('formstatus','submitting');

            responseMsg
                .text(message);
            loader.addClass('response-waiting');


            //throw new error('test!');

            $.ajax({
                url: formUrl,
                dataType:"json",
                type: formMethod,
                data: formData,
                success:function(data){
                    var responseData = data,
                        klass = '';
                    switch(responseData.status){
                        case 'error':
                            klass = 'response-error';
                            break;
                        case 'success':
                            klass = 'response-success';
                            break;
                    }
                    responseMsg.hideToAbove(1,function(){

                        setTimeout(function() {
                            loader.removeClass('response-waiting');
                        }, 1000);

                        $(this)
                            .addClass(klass)
                            .text(responseData.message)
                            .slideFromAbove(1000,function(){
                                //set timeout to hide response message
                                setTimeout(function(){
                                    responseMsg.hideToAbove(200,function(){
                                        $(this).removeClass(klass);
                                        form.data('formstatus','idle');
                                    });
                                },3000)
                            });

                    });
                }
            })

        }

    })
});