<style>
    .BangGia_Table {border:1px solid green;}
    .BangGia_Table td {border:1px solid green;text-align:center;} 
</style>
<div style="float:left;max-width:400px;border-radius:5px;padding:0px;margin-top:15px;background:white;border:0.1px solid white;position:relative;">
    <center>  
        <div style="margin:20px;"><center>
            <table style="width:100%;">
                <tr>
                    <td>
                        <font color="green">Cước 1 chiều:</font>
                    </td>
                    <td>
                        <font color="green">Cước chiều đi + về:</font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="motchieu" style="font-weight:bold;padding:8px;border-radius:5px;width:90%;font-size:20px;" readonly />
                    </td>
                    <td>
                        <input type="text" id="haichieu" style="font-weight:bold;padding:8px;border-radius:5px;width:90%;font-size:20px;" readonly />  
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> <center>
                        <table style="width:95%;">
                            <tr>
                                <td style="width:35%;"></td>
                                <td>
                                    <input type="text" id="quangduong" maxlength="6" style="font-weight:bold;border:0.5px green solid;padding:8px;border-radius:5px;width:82%;color:green;font-size:24px;text-align:center;" onkeyup="tinhcuoc();"/>
                                </td>
                                <td style="width:35%;"><font color="green"> km</font></td>
                            </tr>
                        </table></center>
                    </td>
                </tr>
            </table>
            
    	    <table style="width:100%;">
                <tr>
            	  <td style="width:33%;"><center>
            	      <input type="radio" style="display:none;" name="hx" id="hieuxekia" value="kia" checked onclick="tinhcuoc();">
            	        <div class="DongXe_Button activebt" id="btkia" onClick="setkia();" style="height:65px;">
            	            <svg class="Oto4Cho" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" x="0" y="0" width="120" height="70" viewbox = "0 0 120 70">
                                <g id="Oto4c1">
                            		<path fill="#6fbf06"  id="Xe4Cho" stroke="none" d="M15,25 m3,-6 c6 -10, 8 -10, 12  -14 c10 -4,10 -4,35 -3 c8 1,10 3,27 20 c10 0,20 5,22 10 v14 h-19 a10,10 1,0,0 -24,0 h-28 a10,10 1,0,0 -24,0 h-5 v-20"/>
                            		
                            		<path class="KinhXe KinhXe4Cho" fill="#2e2e2b" d="M35,22 c0 -5, -5 -13, 18 -15 l2,15"/>
                            		<path class="KinhXe KinhXe4Cho" fill="#2e2e2b" d="M59,22 l-2,-15 c9 0, 17 0, 25 15	"/>
                            		
                            		<g id="Oto4c_BanhXe">
                            			<circle cx="31" cy="45" r="10.5" fill="#2e2e2b"/>
                            			<circle cx="31" cy="45" r="6.5" fill="#a7a79d"/> 
                            			<circle cx="31" cy="45" r="2" fill="#707068"/>
                            		</g>
                            		<use xlink:href="#Oto4c_BanhXe" x="52" y="0" />
                            		<path fill="#ffefbd" d="M100,28 s10,-3 10,5 l-8,-2"/>
                            	</g>
                            	<text fill="rgba(0,0,0,0.6)" x="33" y="68" font-size="16" id="Xe4Cho_Caption">Xe 4 chỗ</text>
                            </svg>
            	        </div>
            	  </td>
            	  <td style="width:33%;text-align:center;">
            	      <input type="radio" style="display:none;" name="hx" id="hieuxevios" value="vios" onclick="tinhcuoc();"><center>
            	        <div class="DongXe_Button inactivebt" id="btvios" onClick="setvios();" style="height:65px;">
            	        
            	        <svg class="Oto5Cho" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" x="0" y="0" width="120" height="70" viewbox = "0 0 120 70">
                        	<g id="Oto4c1">
                        		<path fill="#6fbf06"  id="Xe5Cho" stroke="none" d="M5,25 c1 -5, 5 -5,13 -6 c6 -10, 8 -10, 12  -14 c10 -4,10 -4,35 -3 c8 1,10 3,27 20 c10 0,20 5,22 10 v14 h-19 a10,10 1,0,0 -24,0 h-28 a10,10 1,0,0 -24,0 h-15 v-20"/>
                        		
                        		<path class="KinhXe KinhXe5Cho" fill="#2e2e2b" d="M35,22 c0 -5, -5 -13, 18 -15 l2,15"/>
                        		<path class="KinhXe KinhXe5Cho" fill="#2e2e2b" d="M59,22 l-2,-15 c9 0, 17 0, 25 15	"/>
                        		
                        		<g id="Oto5c_BanhXe">
                        			<circle cx="31" cy="45" r="10.5" fill="#2e2e2b"/>
                        			<circle cx="31" cy="45" r="6.5" fill="#a7a79d"/>
                        			<circle cx="31" cy="45" r="2" fill="#707068"/>
                        		</g>
                        		<use xlink:href="#Oto5c_BanhXe" x="52" y="0" />
                        		<path fill="#ffefbd" d="M100,28 s10,-3 10,5 l-8,-2"/>
                        	</g>
                        	<text fill="rgba(0,0,0,0.6)" x="30" y="68" font-size="14" id="Xe5Cho_Caption">Xe 5 chỗ</text>
                        </svg>
            	    </div>
            	  </td>
            	  <td style="width:34%;text-align:center;"><center>
            	      <input type="radio" style="display:none;" name="hx" id="hieuxeinnova" value="innova" onclick="tinhcuoc();">
                	    <div class="DongXe_Button inactivebt" id="btinnova" onClick="setinnova();" style="height:65px;">
                	          <svg  class="Oto7Cho" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" x="0" y="0" width="100" height="70" viewbox = "0 0 100 70">
                            	<g id="OTo7c1">
                            		<path id="Xe7Cho" fill="#6fbf06" 
                            		d="M15,40 
                            		l-3,-2
                            		c-2 -2, -1 -1 , -2 -3 
                            		l0,-17 
                            		c 5 -12, 8 -12 , 12 -15
                            		l28,0
                            		c8 0, 12 3 , 22 12
                            		c10 0, 15 2, 18 8 
                            		l2,12 l-4 4 l-3 0
                            		c2 -14, -24 -22, -24,2
                            		l-23,-1
                            		c5 -16, -24 -22, -23,0
                            		"/>
                            		
                            		<path class="KinhXe KinhXe7Cho" fill="#2e2e2b" d="M39,19 l-10,0 c-2 0, -8 0, 0 -11 l8,0	l2,11" />
                            		
                            		<path class="KinhXe KinhXe7Cho" fill="#2e2e2b" d="M46,19 l-2,-11 c9 0, 17 0, 19 10.5"/>
                            		<path fill="#ffefbd" d="M80,17 s10,-3 10,5 l-8,-2"/>
                            		
                            		<g id="OTo7c_BanhXe">
                            			<circle cx="27" cy="37" r="10" fill="#2e2e2b"/>
                            			<circle cx="27" cy="37" r="5" fill="#a7a79d"/>
                            			<circle cx="27" cy="37" r="2" fill="#707068"/>
                            		</g>
                            		<use xlink:href="#OTo7c_BanhXe" x="46" y="0" />
                            	</g>
                            	<text fill="rgba(0,0,0,0.6)" x="30" y="60" font-size="12" id="Xe7Cho_Caption">Xe 7 chỗ</text>
                            </svg>
            	        </div>
            	  </td>
            	</tr>
            </table>
            <table style="width:100%;z-index:10;">
                <tr>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km10" onClick="tinhcuoccd(10);">10</div>
                    </td>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km20"  onClick="tinhcuoccd(20);">20</div>
                    </td>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km30"  onClick="tinhcuoccd(30);">30</div>
                    </td>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km40"  onClick="tinhcuoccd(40);">40</div>
                    </td>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km50"  onClick="tinhcuoccd(50);">50</div>
                    </td>
                    
                </tr>
                
                <tr>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km60"  onClick="tinhcuoccd(60);">60</div>
                    </td>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km70"  onClick="tinhcuoccd(70);">70</div>
                    </td>
                    <td class="Km_Td">
        		        <div class="Km_ChonSan" id="km80"  onClick="tinhcuoccd(80);">80</div>
                    </td>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km90"  onClick="tinhcuoccd(90);">90</div>
                    </td>
                    <td class="Km_Td">
                        <div class="Km_ChonSan" id="km100"  onClick="tinhcuoccd(100);">100</div>
                    </td>
                    
                </tr>
                
                <tr>
                    <td colspan="5"><center>
                        <table style="width:83%;">
                            <tr>
                                <td class="Km_Td2">
                                    <div class="Km_ChonSan" id="km120"  onClick="tinhcuoccd(120);">120</div>
                                </td>
                                <td class="Km_Td2">
                                    <div class="Km_ChonSan" id="km150"  onClick="tinhcuoccd(150);">150</div>
                                </td>
                                <td class="Km_Td2">
                                    <div class="Km_ChonSan" id="km180"  onClick="tinhcuoccd(180);">180</div>
                                </td>
                                <td class="Km_Td2">
                                    <div class="Km_ChonSan" id="km200"  onClick="tinhcuoccd(200);">200</div>
                                </td>
                            </tr>
                        </table>
                        </center>
                    </td>
                </tr>
    		</table>
    	</div>
    	<div style="position:absolute;bottom:0px;left:5px;width:90%;">
    	    <marquee scrollamount="3">Cuốc khách đi 2 chiều được <b>giảm giá 70% chiều ngắn, miễn phí 2 tiếng giờ chờ </b> nếu mỗi chiều từ <b>25km trở lên</b>. Nếu cuốc khách 2 chiều đi về trong ngày, mỗi chiều <b>70km trở lên</b>, được miễn phí hoàn toàn giờ chờ.Cuốc khách 2 chiều (mỗi chiều từ 25km trở lên) xuất phát từ 19h00 tối hôm nay đến 4h00 sáng ngày mai được miễn hoàn toàn giờ chờ đến 4h00 sáng. sau 4h00, tính tiền giờ chờ 30.000đ/giờ.</marquee>
    	</div>
    </center>
</div>


<script>
    function formatkq(gia)
    {
    	var giatext = gia.toString();
    	var kq="";
    	if (giatext.length<4){kq = giatext;}
    	else if(giatext.length<7){kq = giatext.substring(0,giatext.length-3) + "." + giatext.substring(giatext.length-3,giatext.length);}
    	else if(giatext.length<10){kq = giatext.substring(0,giatext.length-6) + "." + giatext.substring(giatext.length-6,giatext.length-6+3) + "." + giatext.substring(giatext.length-3,giatext.length);}
    	return kq;
    }
    function tinhcuoccd(kmm)
    {
    	document.getElementById('quangduong').value = kmm;
    	tinhcuoc();
    }
    function setkia()
    {
    	document.getElementById('hieuxekia').checked = true;
    	tinhcuoc();
    }
    function setvios()
    {
    	document.getElementById('hieuxevios').checked = true;
    	tinhcuoc();
    	
    }
    function setinnova()
    {
    	document.getElementById('hieuxeinnova').checked = true;
    	tinhcuoc();
    }
    
    function tinhcuoc() 
    {
    	var hieuxe;
    	if (document.getElementById('hieuxekia').checked) {hieuxe = document.getElementById('hieuxekia').value;}
    	if (document.getElementById('hieuxevios').checked) {hieuxe = document.getElementById('hieuxevios').value;}
    	if (document.getElementById('hieuxeinnova').checked) {hieuxe = document.getElementById('hieuxeinnova').value;}
    	var giamocua, gia20,gia21;
    	if (hieuxe=="kia"){var KmMoCua = 1.4;giamocua=20;gia20=12.8;gia21=11.4;}
    	if (hieuxe=="vios"){var KmMoCua = 1.3;giamocua=20;gia20=14.6;gia21=11.5;}
    	if (hieuxe=="innova"){var KmMoCua = 1.2;giamocua=20;gia20=16.2;gia21=14.6;}
    	var buocnhay1 = Math.round(2000/gia20,0);
    	var buocnhay2 = Math.round(2000/gia21,0);
    	var culy3 = document.getElementById('quangduong').value;
    	
    	
        if (!isNaN(culy3)) 
    	{
    	    if (culy3.length ==0)
    	    {
    	        $('#motchieu').val('');
    	        $('#haichieu').val('');
    	        $('#motchieu').addClass("Input_Empty");
        	    $('#motchieu').removeClass("Input_NotEmpty");
        	    $('#haichieu').addClass("Input_Empty");
        	    $('#haichieu').removeClass("Input_NotEmpty");
    	    }
    	    else
    	    {
        		var culy2= eval(culy3);
        		if (culy2 <=KmMoCua)
        		{
        			var gia1chieu=giamocua*1000;
        		}
        		else
        		{
        			if (culy2 <=20)
        			{
        				var sobuocnhay = parseInt((culy2-KmMoCua)*1000/buocnhay1);
        				var BuocNhayTruoc = 0;
        				if ((culy2-KmMoCua)*1000/buocnhay1 - sobuocnhay > 0) {BuocNhayTruoc = 2000;}
        				var gia1chieu= giamocua*1000 + sobuocnhay*2000 + BuocNhayTruoc;
        				//alert (sobuocnhay);
        				//if ((culy2-KmMoCua)*1000-sobuocnhay*buocnhay1>5){gia1chieu=gia1chieu+2000;}
        			}
        			else
        			{
        				var sobuocnhay1 = parseInt((20-KmMoCua)*1000/buocnhay1);
        				var gia1chieu=giamocua*1000 + sobuocnhay1*2000;
        				var sobuocnhay2 = parseInt((culy2-(KmMoCua+sobuocnhay1*buocnhay1/1000))*1000/buocnhay2);
        				var BuocNhayTruoc2 = 0;
        				if ((culy2-(KmMoCua+sobuocnhay1*buocnhay1/1000))*1000/buocnhay2 - sobuocnhay2 > 0) {BuocNhayTruoc2 = 2000;}
        				gia1chieu=gia1chieu + sobuocnhay2*2000 + BuocNhayTruoc2;
        				//if ((culy2-KmMoCua)*1000-sobuocnhay1*buocnhay1-sobuocnhay2*buocnhay2>5){gia1chieu=gia1chieu+2000;}
        			}
        		}
        		if (!isNaN(gia1chieu)){document.getElementById('motchieu').value=formatkq(gia1chieu);}
        		
        		if (culy2>=25)
        		{
        		    document.getElementById('haichieu').value = formatkq(parseInt((gia1chieu*1.3)/1000)*1000);
        		    $('#haichieu').addClass("Input_NotEmpty");
        	        $('#haichieu').removeClass("Input_Empty");
        		}
        		else
        		{
        		    document.getElementById('haichieu').value = "";
        		    $('#haichieu').addClass("Input_Empty");
    	            $('#haichieu').removeClass("Input_NotEmpty");
        		}
        		$('#motchieu').addClass("Input_NotEmpty");
        	    $('#motchieu').removeClass("Input_Empty");
        	    
    	    }
    	}
    	else
    	{
    	    $('#motchieu').val('');
    	    $('#haichieu').val('');
    	    $('#motchieu').addClass("Input_Empty");
    	    $('#motchieu').removeClass("Input_NotEmpty");
    	    $('#haichieu').addClass("Input_Empty");
    	    $('#haichieu').removeClass("Input_NotEmpty");
    	}
    }
    
    
    
    
    
    $(document).ready(function() {
        $("#btkia").click(function()
			 {
				$("#btkia").removeClass("inactivebt");
				$("#btkia").addClass("activebt");
				
				$("#btvios").removeClass("activebt");
				$("#btvios").addClass("inactivebt");
				$("#btinnova").removeClass("activebt");
				$("#btinnova").addClass("inactivebt");
				
				$("#Xe7Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe5Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe4Cho").css('fill','#6fbf06');
				
				$(".KinhXe").css('fill',"white");
				$(".KinhXe4Cho").css('fill',"#2e2e2b");
				
				
				$('#Oto4c_BanhXe').css('opacity','1');
				$('#Oto5c_BanhXe').css('opacity','0.2');
				$('#OTo7c_BanhXe').css('opacity','0.2');
				
				$('#Xe4Cho_Caption').css('opacity','1');
				$('#Xe5Cho_Caption').css('opacity','0.2');
				$('#Xe7Cho_Caption').css('opacity','0.2');
			 });
			 
	    $("#btkia").click();
	        
		$("#btvios").click(function()
	  {
		$("#btkia").removeClass("activebt");
		$("#btkia").addClass("inactivebt");
		
		$("#btvios").removeClass("inactivebt");
		$("#btvios").addClass("activebt");
		$("#btinnova").removeClass("activebt");
		$("#btinnova").addClass("inactivebt");
		
		$("#Xe4Cho").css('fill','rgba(0,0,0,0.1)');
		$("#Xe7Cho").css('fill','rgba(0,0,0,0.1)');
		$("#Xe5Cho").css('fill','#6fbf06');
		
		$(".KinhXe").css('fill',"white");
		$(".KinhXe5Cho").css('fill',"#2e2e2b");
		
		$('#Oto4c_BanhXe').css('opacity','0.2');
		$('#Oto5c_BanhXe').css('opacity','1');
		$('#OTo7c_BanhXe').css('opacity','0.2');
		
		$('#Xe4Cho_Caption').css('opacity','0.2');
		$('#Xe5Cho_Caption').css('opacity','1');
		$('#Xe7Cho_Caption').css('opacity','0.2');
	  });
		$("#btinnova").click(function()
			  {
				$("#btkia").removeClass("activebt");
				$("#btkia").addClass("inactivebt");
				
				$("#btvios").removeClass("activebt");
				$("#btvios").addClass("inactivebt");
				$("#btinnova").removeClass("inactivebt");
				$("#btinnova").addClass("activebt");
				
				$("#Xe4Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe5Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe7Cho").css('fill','#6fbf06');
				
				$(".KinhXe").css('fill',"white");
				$(".KinhXe7Cho").css('fill',"#2e2e2b");
				
				$('#Oto4c_BanhXe').css('opacity','0.2');
				$('#Oto5c_BanhXe').css('opacity','0.2');
				$('#OTo7c_BanhXe').css('opacity','1');
				
				$('#Xe4Cho_Caption').css('opacity','0.2');
				$('#Xe5Cho_Caption').css('opacity','0.2');
				$('#Xe7Cho_Caption').css('opacity','1');
			  });
			  
    })
</script>