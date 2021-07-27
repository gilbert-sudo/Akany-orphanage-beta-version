<meta charset="utf-8">
<?php
// formate Date to english and french
function dateEn($dateen){
            $vardateen = ucfirst(strftime('%b ', strtotime($dateen)));
            $vardateen .= ucfirst(strftime('%d, %Y',strtotime($dateen)));
            return $vardateen;
      }
function timeEn($timeen){
            $vartimeen = strftime('%H:%M' , strtotime($timeen));
            $vartimeen .= strftime(' %p',strtotime($timeen));
            return $vartimeen;
      }
function dateFr($dateFr){
			setlocale(LC_TIME, 'fr');
            $vardateFr = ucfirst(strftime('%b ', strtotime($dateFr)));
            $vardateFr .= ucfirst(strftime('%d, %Y',strtotime($dateFr)));
            return $vardateFr;
      }
function timeFr($timeFr){
            $vartimeFr = strftime('%H:%M' , strtotime($timeFr));
            return $vartimeFr;
      }
// End formate Date to english and french