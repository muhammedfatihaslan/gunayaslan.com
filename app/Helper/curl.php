<?php
namespace App\Helper;
use Illuminate\Support\Str;


class curl{
    static function gib(){
      
        $url = 'https://www.gib.gov.tr/index.php?id=1028';
        $veri = file_get_contents($url);
        $pattern = '@<h4 class="field-content(.*?)">(.*?)</h4>@si';
        $yazilar = [];
        preg_match_all($pattern,$veri,$yazilar);
        $link = '@<a href="(.*?)"(.*?)>(.*?)</a>@si';
        $news = [];
        for($i=0;$i<5;$i++){
            preg_match($link,$yazilar[0][$i],$baslik);
            $text = $baslik[3];
            $url= $baslik[1];
            $keys = '<a target="_blank" class="text-dark" href="https://www.gib.gov.tr'.$url.'">'.$text.'</a>';
            array_push($news , $keys);
        }
        return $news;
    }
    static function sgk(){
      
        $url = 'https://www.sgk.gov.tr/Duyuru';
        $veri = file_get_contents($url);
        $pattern = '@<div class="col ps-3  m-2(.*?)">(.*?)</div>@si';

        $yazilar = [];
        preg_match_all($pattern,$veri,$yazilar);
        $link = '@<a href="(.*?)"(.*?)>(.*?)</a>@si';
        $news = [];
        for($i=0;$i<5;$i++){
            preg_match($link,$yazilar[0][$i],$baslik);
            $text = $baslik[3];
            $url= $baslik[1];
            $keys = '<a target="_blank" class="text-dark" href="https://www.sgk.gov.tr'.$url.'">'.$text.'</a>';
            array_push($news , $keys);
            

        }
        return $news ;
        
    }
    static function turmob(){
      
        // $url = 'https://www.turmob.org.tr/Haberler';
        // $connect = file_get_contents($url);
        // $pattern = '@<div class="border-bottom border-5 border-blue shadow mb-3 p-3(.*?)">(.*?)</div>@si';
        // $yazilar = array();
        // preg_match_all($pattern,$connect,$yazilar);
        // $posts = array();
        // for($i=0;$i<5;$i++){
        //     // $link = '@<a href="(.*?)"(.*?)>(.*?)</a>@si';
        //     $baba ='@<span(.*?)>(.*?)</span@si';
        //     preg_match($baba , $yazilar[2][1], $posts);
            
            
        // }

        // dd($yazilar[2][1]);
        // dd($posts);
        $url = 'https://www.gib.gov.tr/index.php?id=1028';
        $veri = file_get_contents($url);
        $pattern = '@<h4 class="field-content(.*?)">(.*?)</h4>@si';
        $yazilar = [];
        preg_match_all($pattern,$veri,$yazilar);
        $link = '@<a href="(.*?)"(.*?)>(.*?)</a>@si';
        $news = [];
        for($i=0;$i<5;$i++){
            preg_match($link,$yazilar[0][$i],$baslik);
            $text = $baslik[3];
            $url= $baslik[1];
            $keys = '<a target="_blank" class="text-dark" href="https://www.gib.gov.tr'.$url.'">'.$text.'</a>';
            array_push($news , $keys);
        }
        return $news;
      
        
        }
        


        static function resmi(){
            $date = date('d.m.Y');
            $date = date('d.m.Y');
            $dayArray = [];
            $link = [];
            $lastweek = date('d.m.Y',strtotime('-6 day'));
            $numeral = 32305 ;
            for($i=0;$i<6;$i++){
                $x = '-'.$i.' day';
                $result = date('d.m.Y',strtotime($lastweek = $x));
                $numeral = $numeral - 1 ;
                // array_push($dayArray , $result );
                array_push($dayArray , $result." Tarihli ".' ve '.$numeral." Sayılı Resmi Gazete");
                array_push ($link , $result);


            } return array($dayArray,$link);
          


        }
    }



