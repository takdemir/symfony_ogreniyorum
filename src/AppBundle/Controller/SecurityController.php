<?php
/**
 * Created by PhpStorm.
 * User: takdemir
 * Date: 17/05/2016
 * Time: 09:09
 */
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{

    public function loginAction(Request $request){

        // Şu andan itibaren userAuthanticationProvider.php de bulunan provider devreye girip UserInterface den kalıtım alan entity mizi serialize ediyor.
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'AppBundle::login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }





    public function logoutAction(){

        $this->get('security.token_storage')->setToken(null);
        $this->get('request')->getSession()->invalidate();
        return $this->redirectToRoute("homepage");

    }
}