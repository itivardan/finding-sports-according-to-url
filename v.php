<html>
<body bgcolor="aqua">
<hr>
welcome
<hr>
<?php
ini_set('max_execution_time',300);
$filecontents1=file('input.txt',FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

for($j=0;$j<count($filecontents1);$j++){
		$filecontents=file_get_contents('stopwords.txt');
		$data=preg_split('@([\W]+)@',get_data($filecontents1[$j]),-1,PREG_SPLIT_NO_EMPTY);
		$data1=preg_split( '@([\W]+)@', $filecontents, -1, PREG_SPLIT_NO_EMPTY); 
		$result1=array_intersect($data,$data1);
		$tags= array_diff($data,$result1);
		$filecontents=file_get_contents('cricket1.txt');
		$data2=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('badminton.txt');
		$data3=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('basketball.txt');
		$data4=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);		
		$filecontents=file_get_contents('boxing.txt');
		$data5=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('mountain_biking.txt');
		$data6=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('tabletennis.txt');
		$data7=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('chess.txt');
		$data8=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('cycling.txt');
		$data9=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('football.txt');
		$data10=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('formulaone.txt');
		$data11=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);		
		$filecontents=file_get_contents('shuttle.txt');
		$data13=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('golf.txt');
		$data14=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);	
		$filecontents=file_get_contents('gym.txt');
		$data15=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('handball.txt');
		$data16=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('hockey.txt');
		$data17=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('khokho.txt');
		$data19=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('lawntennis.txt');
		$data20=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('rollingskating.txt');
		$data21=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$filecontents=file_get_contents('rugby.txt');
		$data22=preg_split('@([\W]+)@',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
		$arr=array(cou($tags,$data2),cou($tags,$data3),cou($tags,$data4),cou($tags,$data5),cou($tags,$data6),cou($tags,$data7),cou($tags,$data8),cou($tags,$data9),cou($tags,$data10),cou($tags,$data13),cou($tags,$data14),cou($tags,$data15),cou($tags,$data16),cou($tags,$data17),cou($tags,$data19),cou($tags,$data20),cou($tags,$data21),cou($tags,$data22));  
		$flag=0;
		$max=0;
		for($i=0;$i<18;$i++)
		{
		if(($arr[$i])>($arr[$max]))
				$max=$i;
		}	
		$arr1=array('cricket','badminton','basketball','boxing','mountain_biking','tabletennis','chess','cyclling','football','formulaone','golf','gym','handball','hockey','khokho','lawntennis','rollingskates','rugby');  		
	$c=0;
	for($i=0;$i<count($arr1);$i++)
	{	if($arr1[$i]==0)
		$c++;
	}
	if($c==18)
		$flag=1;
	if($flag==1 and $max==0)
		echo "not a valid url N/A";
		else
	{		echo $arr1[$max];

	}echo "<br>";
		$text=$arr1[$max];	
			$file="somefile.txt";
			$fh=fopen($file,"a");
			fwrite($fh,$text);
			fclose($fh);
}
function get_data($url)
	{
		$ch = curl_init();
		$timeout=0;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

function cou($tags,$id)
		{
			$count=0;
			foreach($tags as $value)
			{
				foreach($id as $values)
				if(strcasecmp($value,$values)==0)
				{$count++;
				}
			}
			return($count);
		}
?>
</body>
</html>