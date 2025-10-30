function Clock_UpdateTime()
{
  var field_name = '';
  var edit_id = '';
  var value = '';

  $.ajax({
	 url: '/giacuoc/clock/gettime.php',
	 type: 'post',
	 data: { field:field_name, value:value, id:edit_id },
	 success:function(response){
	     var Tach = response.split(':');
	     $('#Clock_Gio').text(Tach[0]);
	     $('#Clock_Phut').text(Tach[1]);
	     $('#Clock_Network_Error').hide();
	 },
      error: function () {
        $('#Clock_Network_Error').show();
      }
	 
   });
   
   
}
Clock_UpdateTime();
var Clock_UpdateTime_TimeOut;
Clock_UpdateTime_TimeOut = setInterval(function(){Clock_UpdateTime();},30000);





function TickFlash()
{
    $('#Clock_Tick').text(':');
    setTimeout(function(){$('#Clock_Tick').text('');},500);
}
setInterval(function(){TickFlash();},1000);




let ThoiGianDieuChinh = 90;
var TocDoDieuChinh = 2;
var SoLanDieuChinh = 0;
var DongBo_TimeOut;

function DongBoThoiGianVoiPC()
{
    let SaiSo =2;
    let SaiSoAm = -2;
    var date = new Date();
    var h = parseInt(date.getHours()); 
    var m = parseInt(date.getMinutes());
    
    
    var Gio = parseInt($('#Clock_Gio').text());
	var Phut = parseInt($('#Clock_Phut').text());
	
	if (h == Gio)
	{
	    var LechPhut = m - Phut;
	    if ((LechPhut > 0 && LechPhut <= SaiSo) || (LechPhut < 0 && LechPhut >= SaiSoAm))
	    {
	        m = m<10 ? '0' + m : m;
	        $('#Clock_Phut').text(m);
	        clearInterval(Clock_UpdateTime_TimeOut);
	        Clock_UpdateTime_TimeOut = setInterval(function(){Clock_UpdateTime();},30000);
	        //console.log("lech: " + LechPhut + " hien tai: " + m + " dong ho: " + Phut + " " + Gio);
	    }
	}
	
	SoLanDieuChinh = SoLanDieuChinh + 2;
	//console.log('Dang kiem tra lan: ' + SoLanDieuChinh);
	
	if (SoLanDieuChinh >= ThoiGianDieuChinh)
	{
	    clearInterval(DongBo_TimeOut);
	}
}

DongBo_TimeOut = setInterval(function(){DongBoThoiGianVoiPC();},TocDoDieuChinh*1000);










