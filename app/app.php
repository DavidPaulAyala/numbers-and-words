<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Number.php";

    //Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register (new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
        return $app['twig']->render('form.html.twig');
    });

    // $app->get('/see_words', function() use($app) {
    //     $date_holder = $_GET['number'];
    //     $my_Number = new Number;
    //     $result = $my_Weekday->findDay($date_holder);
    //     return $app['twig']->render('show_day.html.twig', array('results' => $result, 'date' => $date_holder));
    // });

    return $app;
?>
