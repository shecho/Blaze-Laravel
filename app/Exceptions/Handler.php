<?php
// Este archivo es parte d la configracion de Laravel y maneja los errores y excepciones
namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     *
     * Es una lesta de tipos de excepciones que no seran reportadas
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * Es una lesta de inputs de excepciones que no seran reportadas
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     *Reportes de logueo
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Renderriza la excepcion en un HTML
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
