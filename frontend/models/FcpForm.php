<?php 
namespace frontend\models;

use yii\base\Model;
use common\models\Fcpuserinfo;

class FcpForm extends Model
{
  public $fullname;
  public $yob;
  public $chancenumber;

  public function rules()
  {
    return [

       ['fullname','required','message'=>'please enter your full name'],
       ['yob','required'],
       ['chancenumber','required'],
       ['chancenumber','integer']
    ];


  }
public function printdata()
{
  print $this->fullname;
  print $this->yob;
  print $this->chancenumber;
}
public function manipdata()
{
  $res=false;

  $numbers=array();

  for($n=0;$n<=100;$n++)
  {
    $numbers[$n]=$n;
  }

  shuffle($numbers);

  $successnumber=$numbers[4];

  if($this->chancenumber==$successnumber)
  {

    if($this->yob<2003)
    {
      $usermodel=new Fcpuserinfo();
      $usermodel->fullname=$this->fullname;
      $usermodel->yob=$this->yob;
      $usermodel->chancenumber=$this->chancenumber;

      $usermodel->save();

      $res=true;
    }
  }

  return $res;

}

}





?>