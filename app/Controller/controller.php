<?php
namespace app\Controller;

use framework\Controller\BaseController;

class controller extends BaseController
{
    private $openTagsPattern="/<@[A-Z a-z 0-1]+>/i",
        $closeTagsPattern="/<@[A-Z a-z 0-1]+/>/i";

    protected function view($path,array $values=[]){
        extract($values);
        if(!file_exists(LAYOUT_DIR."main.php")){
            include VIEW_DIR."$path.php";
        }

       $layout=LAYOUT_DIR."main.php";
       $file=VIEW_DIR."$path.php";
       echo $this->includefile($file,$layout);
    }
    protected function includefile($file,$to){
        ob_start();
            include $file;
        $file=ob_get_clean();
        ob_start();
            include $to;
        $componetfile=ob_get_clean();
        $opentags=array_unique($this->findTags($file));
        foreach ($opentags as $tags){
            $component=$this->findFullComponent($tags,$file);
              $tags= str_replace("<@","",$tags);
              $tags= str_replace(">","",$tags);
              $componetfile=str_replace("{{".$tags."}}",$component,$componetfile);
        }
        return $componetfile;
    }
    private function findTags($view){
        preg_match_all($this->openTagsPattern,"$view",$Tags);
        return $Tags[0];
    }
    private function findFullComponent($tag,$view){

        $Pattern="/$tag(\\r\\n)*((.*)(\\r\\n))*$tag/i";
        preg_match_all($Pattern,"$view",$component);
      return str_replace($tag ,"",$component[0][0]);
    }
    protected function replacePlaceholders($file,array $data){
        ob_start();
            include $file;
        $file=ob_get_clean();
        foreach($data as $key=>$value){
            $file=str_replace("{{".$key."}}",$value,$file);
        }
        return $file;
    }

}