<HTML>
<HEAD>
<TITLE>자바스크립트를 활용한 체크박스 '모두 체크' 및 '모두 해제' 하기</TITLE>
</HEAD>
<SCRIPT language="javaScript">
	
	function check_onclick(){
		for(var i=0;i<document.frm1.length;i++){
			document.frm1.elements[i].checked=true;	
		}
	}
	
	function clear_onclick(){
		for(var i=0;i<document.frm1.length;i++){
			document.frm1.elements[i].checked=false;	
		}
	}

</SCRIPT>
<BODY>

<FORM name=frm1>
	<input type=button value=모두체크 onclick=check_onclick()><input type=button value=체크해제 onclick=clear_onclick()><br>
	체크박스1 <input type=checkbox name=chck1 value="chck1"><br>
	체크박스2 <input type=checkbox name=chck2 value="chck2"><br>
	체크박스3 <input type=checkbox name=chck3 value="chck3"><br>
</FORM>

</BODY>
</HTML>