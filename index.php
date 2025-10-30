<!DOCTYPE html>
<html xmlns="”http://www.w3.org/1999/xhtml”" lang="”vi”" xml:lang="”vi”">
<header>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>ML NAM ĐỊNH</title>
    <meta name="keywords" content="pvc PLUS, TAXI MAI LINH">
    <meta name="description" content="ACTION PROSET">
    <meta property="og:title" content="TAXI Mai linh Nam Định - Bảng giá cước">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Tra giá cước đi taxi và các dịch vụ của Mai Linh Nam Định">
    <meta property="og:image" content="#img/logo/icon-share.png">
    <meta property="og:site_name" content="Tra giá cước đi taxi và các dịch vụ của Mai Linh Nam Định">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="icon" href="https://mailinh.vn/favicon.ico">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/giacuoc/style/style.php'); ?>
</header>

<body style="font-family: 'MainFont', Arial, sans-serif;">		  
    <div id="Top_Banner" style="width:100%;">
        <table style="width:100%;">
            <tr>
                <td style="width:200px;">
                    <img src="img/logo.png" style="height:50px;">
                </td>
                <td style="color:white;text-align:left;">
                    <div class="TenCongTy">
                        CÔNG TY TRÁCH NHIỆM HỮU HẠN MAI LINH NAM ĐỊNH<br>
                        Số 186 Thanh Bình - P. Nam Định - Tỉnh Ninh Bình
                    </div>
                </td>
                <td>
                    <?php include ($_SERVER['DOCUMENT_ROOT'].'/giacuoc/clock/clock.php'); ?>
                </td>
                <td style="width:80px;">
                    <img src="img/tongdaitaxi1055.svg" style="height:40px;">
                </td>
            </tr>
        </table>
    </div>
    
    <center>
    <table>
        <tr>
            <td>
                <div class="Menu_MarginLeft" style="float:left;width:100px;">&nbsp;</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/giacuoc/menu/menu.php'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <div style="width:100%;">
                    <center>
                        <div id="BangGia_Div" class="NoiDung_Div" style="max-width:850px;">
                            <table>
                                <tr>
                                    <td>
                                        <div class="BangGia_NiemYet_PC" style="width:100%;border-radius:5px;padding:0px;margin-top:15px;background:white;border:0.1px solid white;margin-right:20px;">
                                            <center>
                                                <img src="/tinhcuoc/banggiacuoc.svg?version=4" style="width:100%;padding:0px;margin-top:5px;">
                                            </center>
                                        </div>
                                    </td>
                                    <td style="width:50px;">
                                        
                                    </td>
                                    <td>
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/giacuoc/giacuoc/banggia.php'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <div class="BangGia_NiemYet_MB" style="width:100%;border-radius:5px;padding:0px;margin-top:15px;margin-bottom:20px;background:white;border:0.1px solid white;margin-right:20px;">
                                            <center>
                                                <img src="/tinhcuoc/banggiacuoc.svg?version=4" style="width:100%;padding:0px;margin-top:5px;">
                                            </center>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/giacuoc/giacuoc/tour.php'); ?>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/giacuoc/atgt/tocdo.php'); ?>
                    </center>
                </div>
            </td>
        </tr>
    </table>
    
    <div style="position:fixed;bottom:10px;right:5px;z-index:5;">
        <span style="float:right;margin-right:5px;"><?php include ($_SERVER['DOCUMENT_ROOT'].'/counters/count_giacuoc.php'); ?></span>
    </div>
    <div class="TenCongTy_MB" style="color:white;">
        <marquee style="width:100%;">CÔNG TY TRÁCH NHIỆM HỮU HẠN MAI LINH NAM ĐỊNH -  Số 186 Thanh Bình - P. Nam Định - Tỉnh Ninh </marquee>
    </div>
</body>
</html>