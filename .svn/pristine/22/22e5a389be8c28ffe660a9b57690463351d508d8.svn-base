(
	function()
	{
		window.onload = function()
		{
			var tips = ["将包含汉字的代码粘在此处，点击转换即可将中文进行转换，从而支持避免中文乱码。", "此处将自动生成测试JS代码，点击此输入框后面的按钮即可测试！"];
			var codeinp = $("codeinp");
			var btclear = $("btclear");
			var codetest = $("codetest");
			var btwrite = $("btwrite");
			var bttest = $("bttest");
			var btcovert = $("btcovert");
			var btcopy = $("btcopy");
			
			codeinp.onfocus = function()
			{
				var code = codeinp.value;
				code == tips[0] && (codeinp.value = "");
			};
			
			codeinp.onblur = function()
			{
				var code = codeinp.value;
				code == "" && (codeinp.value = tips[0]);
			};
			
			btclear.onclick = function()
			{
				codeinp.value = "";
				codetest.value = tips[1];
				codeinp.focus();
			};
			
			btcovert.onclick = function()
			{
				var code = codeinp.value;
				if(code != tips[0])
				{
					code = code.replace
					(
						/[\u0080-\uffff]/g,
						function(str)
						{
							str = str.charCodeAt(0).toString(16);
							return "\\u" + new Array(5 - str.length).join('0') + str;
						}
					);
					
					codeinp.value = code;
					codetest.value = 'alert("' + code.replace(/\s/g, "") + '");';
				}
				else
				{
					showDialog("请将需要包含汉字的代码填写到输入框后，再转换！", "alert", "转换提示");
				}
			};
			
			btcopy.onclick = function()
			{
				var codestr = codeinp.value;
				if(codestr != tips[0] && codetest.value != tips[1])
				{
					codeinp.select();
					setCopy(codestr, "代码已复制，在需要的地方 CTRL + V 即可");
				}
				else
				{
					showDialog("没有代码可以复制哦", "alert", "复制提示");
				}
			};
			
			btwrite.onclick = function()
			{
				if(codeinp.value != tips[0] && codetest.value != tips[1])
				{
					var newwin = window.open('','','');
					newwin.opener = null;
					newwin.document.write('<html><head><title>输出到页面 | W3Cfuns前端开发工具箱</title></head><body></body><script type="text/javascript">document.write("' + codeinp.value.replace(/\s/g, "") + '");</script>');
					newwin.document.close();
				}
				else
				{
					showDialog("请将需要包含汉字的代码填写到输入框并转换后，才能输出到新页面！", "alert", "测试提示");
				}
			}
			
			bttest.onclick = function()
			{
				if(codeinp.value != tips[0] && codetest.value != tips[1])
				{
					eval('alert("' + codeinp.value.replace(/\s/g, "") + '")');
				}
				else
				{
					showDialog("请将需要包含汉字的代码填写到输入框并转换后，才能测试！", "alert", "测试提示");
				}
			};
		}
	}
)();