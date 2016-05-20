<?php
/**
 * Created by PhpStorm.
 * User: takdemir
 * Date: 18/05/2016
 * Time: 08:57
 */

namespace AppBundle\EventListener;

use Doctrine\DBAL\Driver\PDOException;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ExceptionListener
{
    private $router;
    function __construct(RouterInterface $router)
    {
        $this->router=$router;

    }

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        // Hnagi Exception geldi ona bakıyoruz
        $exception = $event->getException();
        //$statusCode=$exception->getStatusCode();

        if($exception instanceof PDOException) {
            $url = $this->router->generate("homepage");
            $response = new RedirectResponse($url);
            $event->setResponse($response);
        }elseif ($exception instanceof NotFoundResourceException){
            $url = $this->router->generate("homepage");
            $response = new RedirectResponse($url);
            $event->setResponse($response);
        }elseif ($exception instanceof AccessDeniedHttpException){
            $url = $this->router->generate("login");
            $response = new RedirectResponse($url);
            $event->setResponse($response);

        }elseif ($exception instanceof NotFoundHttpException){
            $url = $this->router->generate("homepage");
            $response = new RedirectResponse($url);
            $event->setResponse($response);

        }elseif($exception instanceof HttpExceptionInterface){
            //echo get_class($exception);exit;
            $url = $this->router->generate("homepage");
            $response = new RedirectResponse($url);
            $event->setResponse($response);
        }

    }
}