<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $b=$this->getUser(); // bunun sayesinde security de serialize ettiğimiz Admin entity class a ulaşabiliyoruz.
        //$b=$this->get("security.token_storage")->getToken()->getUser(); yukardaki işlemin Controller tarafından yapılan hali bu. Yani controller kullanmadan çalışan class larda bu şekilde servis hizmeti alacağız
        /*echo '<pre>';
        print_r(array("a"=>$b->getName()));exit;*/
        //$ip=$request->getClientIp();echo $ip; if($ip!="127.0.0.2"){return $this->redirectToRoute("login");}; // Bunun sayesinde de buraya girişi engelleyebiliriz
        return $this->render("AppBundle::index.html.twig");
    }


    public function adminAction(Request $request){

        return $this->render("AppBundle::admin.html.twig");
    }

}
