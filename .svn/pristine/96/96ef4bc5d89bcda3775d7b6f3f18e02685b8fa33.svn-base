(
	function()
	{
		var $ = jQuery.noConflict();
		
		$
		(
			function()
			{
				var tips = "请输入预加密的字符串！";
				var codeinp = $("#codeinp");
				var after = $("#after,#btcopy");
				var afterinp = $("#afterinp");
				var btclear = $("#btclear");
				var btn32b = $("#btn32b");
				var btn32s = $("#btn32s");
				var btn16b = $("#btn16b");
				var btn16s = $("#btn16s");
				var btcopy = $("#btcopy");
				
				codeinp.focus
				(
					function()
					{
						var code = codeinp.val();
						code == tips && (codeinp.val(""));
					}
				).
				blur
				(
					function()
					{
						var code = codeinp.val();
						code == "" && (codeinp.val(tips));
					}
				);
				
				btclear.click
				(
					function()
					{
						codeinp.val("").focus();
						afterinp.val("");
						after.fadeOut();
					}
				);
				
				btn32b.click
				(
					function()
					{
						var code = codeinp.val();
						if(code != tips)
						{
							afterinp.val(hex_md5(code).toUpperCase());
							after.fadeIn();
						}
						else
						{
							showDialog(tips, "alert", "MD5加密提示");
						}
					}
				);
				
				btn32s.click
				(
					function()
					{
						var code = codeinp.val();
						if(code != tips)
						{
							afterinp.val(hex_md5(code).toLowerCase());
							after.fadeIn();
						}
						else
						{
							showDialog(tips, "alert", "MD5加密提示");
						}
					}
				);
				
				btn16b.click
				(
					function()
					{
						var code = codeinp.val();
						if(code != tips)
						{
							afterinp.val(hex_md5(code).toUpperCase().substr(8, 16));
							after.fadeIn();
						}
						else
						{
							showDialog(tips, "alert", "MD5加密提示");
						}
					}
				);
				
				btn16s.click
				(
					function()
					{
						var code = codeinp.val();
						if(code != tips)
						{
							afterinp.val(hex_md5(code).toLowerCase().substr(8, 16));
							after.fadeIn();
						}
						else
						{
							showDialog(tips, "alert", "MD5加密提示");
						}
					}
				);
				
				btcopy.click
				(
					function()
					{
						var aftercode = afterinp.val();
						if(aftercode)
						{
							afterinp.select();
							setCopy(aftercode, "MD5密码已复制，在需要的地方 CTRL + V 即可");
						}
						else
						{
							showDialog("请先加密后再复制MD5密码！", "alert", "MD5加密提示");
						}
					}
				);
			}
		);
	}
)();