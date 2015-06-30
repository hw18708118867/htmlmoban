$(function(){
     $('.list a').click(function(){
		 $('.list a').removeClass('on')
	     $('.xgt .demo').attr('src',$(this).addClass('on').attr('dimg')).hide();
		 $('.xgt').append('<img class="load" src="/statics/images/l.gif" />');
	 
	 });

	 $('.xgt .demo').bind('load',function(){  
           $('.xgt .load').remove();
		   $(this).show();
     })

});