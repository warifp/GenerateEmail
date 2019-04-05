<?php

/**
	@@AUTHOR : WAHYU ARIF P
	@@CREATE : 07 APRIL 2018
	@@UPDATE : 05 APRIL 2019
**/

error_reporting(0);

echo "========================================================================\r\n";
echo "                    || MASS GENERATE EMAIL\r\n";
echo "                    || (c) 2018 --> LAST UPDATE 05 APRIL 2019\r\n";
echo "    MASS GENERATE   || \r\n";
echo "        EMAIL       || Facebook : https://www.facebook.com/warifp\r\n";
echo "   [07 APRIL 2018]  || Fanspage : https://www.facebook.com/wahyuarifp\r\n";
echo "                    || Github   : https://github.com/warifp\r\n";
echo "                    || \r\n";
echo "========================================================================\r\n";

class wahyuarifp
{
	function __construct()
	{

		echo "Email  : ";
		$this->email = rtrim(fgets(STDIN));
		echo "Save : ";
		$this->save = rtrim(fgets(STDIN));
		echo "Jumlah : ";
		$this->total = rtrim(fgets(STDIN));

	}
	public function wahyuarifp()
	{
		$this->plode = explode("@",$this->email);
		for($a=0;$a<$this->total;$a++)
		{

			$namadepan = array(
			'NamaDepan1',
			'NamaDepan2',
			'NamaDepan3',
			
				);

			$namabelakang = array(
			'NamaBelakang1',
			'NamaBelakang2',
			'NamaBelakang3',

				);

			echo "[".$i++."/".$this->total."] Email : ".$this->$random_namadepan = $namadepan[mt_rand(0, sizeof($namadepan) - 1)].$this->plode[0].$this->$random_namabelakang = $namabelakang[mt_rand(0, sizeof($namabelakang) - 3)].$this->random()."@".$this->plode[1]."\r\n";

			$file = fopen($this->save,"a+");

			fwrite($file,$this->$random_namadepan = $namadepan[mt_rand(0, sizeof($namadepan) - 1)].$this->plode[0].$this->$random_namabelakang = $namabelakang[mt_rand(0, sizeof($namabelakang) - 3)].$this->random()."@".$this->plode[1]."\r\n");
			fclose($file);
		}
	}
	public function random()
	{
		$variable = "0123456789";
		for($i = 0;$i < 2;$i++)
		{
			$string = rand(0, strlen($variable)-1);
			$result .= $variable{$string};
		}
		return $result;
	}
}
$wahyuarifp = new wahyuarifp;
$wahyuarifp->wahyuarifp();
print "\n[DONE] - [JANGAN LUPA DONASINYA] - [WAHYU ARIF P]\n";