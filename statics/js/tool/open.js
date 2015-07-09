(
 	function()
	{
		window.onload = function()
		{
			var flag = false;
			var code = "";
			var url = $("url");
			var topinp = $("topinp");
			var leftinp = $("leftinp");
			var widthinp = $("widthinp");
			var heightinp = $("heightinp");
			var wintype = $("wintype");
			var toolbar = $("toolbar");
			var locationbar = $("locationbar");
			var statusbar = $("statusbar");
			var menubar = $("menubar");
			var directoriesbt = $("directoriesbt");
			var resizable = $("resizable");
			var scrollbar = $("scrollbar");
			var codeinp = $("codeinp");
			var btclear = $("btclear");
			var btrun = $("btrun");
			var btcopy = $("btcopy");
			
			var getCode = function()
			{
				code = 'window.open("' + ("http://" + url.value.replace(/http:\/\//, "")) + '", "' + (!wintype.checked ? "newwindow" : "_self");
				if(!!topinp.value || !!leftinp.value || !!widthinp.value || !!heightinp.value || toolbar.checked || locationbar.checked || directoriesbt.checked || statusbar.checked || menubar.checked || resizable.checked || scrollbar.checked)
				{
					var codeArr = [];
					topinp.value && codeArr.push("top=" + topinp.value);
					leftinp.value && codeArr.push("left=" + leftinp.value);
					widthinp.value && codeArr.push("width=" + widthinp.value);
					heightinp.value && codeArr.push("height=" + heightinp.value);
					toolbar.checked && codeArr.push("toolbar=1");
					locationbar.checked && codeArr.push("location=1");
					directoriesbt.checked && codeArr.push("directories=1");
					statusbar.checked && codeArr.push("status=1");
					menubar.checked && codeArr.push("menubar=1");
					resizable.checked && codeArr.push("resizable=1");
					scrollbar.checked && codeArr.push("scrollbars=1");
					
					code += '", "'+ codeArr.join(", ");
				}
				return code + '");';
			};
			
			url.onblur = wintype.onclick = topinp.onblur = leftinp.onblur = widthinp.onblur = heightinp.onblur = toolbar.onclick = locationbar.onclick = directoriesbt.onclick = statusbar.onclick = menubar.onclick = resizable.onclick = scrollbar.onclick = function(){codeinp.value = getCode();};
			url.onblur = function(){url.value = ("http://" + url.value.replace(/http:\/\//, "")); codeinp.value = getCode();};
			
			btclear.onclick = function()
			{
				wintype.value = topinp.value = leftinp.value = widthinp.value = heightinp.value = codeinp.value = "";
				url.value = "http://";
				toolbar.checked = locationbar.checked = directoriesbt.checked = statusbar.checked = menubar.checked = resizable.checked = scrollbar.checked = false;
			};
			btrun.onclick = function(){eval(codeinp.value);};
			btcopy.onclick = function()
			{
				if(codeinp.value)
				{
					codeinp.select();
					setCopy(codeinp.value, "代码已复制，在需要的地方 CTRL + V 即可");
				}
				else
				{
					showDialog("没有可复制的代码！", "alert", "操作提示");
				}
			}
		}
	}
)();