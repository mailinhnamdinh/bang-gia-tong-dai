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