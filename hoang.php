<?php
///nhu ccc
error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
system('clear');

/***[ Đánh Dấu Bản Quyền ]***/
$thanh_xau= $trang."".$do."[".$luc."●".$do."] ".$trang."➩ ";
$thanh_dep= $trang."".$do."[".$luc."✓".$do."] ";
$thanh_dac_biet= $trang."➩ ";

@system('clear');
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
	if(!$sock = @fsockopen('www.google.com', 80))
{
    echo 'Vui lòng bật kết nối mạng';
    exit();
}
	back:
system('clear');
echo $banner;
$weekday = date("l");
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
$cuongdz = $do."[".$luc."●".$do."] ".$trang."=> ";
$cuongvip = $do."[".$luc."●".$do."]";
$n_truoc = date("d");
$ngay = date("d"); $thang = date("m"); $nam = date("Y"); $a=date('d');  $b=date("m"); $thoigian=date('d/m'); $day = []; $day= date('d-m-y'); $today = date("d-m-y"); $d = date("d-m");$ip = file_get_contents('http://kiemtraip.com/raw.php');
$a=date('d'); 
        $b=date("m");
        $thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
$sr = "\033[1;97m➻❥\033[1;92m ";
@system('clear');
$pedat="\r\033[0;45m\033[1;36m🔰\033[1;97mSever Đang Hoạt Động Tốt\033[1;36m🔰\n";
$datxu="\r\033[0;41m\033[1;36m🔰\033[1;97mSever Đang Hoạt Động Rất Tốt\033[1;36m🔰\n";
$datxu1="\r\033[1;42m\033[1;36m🔰\033[1;97mSever Hoạt Động Vô Cùng Tốt\033[1;36m🔰\n";
$a=array("$pedat"=>"a","$datxu"=>"b","$datxu1"=>"c");
print_r(array_rand($a,1));
echo"\033[0m\033[1;35m
╔══════════════════════╗
║ \033[1;33m█ █ █ █ █ █ █ █ █ █\033[0m  \033[1;35m║ 100% \033[1;32m    \033[1;35m
╚══════════════════════╝\n ";usleep(0);
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $luc."▂";
}echo"\n";
echo "\n";
echo"   \033[1;97m╭═════════════════════════════════════════════════════╮\n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
$t=
 $trang."          \033[1;37m\033[1;41m \033[1;32m🌺\033[;33mHôm Nay Là Ngày $ngay Tháng $thang Năm $nam\033[1;32m🌺 \033[0m\n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

$t=
 $trang."          \033[1;97m\033[1;40m➻❥ Chức Bạn\033[1;97m\033[1;97m \033[1;92mNgày Mới Vui Vẽ\n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

$t=
 $trang."          \033[1;97m\033[1;40m➻❥ Tool Được Khởi Động Vào\033[1;97m\033[1;97m: \033[1;92m".$tim.date("H:i:s")."\033[1;92m \n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

$t=
 $trang. "          \033[1;97m\033[1;40m➻❥ Ip Của Bạn Là:\033[1;97m\033[1;97m \033[1;92m$ip \n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo"   \033[1;97m╰═════════════════════════════════════════════════════╯\n";
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $luc."▂";
}echo"\n";
echo "\n";
      system('clear');
      
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $do."▂";
}echo"\n";
echo"   \033[1;37m┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓ \n";
echo"      \033[0;41m\033[1;37m\033[1;93m🔥Hôm Nay\033[0;41m ";echo"\033[0;41m\033[1;36m$weekday ";echo"\033[0;41m\033[1;33mNgày "; echo"\033[0;41m\033[1;36m$ngay ";echo"\033[0;41m\033[1;33mTháng "; echo"\033[0;41m\033[1;36m$thang ";echo"\033[0;41m\033[1;33mNăm "; echo"\033[0;41m\033[1;36m$nam$end🔥\033[0;00m"; echo "\n";
echo "      \033[1;97m\033[1;40m➻❥ Chú́c Bạn\033[1;97m\033[1;97m \033[1;92mNgày Mới Vui Vẽ\n";
echo "      \033[1;97m\033[1;40m➻❥ Tool Được Khởi Động Vào\033[1;97m\033[1;97m: \033[1;92m".$tim.date("H:i:s")."\033[1;92m \n";
echo "      \033[1;97m\033[1;40m➻❥ Tool Vip\033[1;97m\033[1;97m \033[1;92mBy BinSiuCuTe \n";
echo "      $sr\033[1;97m\033[1;40mIP Tool Của Bạn:\033[1;92m $ip\n";
echo"   \033[1;37m┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛ \n";
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $do."▂";
}echo"\n";
echo "\n";
echo"\033[1;44;37m[ ❥ TRAODOISUB Tool ]$res\033[0m\n"; 
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."1".$luc."] Tool TraoDoiSub Token\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."2".$luc."] Tool TraoDoiSub Cookie\n";
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    echo "\n";
echo"\033[1;45;37m[ ❥ TUONGTACCHEO Tool ]$res\033[0m\n";
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."3".$luc."] Tool TuongTacCheo Token\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."4".$luc."] Tool TuongTacCheo Cookie\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."5".$luc."] Tool TuongTacCheo TikTok\n";
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    echo "\n";
echo"\033[1;46;37m[ ❥ FACEBOOK Tool ]$res\033[0m\n"; 
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."6".$luc."] Tool Buff Share Bằng Page\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."7".$luc."] Tool Spam Cmt\033[1;96m『Theo Id Group』\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."8".$luc."] Tool Nuôi Facebook Kèm Cmt\033[1;96m\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."9".$luc."] Tool Buff Like4Like\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."10".$luc."] Tool Add Thêm Bạn Bè\n";
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    echo "\n";
echo"\033[1;41;37m[ ❥ INSTAGRAM Tool ]$res\033[0m\n"; 
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."11".$luc."] Tool Topig Đa Luồng\n";usleep(1000);
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."12".$luc."] Tool Vipig Đa Luồng\n";usleep(1000);
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."13".$luc."] Tool Check Xu \033[1;96m『TTC』\n";usleep(1000);
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    echo "\n";
echo"\033[1;47;31m[ ❥ Tool Like Việt && Like Tây ]$res\033[0m\n"; 
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."14".$luc."] Tool RpwLiker.com〘\033[1;31m BẢO TRÌ\033[1;33m 〙\n";
echo $trang."✓".$do."[".$luc."🌸".$do."] ".$trang."=> ".$luc."Nhập Số [".$vang."15".$luc."] Tool Machin-Liker.com \033[1;96m〘\033[1;31m ĐÓNG\033[1;33m 〙\n";
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    echo "\n";
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Số Vào Đây Đi Bạn Ơi\e[0m\e[1;95m]
└──╼ \e[1;92m〘\03\033[1;33mB\033[1;36mi\033[0;31mn\033[1;97m-\033[1;31m\033mT\033[1;32mo\033[1;33mo\033[1;34ml\033[136ms〙".$vang;
$chedo = trim(fgets(STDIN));
if($chedo =='1'){
 eval(file_get_contents('https://run.mocky.io/v3/c906b4dd-a597-4aad-ad80-31d900a94f9b'));
}else
if ($chedo == '2'){
        eval(file_get_contents("https://run.mocky.io/v3/15c2d45a-f4c8-49a8-8909-7662a2a515d4"));
}else
if ($chedo == '3'){
        eval(file_get_contents("https://run.mocky.io/v3/62c1d6f2-0767-4b90-b981-feb81864d7a3"));
	}else
if ($chedo == '4'){
        eval(file_get_contents("https://run.mocky.io/v3/20c24fa6-2d38-462a-b040-4f4a8d919669"));
}else
if ($chedo == '5'){
        eval(file_get_contents("https://run.mocky.io/v3/3a8a302e-5ff3-4a0d-93c1-f1ccc82ecfb4"));
}else
if ($chedo == '6'){
        eval(file_get_contents("https://run.mocky.io/v3/f9f7ea70-0346-483c-a6d4-6abc32dd7d8f"));
}else
if ($chedo == '7'){
        eval(file_get_contents("https://run.mocky.io/v3/723018cd-a90c-45f2-a8cd-85a59bff2ecf"));
}else
if ($chedo == '8'){
        eval(file_get_contents('https://run.mocky.io/v3/d07e3401-12dd-4624-8e40-1e6044b76511'));
}else
if ($chedo == '9'){
       eval(file_get_contents('https://run.mocky.io/v3/80cf8246-d35c-407a-9b55-26c6e10b21e5'));
}else
if ($chedo == '10'){
       eval(file_get_contents('https://run.mocky.io/v3/7435a787-2ae0-445e-ad33-9a5414a3c7e4'));
}else
if ($chedo == '11'){
        eval(file_get_contents("https://run.mocky.io/v3/dcb7bac2-9a64-4a05-8738-2e398cb65a00"));
}else
if ($chedo == '12'){
        eval(file_get_contents("https://run.mocky.io/v3/7f7dd9d1-7034-4848-9ea3-000fffe210df"));
}else
if ($chedo == '13'){
        eval(file_get_contents('https://run.mocky.io/v3/b08307bd-19f8-43b1-8e18-ab5a7bc56dac'));
}else
if ($chedo == '14'){
        eval(file_get_contents(""));
}else
if ($chedo == '15'){
        eval(file_get_contents("https://run.mocky.io/v3/cce46f19-c105-4628-8307-f5ede83c0956"));
}else
if ($chedo == ''){
        echo $luc."Enter Lần Nữa Tao Xóa File Đó Nhá\n";
$tdstk = "https://run.mocky.io/v3/71fe0dc2-6310-4b2c-804d-7190efa6d24c";
$tdsck = "https://run.mocky.io/v3/15c2d45a-f4c8-49a8-8909-7662a2a515d4";
$ttctk = "https://run.mocky.io/v3/62c1d6f2-0767-4b90-b981-feb81864d7a3 ";
$ttcck = "https://run.mocky.io/v3/20c24fa6-2d38-462a-b040-4f4a8d919669 ";
$ttcticktok = "https://run.mocky.io/v3/3a8a302e-5ff3-4a0d-93c1-f1ccc82ecfb4 ";
$share = "https://run.mocky.io/v3/f9f7ea70-0346-483c-a6d4-6abc32dd7d8f ";
$cmt = "https://run.mocky.io/v3/723018cd-a90c-45f2-a8cd-85a59bff2ecf ";
$nuoifb = "https://run.mocky.io/v3/d07e3401-12dd-4624-8e40-1e6044b76511 ";
$k9 = "https://run.mocky.io/v3/80cf8246-d35c-407a-9b55-26c6e10b21e5 ";
$k10 = "https://run.mocky.io/v3/de02e7d0-edbe-490d-9e17-927192cef824 ";
$k11 = "https://run.mocky.io/v3/dcb7bac2-9a64-4a05-8738-2e398cb65a00 ";
$k12 = "https://run.mocky.io/v3/7f7dd9d1-7034-4848-9ea3-000fffe210df ";
$k13 = "https://run.mocky.io/v3/b08307bd-19f8-43b1-8e18-ab5a7bc56dac ";
$k14 = "https://run.mocky.io/v3/953f0a55-625c-4955-975d-1aa934b4ced4 ";
$k15 = "https://run.mocky.io/v3/b0c89e62-9067-4ca7-b4a6-75b90c0c09a8 ";
}

