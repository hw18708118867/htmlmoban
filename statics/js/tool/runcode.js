(
	function()
	{
		window.onload = function()
		{
			var tips = "��HTML����ճ�ڴ˴���������м��ɡ�";
			var codeinp = $("codeinp");
			var btclear = $("btclear");
			var btrun = $("btrun");
			
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
			
			btrun.onclick = function()
			{
				var code = codeinp.value;
				if(code != tips)
				{
					var newwin = window.open('','','');
					newwin.opener = null;
					newwin.document.write(code);
					newwin.document.close();
				}
				else
				{
					showDialog("�뽫��Ҫ���е�HTML��д�������������У�", "alert", "������ʾ");
				}
			};
		}
	}
)();