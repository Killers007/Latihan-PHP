<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( ! function_exists('timeAgo'))
{
	function timeAgo($time_ago)
	{
		$time_ago = strtotime($time_ago);
		$cur_time   = time();
		$time_elapsed   = $cur_time - $time_ago;
		$seconds    = $time_elapsed ;
		$minutes    = round($time_elapsed / 60 );
		$hours      = round($time_elapsed / 3600);
		$days       = round($time_elapsed / 86400 );
		$weeks      = round($time_elapsed / 604800);
		$months     = round($time_elapsed / 2600640 );
		$years      = round($time_elapsed / 31207680 );
		if($seconds <= 60){
			return "$seconds seconds ago";
		}
		else if($minutes <=60){
			if($minutes==1){
				return "one minute ago";
			}
			else{
				return "$minutes minutes ago";
			}
		}
		else if($hours <=24){
			// if($hours==1){
			// 	return "an hour ago";
			// }else{
				return "$hours hrs ago";
			// }
		}
		else if($days <= 7){
			if($days==1){
				return "yesterday";
			}else{
				return "$days days ago";
			}
		}
		else if($weeks <= 4.3){
			if($weeks==1){
				return "a week ago";
			}else{
				return "$weeks weeks ago";
			}
		}
		else if($months <=12){
			if($months==1){
				return "a month ago";
			}else{
				return "$months months ago";
			}
		}
		else{
			if($years==1){
				return "one year ago";
			}else{
				return "$years years ago";
			}
		}
	}
}

if( ! function_exists('date_convert'))
{
	function date_convert($tanggal = null, $format = 'Y-m-d')
    {
    	if ($tanggal == null) 
    	{
    		$tanggal = date('Y-m-d');
    	}
    	else
    	{
    		$tanggal = date('Y-m-d H:i:s', strtotime($tanggal)); 
    	}

        $hari = array ( 1 => 'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        );

        $bulan = array (1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split    = explode('-', $tanggal);

        $num = date('N', strtotime($tanggal)); 

        return $data = (object)array(
            'dayName' => $hari[$num],
            'monthName' => $bulan[intval($split[1])],
            'month' => intval($split[1]),
            'year' => intval($split[0]),
            'day' => intval($split[2]),
            'format' => date($format, strtotime($tanggal)),
            'default' => intval($split[2]).' '.$bulan[intval($split[1])].' '.intval($split[0]),
            'formatFull' => intval($split[2]).' '.$bulan[intval($split[1])].' '.intval($split[0]).', '.date('h:i A', strtotime($tanggal)),
        );
    }
}
?>