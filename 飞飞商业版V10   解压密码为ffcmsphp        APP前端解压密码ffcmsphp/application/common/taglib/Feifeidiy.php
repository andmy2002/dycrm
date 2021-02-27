<?php
namespace app\common\taglib;
use think\Tpl\TagLib;
use think\Db;

class Feifeidiy extends Taglib {

	protected $tags = [
        'test'=> ['attr'=>'order,by,num'],
    ];

    public function tagTest($tag,$content)
    {
        dump($tag);
        dump($content);
        die;
    }
}
