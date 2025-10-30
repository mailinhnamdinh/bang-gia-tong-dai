<style>
    .Menu_Button
    {
        position:relative;
        float:left;
        margin-right:10px;
        margin-top:10px;
        color:white;
        padding:5px;
        text-align:center;
        border-radius:10px;
        border:0px solid rgba(255,255,255,1);
        
    }
    
    @media only screen and (max-width: 500px) { .Menu_Button {padding:2px;margin-right:4px;margin-top:4px;}}
    
    .Menu_Button:hover 
    {
        background:rgba(255,255,255,0.2);
    }
    
    .Menu_Button:active
    {
        background:rgba(255,255,255,0.5);
    }
    
    .SubMenu
    {
        position:absolute;
        top:30px;
        left:2px;
        background:white;
        color:green;
        border-radius:3px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        
        padding:5px;
        z-index:102;
    }
    
    .SubMenu_Button:hover 
    {
        background:rgba(0,255,0,0.2);
    }
    
    .SubMenu_Button:active
    {
        background:rgba(0,255,0,0.6);
        color:white;
    }
    
</style>
<?php 
    class Menu_Button
    {
        public $Caption;
        public $Url;
        public $Click_Action;
        public $Target;
        public $Width;
        public $SubMenu;
            
        
        public function __construct($Caption,$Url,$Click_Action,$Target,$Width,$SubMenu)
        {
            $this->Caption = $Caption;
            $this->Url = $Url;
            $this->Click_Action = $Click_Action;
            $this->Target = $Target;
            $this->Width = $Width;
            $this->SubMenu = $SubMenu;
        }
        
        public function Show()
        {
            if ($this->Click_Action == 'a')
            {
                echo '<a href="'.$this->Url.'" target="'.$this->Target.'">';
            }
            else
            {
                echo '<a href="javascript:void(0);">';
            }
                
                echo '<div class="Menu_Button" ';
                    if ($this->Width > 0)
                    {
                        echo 'style="width:'. $this->Width .'px;" ';
                    }
                    
                    if ($this->Click_Action == 'a')
                    {
                    }
                    else
                    {
                        echo ' onclick="' . $this->Click_Action . '" ';
                    }
                    
                    if (count($this->SubMenu->Button_List) > 0 )
                    {
                        echo ' onmouseover="$(\'#'.$this->SubMenu->Id.'\').show()" onmouseout="$(\'#'.$this->SubMenu->Id.'\').hide()" ';
                    }
                    echo '>';
                    echo '<table style="width:100%;height:100%;">';
                        echo '<tr>';
                            echo '<td>';
                                echo '<font color="white">'.$this->Caption.'</font>';
                            echo '</td>';
                            if (count($this->SubMenu->Button_List) > 0 )
                                {
                            echo '<td style="width:20px;">';
                                
                                    echo '<img src="img/down.png" style="width:10px;">';
                                    $this->SubMenu->Show();
                            echo '</td>';
                                }
                        echo '</tr>';
                    echo '</table>';
                echo '</div>';
            echo '</a>';
        }
    }
    
    
    class Menu
    {
        public $Button_List;
        public function __construct($Button_List)
        {
            $this->Button_List = $Button_List;
        }
        
        public function Show()
        {
            for ($i=0;$i<count($this->Button_List);$i++)
            {
                $this->Button_List[$i]->Show();
            }
        }
    }
    
    class SubMenu_Button extends Menu_Button
    {
        public function Show()
        {
            echo'<tr>';
                echo '<td class="SubMenu_Button" style="padding:5px;" ';
                    if ($this->Click_Action !== 'a')
                    {
                        echo ' onclick="' . $this->Click_Action . '" ';
                    }
                    echo '>';
                    if ($this->Click_Action == 'a')
                    {
                            echo '<a href="'.$this->Url.'" target="'.$this->Target.'">';
                    }
                    echo '<font color="green">'.$this->Caption.'</font>';
                    if ($this->Click_Action == 'a')
                    {
                        echo '</a>';
                    }
                echo '</td>';
                
            echo '</tr>';
        }
    }
    
    
    class SubMenu
    {
        public $Button_List;
        public $Id;
        public $Width;
        public function __construct($Id,$Button_List,$Width)
        {
            $this->Button_List = $Button_List;
            $this->Id = $Id;
            $this->Width = $Width;
        }
        
        public function Show()
        {
            echo '<span class="SubMenu" style="';
            if ($this->Width > 0)
            {
                echo 'width:'. $this->Width .'px;';
            }
            echo 'display:none;" id="'.$this->Id.'">';
                echo '<table style="text-align:left;width:100%;">';
                    for ($i=0;$i<count($this->Button_List);$i++)
                    {
                        $this->Button_List[$i]->Show();
                    }
                echo '</table>';
            echo '</span>';
        }
    }


    $SubMenu_Button_ListMLO = array(
        
        new SubMenu_Button("namdinh.mailinhonline.vn","http://namdinh.mailinhonline.vn",
            'a',"_blank",0,[]),
        new SubMenu_Button("one.mailinhonline.vn","http://one.mailinhonline.vn",
            'a',"_blank",0,[]),
        new SubMenu_Button("web.caresoft.vn/mailinh/","https://web.caresoft.vn/mailinh/",
            'a',"_blank",0,[])
    );

    $SubMenu_Button_ListThanhToan = array(
        
        new SubMenu_Button("Các hình thức thanh toán","/thanhtoan/",
            'a',"_blank",0,[]),
        new SubMenu_Button("Giá đi Tour","",
            'ToggleGiaCuoc()',"_blank",0,[]),
        new SubMenu_Button("Xuất HĐơn","https://mailinh.vn/tin-tuc/huong-dan-xuat-hoa-don-dien-tu-taxi-mai-linh-1060.html",
            'a',"_blank",0,[])
    );
    
    $SubMenu_Button_ListATGT = array(
        new SubMenu_Button("Ghi nhận vi phạm","http://apps.mailinh.vn/ops/",'a',"_blank",0,[]),
        new SubMenu_Button("Tổng hợp vào giấy tổng hợp","#",'javascript:void(0)',"_blank",0,[]),
        new SubMenu_Button("Quy định tốc độ","",'ShowTocDo()',"_blank",0,[])
    );
    
    $SubMenu_Button_ListKhac = array(
        new SubMenu_Button("Ngắt điện khi bị sự cố","https://mlnd.pvcgo.net/hanhchinh/electric/xulysucodien.php",'a',"_blank",0,[])
    );
    
    
    $Menu_Button_List1 = array(
        new Menu_Button("Home",""
        ,'ShowGiaCuoc()',"_blank",0,new SubMenu("",[],0)),
        new Menu_Button("MLO",""
        ,'javascript:void(0)',"",0,
            new SubMenu('SubMenu_MLO',$SubMenu_Button_ListMLO,220)),

        new Menu_Button("GPS","http://taxi2.congnghesotoancau.com.vn"
        ,'a',"_blank",0,new SubMenu("",[],0)),
        new Menu_Button("Danh bạ","/danhba/"
        ,'a',"_blank",0,new SubMenu("",[],0)),
        new Menu_Button("KH gọi xe","/index.php"
        ,'a',"_blank",0,new SubMenu("",[],0)),
        new Menu_Button("QLPT","https://qlpt.pvcgo.net"
        ,'a',"_blank",0,new SubMenu("",[],0)),
        new Menu_Button("Thanh toán",""
        ,'javascript:void(0)',"",0,
            new SubMenu('SubMenu_ThanhToan',$SubMenu_Button_ListThanhToan,220)),
        new Menu_Button("CSKH","/cskh/"
        ,'a',"_blank",0,new SubMenu("",[],0)),
        new Menu_Button("Viết tắt","/mlo/map/vietTat/"
        ,'a',"_blank",0,new SubMenu("",[],0)),
        new Menu_Button("Theo dõi ATGT",""
        ,'javascript:void(0)',"",0,
            new SubMenu('SubMenu_ATGT',$SubMenu_Button_ListATGT,220)),
        new Menu_Button("Khác",""
        ,'javascript:void(0)',"",0,
            new SubMenu('SubMenu_Khac',$SubMenu_Button_ListKhac,200)),
    );
    

    $Menu1 = new Menu($Menu_Button_List1);
?>

    <?php $Menu1->Show(); ?>
<script>
    var ShowGia = 0;
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
    
</script>