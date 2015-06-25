// JavaScript Document

Cufon.replace('h2', { fontFamily: 'Textbook' });
Cufon.replace('h3', { fontFamily: 'Textbook' });
Cufon.replace('h4', { fontFamily: 'Textbook' });


$(document).ready(function() {
   			$('.in-splash-services').cycle({fx:'fade', timeout:8000,  speed:1000, pager:'.splash-control', pagerAnchorBuilder: function(idx, slide) { return '<li class="in-splash-paginate-no"><a href="#"></a></li>'; } });
});


$(document).ready(function(){ 
        $(document).pngFix(); 
}); 

$(document).ready(function() {
	$('input.ge-signup-input').focus(function() {
		$(this).removeClass("ge-signup-input-bg").addClass("ge-signup-input-bg-focus");
	});

	$('input.ge-signup-input').blur(function() {
		$(this).removeClass("ge-signup-input-bg-focus").addClass("ge-signup-input-bg");
	});

	$('input.bl-search-input').focus(function() {
		$(this).removeClass("bl-search-bg").addClass("bl-search-bg-focus");
	});

	$('input.bl-search-input').blur(function() {
		$(this).removeClass("bl-search-bg-focus").addClass("bl-search-bg");
	});
	
	$('input.bl-input').focus(function() {
		$(this).removeClass("bl-input").addClass("bl-input-focus");
	});

	$('input.bl-input').blur(function() {
		$(this).removeClass("bl-input-focus").addClass("bl-input");
	});
	
	$('input.sp-he-input').focus(function() {
		$(this).removeClass("sp-he-input").addClass("sp-he-input-focus");
	});

	$('input.sp-he-input').blur(function() {
		$(this).removeClass("sp-he-input-focus").addClass("sp-he-input");
	});
	
	$('textarea.sp-he-textarea').focus(function() {
		$(this).removeClass("sp-he-textarea").addClass("sp-he-textarea-focus");
	});

	$('textarea.sp-he-textarea').blur(function() {
		$(this).removeClass("sp-he-textarea-focus").addClass("sp-he-textarea");
	});
	
	$('select.sp-he-select').focus(function() {
		$(this).removeClass("sp-he-select").addClass("sp-he-select-focus");
	});

	$('select.sp-he-select').blur(function() {
		$(this).removeClass("sp-he-select-focus").addClass("sp-he-select");
	});
	
	$('input.sp-pr-or-input').focus(function() {
		$(this).removeClass("sp-pr-or-input").addClass("sp-pr-or-input-focus");
	});

	$('input.sp-pr-or-input').blur(function() {
		$(this).removeClass("sp-pr-or-input-focus").addClass("sp-pr-or-input");
	});
	
	$('textarea.sp-pr-or-textarea').focus(function() {
		$(this).removeClass("sp-pr-or-textarea").addClass("sp-pr-or-textarea-focus");
	});

	$('textarea.sp-pr-or-textarea').blur(function() {
		$(this).removeClass("sp-pr-or-textarea-focus").addClass("sp-pr-or-textarea");
	});
	
});

$(document).ready(function(){
	$(".scroll").click(function(event){
		//prevent the default action for the click event
		event.preventDefault();
		
		//get the full url - like mysitecom/index.htm#home
		var full_url = this.href;
		
		//split the url by # and get the anchor target name - home in mysitecom/index.htm#home
		var parts = full_url.split("#");
		var trgt = parts[1];
		
		//get the top offset of the target anchor
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;
		
		//goto that anchor by setting the body scroll top to anchor top
		$('html, body').animate({scrollTop:target_top}, 500);
	});
});


function twitterCallback2(C){
	var A=[];for(
				 var D=0;D<C.length;D++){
		var E=C[D].user.screen_name;var B=C[D].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g,
		function(F){
			return'<a href="'+F+'" target="_blank">'+F+"</a>"}).replace(/\B@([_a-z0-9]+)/ig,
			function(F){
				return F.charAt(0)+'<a href="http://www.twitter.com/'+F.substring(1)+'">'+F.substring(1)+"</a>"});A.push("<li><p class='ge-twitter-date'>"+relative_time(C[D].created_at)+'</p><p>'+B+"</p></li>")}document.getElementById("ge-twitter-item").innerHTML=A.join("")
			}

function relative_time(time_value) {
  var values = time_value.split(" ");
  time_value = values[1] + " " + values[2] + " " + values[5] + " " + values[3];
  var parsed_date = new Date();
  parsed_date.setTime(Date.parse(time_value));  
  var months = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',
	'Sep', 'Oct', 'Nov', 'Dec');
  var m = parsed_date.getMonth();
  var postedAt = '';
  postedAt = months[m];
  postedAt += " "+ parsed_date.getDate();
  postedAt += ","
  postedAt += " "+ parsed_date.getFullYear();
  return postedAt;
}