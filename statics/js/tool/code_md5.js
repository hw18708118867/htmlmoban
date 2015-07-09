(
	function()
	{
		var $ = jQuery.noConflict();
		
		$
		(
			function()
			{
				var tips = "������Ԥ���ܵ��ַ�����";
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
							showDialog(tips, "alert", "MD5������ʾ");
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
							showDialog(tips, "alert", "MD5������ʾ");
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
							showDialog(tips, "alert", "MD5������ʾ");
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
							showDialog(tips, "alert", "MD5������ʾ");
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
							setCopy(aftercode, "MD5�����Ѹ��ƣ�����Ҫ�ĵط� CTRL + V ����");
						}
						else
						{
							showDialog("���ȼ��ܺ��ٸ���MD5���룡", "alert", "MD5������ʾ");
						}
					}
				);
			}
		);
	}
)();