(
	function()
	{
		var $ = jQuery.noConflict();
		
		var icon = function()
		{
			var dd = $(".toollist dd");
			var links = dd.find("a");
			var index = 0;
			var len = dd.length;
			
			var time = function()
			{
				if (!$.browser.msie)
				{
					setTimeout
					(
						function()
						{
							if(index < len)
							{
								dd.eq(index).addClass("rotate-in");
								time();
								index++;
							}
						},10
					);
				}
			};
			time();
			
			dd.hover
			(
				function()
				{
					$(this).stop().find("i").fadeIn(300);
				},
				function()
				{
					var _this = $(this);
					setTimeout
					(
						function(){_this.find("i").stop().fadeOut(300)},300
					);
				}
			);
		};
		
		
		$
		(
			function()
			{
				icon();
			}
		);
	}
)();