<!DOCTYPE html>   
<html>
<head>
    <title></title>
</head>
<body>
    <div class="kalkulator">
        <h4 class="judul">KALKULATOR SEDERHANA</h4>
        <form method="post" action="/kalkulatorr/">
            @csrf 
            <input type="text" name="bil1" class="bil" placeholder="Bilangan 1" required/>
            <input type="text" name="bil2" class="bil" placeholder="Bilangan 2" required/>
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol"/> 
            <a href="./" style="text-decoration:none;"><input type="button" value="Hapus" class="tombol"/></a> 
        </form>
    <div class="row">
        <div class="opt">
            
        </div>

        <div class="opt">
            @if(session('info'))
                <div class="alert-alert-info">
                    {{session('info')}}
                </div>
            @endif 
        </div>
        <div class="opt">
        </div>

    </div> 
</body>
<style type="text/css">
    body{
    background: #F2F2F2;
    font-family: sans-serif;

}
.kalkulator{
    margin-top: 100px;
    margin-left: 500px;
    width: 300px;
    background: #FFA800;
    padding: 10px 20px 30px 20px;
    border-radius: 5px;
    box-shadow: 0px 10px 10px 0px #D1D1D1;
}
.bil{
    width: 280px;
    margin: 10px;
    border: none;
    font-size: 14pt;
    border-radius: 5px;
    padding: 10px; 
}
.opt{
    font-size: 14pt;
    border: none;
    width: 280px;
    margin: 10px;
    border-radius: 5px;
    padding: 10px;
}
.tombol{
    background: #A9A9A9;
    margin: 10px;
    border-top: none;
    border-right: none;
    border-left: none;
    border-radius: 5px;
    padding: 10px 20px;
    color: #eee;
    font-size: 15pt;
    border-bottom:2px solid #64950;
}
.hasil{
    width: 280px;
    margin: 10px;
    border: none;
    font-size: 14pt;
    border-radius: 5px;
    padding: 10px; 
    background: #eee;
} 
.judul{
text-align: center;
color: #eee;
font-weight: 300px;
}
</style>
</html>