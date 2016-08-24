<?php
/**
 * Created by PhpStorm.
 * User: Fendi
 * Date: 24/08/16
 * Time: 18:53
 */

namespace Fendi\IndonesianDate;

class IndonesiaDate
{
    protected $ubah; //change
    protected $pecah; //explode
    protected $bulan; //as month
    protected $tanggal; //as date
    protected $tahun; //as year

    public function __construct()
    {

    }

    public function indonesiaDate($tgl)
    {
        $this->ubah = gmdate($tgl,time()+60*60*8);
        $this->pecah = explode("-",$this->ubah);
        $this->tanggal = $this->pecah[2];
        $this->bulan = $this->setBulan($this->pecah[1]);
        $this->tahun = $this->pecah[0];
        return $this->tanggal.' '.$this->bulan.' '.$this->tahun;
    }
    public function blogDate($tgl)
    {
        return $this->nama_hari($tgl).' ,'.$this->indonesiaDate($tgl);
    }
    public function nama_hari($tgl)
    {
        $ubah = gmdate($tgl, time()+60*60*8);
        $pecah = explode("-",$ubah);
        $tgl = $pecah[2];
        $bln = $pecah[1];
        $thn = $pecah[0];

        $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
        $nama_hari = "";
        if($nama=="Sunday") {$nama_hari="Minggu";}
        else if($nama=="Monday") {$nama_hari="Senin";}
        else if($nama=="Tuesday") {$nama_hari="Selasa";}
        else if($nama=="Wednesday") {$nama_hari="Rabu";}
        else if($nama=="Thursday") {$nama_hari="Kamis";}
        else if($nama=="Friday") {$nama_hari="Jumat";}
        else if($nama=="Saturday") {$nama_hari="Sabtu";}
        return $nama_hari;
    }

    public function hitung_mundur($wkt)
    {
        $waktu=array(   365*24*60*60    => "tahun",
            30*24*60*60     => "bulan",
            7*24*60*60      => "minggu",
            24*60*60        => "hari",
            60*60           => "jam",
            60              => "menit",
            1               => "detik");

        $hitung = strtotime(gmdate ("Y-m-d H:i:s", time () +60 * 60 * 8))-$wkt;
        $hasil = array();
        if($hitung<5)
        {
            $hasil = 'kurang dari 5 detik yang lalu';
        }
        else
        {
            $stop = 0;
            foreach($waktu as $periode => $satuan)
            {
                if($stop>=6 || ($stop>0 && $periode<60)) break;
                $bagi = floor($hitung/$periode);
                if($bagi > 0)
                {
                    $hasil[] = $bagi.' '.$satuan;
                    $hitung -= $bagi*$periode;
                    $stop++;
                }
                else if($stop>0) $stop++;
            }
            $hasil=implode(' ',$hasil).' yang lalu';
        }
        return $hasil;
    }

    /**
     * @param mixed $bulan
     * @return
     */
    public function setBulan($bulan)
    {
        switch ($bulan)
        {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
        return true;
    }
}