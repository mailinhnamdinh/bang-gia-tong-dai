var ShowGia = 0;
class MenuButton
{
    constructor(caption, url = "", click_action = "", target = "_seft", width, subMenu)
    {
        this.caption = caption;
        this.url = url;
        this.click_action = click_action;
        this.target = target;
        this.width = width;
        this.subMenu = subMenu;
    }

    render()
    {
        var html = "";
        if (this.click_action == 'a')
        {
            html += '<a href="' + this.url + '" target="' + this.target + '">';
        }
        else
        {
            html += '<a href="javascript:void(0);">';
        }

            html += '<div class="Menu_Button" ';
            if (this.width > 0)
            {
                html += 'style="width:' + this.width + 'px;" ';
            }
            
            if (this.click_action == 'a')
            {
            }
            else
            {
                html += ' onclick="' + this.click_action + '" ';
            }
            
            if (this.subMenu.buttonList.length > 0)
            {
                html += ' onmouseover="$(\'#' + this.subMenu.id + '\').show()" onmouseout="$(\'#' + this.subMenu.id + '\').hide()" ';
            }
            html += '>';
                html += '<table style="width:100%;height:100%;">';
                    html += '<tr>';
                        html += '<td>';
                            html += '<font color="white">' + this.caption + '</font>';
                        html += '</td>';
                        if (this.subMenu.buttonList.length > 0 )
                        {
                            html += '<td style="width:20px;">';
                                    html += '<img src="img/down.png" style="width:10px;">';
                                    html += this.subMenu.render();
                            html += '</td>';
                        }
                    html += '</tr>';
                html += '</table>';
            html += '</div>';
        html += '</a>';
        document.getElementById("menu_td").innerHTML += html;
    }
}


class SubMenuButton extends MenuButton
{
    render()
    {
        let html = "";
        html += '<tr>';
            html += '<td class="SubMenuButton" style="padding:5px;" ';
                if (this.click_action == 'a')
                {
                    html += '<a href="' + this.url + '" target="' + this.target + '">';
                }
                else
                {
                    html += '<a href="javascript:void(0);">';
                }

                html += '<font color="green">' + this.caption + '</font>';
                if (this.click_action == 'a')
                {
                    html += '</a>';
                }
            html += '</td>';            
        html += '</tr>';
        return html;
    }
}


class SubMenu
{
    constructor(id,buttonList,width)
    {
        this.buttonList = buttonList;
        this.id = id;
        this.width = width;
    }
    
    render()
    {
        var html = "";
        html += '<span class="SubMenu" style="';
        if (this.width > 0)
        {
            html += 'width:' + this.width + 'px;';
        }
        html += 'display:none;" id="' + this.id + '">';
            html += '<table style="text-align:left;width:100%;">';
                for (let i=0;i<this.buttonList.length;i++)
                {
                    html += this.buttonList[i].render();
                }
            html += '</table>';
        html += '</span>';
        return html;
    }
}

class Menu
{
    constructor(buttonList)
    {
        this.buttonList = buttonList;
    }
    
    render()
    {
        for (let i=0; i<this.buttonList.length; i++)
        {
            this.buttonList[i].render();
        }
    }
}


const subMenuButton_ListMLO = 
[
    new SubMenuButton("namdinh.mailinhonline.vn","http://namdinh.mailinhonline.vn",
        'a',"_blank",0,[]),
    new SubMenuButton("one.mailinhonline.vn","http://one.mailinhonline.vn",
        'a',"_blank",0,[]),
    new SubMenuButton("web.caresoft.vn/mailinh/","https://web.caresoft.vn/mailinh/",
        'a',"_blank",0,[])
];

const subMenuButton_ListThanhToan =
[
    new SubMenuButton("Các hình thức thanh toán","/thanhtoan/",
        'a',"_blank",0,[]),
    new SubMenuButton("Giá đi Tour","",
        'ToggleGiaCuoc()',"_blank",0,[]),
    new SubMenuButton("Xuất HĐơn","https://mailinh.vn/tin-tuc/huong-dan-xuat-hoa-don-dien-tu-taxi-mai-linh-1060.html",
        'a',"_blank",0,[])
];
    
const subMenuButton_ListATGT =
[
    new SubMenuButton("Ghi nhận vi phạm","http://apps.mailinh.vn/ops/",'a',"_blank",0,[]),
    new SubMenuButton("Tổng hợp vào giấy tổng hợp","#",'javascript:void(0)',"_blank",0,[]),
    new SubMenuButton("Quy định tốc độ","",'ShowTocDo()',"_blank",0,[])
];
    
const subMenuButton_ListKhac =
[
    new SubMenuButton("Ngắt điện khi bị sự cố","https://mlnd.pvcgo.net/hanhchinh/electric/xulysucodien.php",'a',"_blank",0,[])
];
    
    
const menu_Button_List1 = array
[
    new MenuButton("Home",""
    ,'ShowGiaCuoc()',"_blank",0,new SubMenu("",[],0)),    
    new MenuButton("MLO",""
    ,'javascript:void(0)',"",0,
        new SubMenu('SubMenu_MLO',subMenuButton_ListMLO,220)),
    new MenuButton("GPS","http://taxi2.congnghesotoancau.com.vn"
    ,'a',"_blank",0,new SubMenu("",[],0)),
    new MenuButton("Danh bạ","/danhba/"
    ,'a',"_blank",0,new SubMenu("",[],0)),
    new MenuButton("KH gọi xe","/index.php"
    ,'a',"_blank",0,new SubMenu("",[],0)),
    new MenuButton("QLPT","https://qlpt.pvcgo.net"
    ,'a',"_blank",0,new SubMenu("",[],0)),
    new MenuButton("Thanh toán",""
    ,'javascript:void(0)',"",0,
        new SubMenu('SubMenu_ThanhToan',subMenuButton_ListThanhToan,220)),
    new MenuButton("CSKH","/cskh/"
    ,'a',"_blank",0,new SubMenu("",[],0)),
    new MenuButton("Viết tắt","/mlo/map/vietTat/"
    ,'a',"_blank",0,new SubMenu("",[],0)),
    new MenuButton("Theo dõi ATGT",""
    ,'javascript:void(0)',"",0,
        new SubMenu('SubMenu_ATGT',subMenuButton_ListATGT,220)),
    new MenuButton("Khác",""
    ,'javascript:void(0)',"",0,
        new SubMenu('SubMenu_Khac',subMenuButton_ListKhac,200)),
];   
let menu1 = new Menu(menu_Button_List1);
menu1->render();




function ShowGiaCuoc()
{
    $('.NoiDung_Div').hide();
    $('#BangGia_Div').show();
    ShowGia = 0;
}

function ToggleGiaCuoc()
{
    if (ShowGia == 0)
    {
        $('.NoiDung_Div').hide();
        $('#GiaTour_Div').show();
        ShowGia = 1;
    }
    else
    {
        $('.NoiDung_Div').hide();
        $('#BangGia_Div').show();
        ShowGia = 0;
    }
}

function ShowTocDo()
{
    $('.NoiDung_Div').hide();
    $('#QuyDinhTocDo_Div').show();
}