<?php
  namespace App\Controller\Pages;
  use \App\Utils\View;

  class Vent extends Page { 

    // método responsável por retornar o conteúdo (view) da Atividade
    public static function getVent(){

      // view da Atividade
      $content = View::render('pages/vent', [
        'header'  => self::getHeader(),
        'footer'  => self::getFooter()
      ]);

      // retornar a view da página
      return parent::getPage('Desabafo | Desbug', $content);
    }

    // método responsável por renderizar o topo da página
    private static function getHeader(){
      return View::render('pages/header');
    }

    // método responsável por renderizar o rodapé da página
    private static function getFooter(){
      return View::render('pages/footer');
    }
  }
?>