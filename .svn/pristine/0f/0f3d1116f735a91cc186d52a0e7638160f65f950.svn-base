(
 	function()
	{
		window.onload = function()
		{
			var tips = "将代码粘贴在此进行即可加解密！";
			var codeinp = $("codeinp");
			var btclear = $("btclear");
			var btencode = $("btencode");
			var btdecode = $("btdecode");
			var btcopy = $("btcopy");
			
			codeinp.onfocus = function()
			{
				var code = codeinp.value;
				code == tips && (codeinp.value = "");
			};
			
			codeinp.onblur = function()
			{
				var code = codeinp.value;
				code == "" && (codeinp.value = tips);
			};
			
			btclear.onclick = function()
			{
				codeinp.value = "";
				codeinp.focus();
			};
			
			btencode.onclick = function()
			{
				var code = codeinp.value;
				if(code != tips)
				{
					code = escape(code);
					code && (codeinp.value = code);
				}
				else
				{
					showDialog("请将需要加密的代码填写到输入框后再加密！", "alert", "加密提示");
				}
			};
			
			btdecode.onclick = function()
			{
				var code = codeinp.value;
				if(code != tips)
				{
					code = unescape(code);
					code && (codeinp.value = code);
				}
				else
				{
					showDialog("请将需要加密的代码填写到输入框后再解密！", "alert", "加密提示");
				}
			};
			
			btcopy.onclick = function()
			{
				var codestr = codeinp.value;
				if(codestr != tips)
				{
					codeinp.select();
					setCopy(codestr, "代码已复制，在需要的地方 CTRL + V 即可");
				}
				else
				{
					showDialog("没有代码可以复制哦", "alert", "复制提示");
				}
			};
		}
	}
)();