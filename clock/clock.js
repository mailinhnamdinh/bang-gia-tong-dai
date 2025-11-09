function TickFlash()
{
    $('#Clock_Tick').text(':');
    setTimeout(function(){$('#Clock_Tick').text('');},500);
}
setInterval(function(){TickFlash();},1000);



var TocDoDieuChinh = 2;
var DongBo_TimeOut;

function DongBoThoiGianVoiPC()
{
    var date = new Date();
    var h = parseInt(date.getHours()); 
    var m = parseInt(date.getMinutes());
    document.getElementById('Clock_Gio').innerText = (h < 10 ? '0' : '') + h;
	document.getElementById('Clock_Phut').innerText = (m < 10 ? '0' : '') + m;
}

DongBo_TimeOut = setInterval(function(){DongBoThoiGianVoiPC();},TocDoDieuChinh*1000);










