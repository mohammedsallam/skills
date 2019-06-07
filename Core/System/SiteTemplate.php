<?php
namespace System;

class SiteTemplate
{
    /**
     * Application
     * @var Application
     */

    public $app;

    /**
     * Loader constructor.
     *
     * @param Application $app
     */

    public function __construct(Application $app)
    {
        $this->app = $app;
    }


    /**
     * Load head lay out
     *
     * @return void
     */

    public function loadHeadStart()
    {
        $headStart = SITE_TEMPLATE_PATH . 'head_start.php';
        if (file_exists($headStart)){
            extract($this->app->container);
            require_once $headStart;
        }
    }


    /**
     * Css resources
     *
     * @return array
     */

    public function cssResources()
    {
       return [
           'bootstrap' => $this->route->baseUrl() . SITE_CSS .'bootstrap.min.css',
           'fa' => $this->route->baseUrl() . SITE_CSS .'font-awesome.min.css',
           'mat' => $this->route->baseUrl() . SITE_CSS .'materialize.css',
           'mat_icon' => $this->route->baseUrl() . SITE_CSS .'material_icon.css',
           'jqueryChat' => $this->route->baseUrl() . SITE_CSS .'jquery-1.8.2.min.js',
           'freeChatCss' => $this->route->baseUrl() . SITE_CSS .'jquery.phpfreechat.min.css',
           'freeChatJs' => $this->route->baseUrl() . SITE_CSS .'jquery.phpfreechat.min.js',
//           'robot_font' => $this->route->baseUrl() . SITE_CSS .'robot_font.css',
//           'agency' => $this->route->baseUrl() . SITE_CSS .'agency.css',
//           'owl' => $this->route->baseUrl() . SITE_CSS .'owl.carousel.min.css',
//           'owl_theme' => $this->route->baseUrl() . SITE_CSS .'owl.theme.default.min.css',
           'style' => $this->route->baseUrl() . SITE_CSS .'style.css',

       ];
    }


    /**
     * Load css resources
     *
     * @return void
     */

    public function loadCssResources()
    {

//        if ($this->app->controller == Application::NOT_FOUND_CONTROLLER){
//
//            $class = Application::NOT_FOUND_CONTROLLER;
//        } else {
//            $class = Route::CONTROLLERS_NAMESPACE . ucfirst($this->app->controller) . 'Controller';
//        }
//
//        $class = new $class($this->app);
        $cssResources = $this->cssResources();

        if (property_exists(get_called_class(), 'loadCss')){
            for ($i = 0; $i < count($this->loadCss); $i++){
                if (array_key_exists($this->loadCss[$i], $cssResources)){ ?>
                    <link rel="stylesheet" href="<?= $cssResources[$this->loadCss[$i]] ?>">
                <?php }
            }
        } else {
            foreach ($cssResources as $key => $value) { ?>
                <link rel="stylesheet" href="<?= $value ?>">
            <?php }
        }

    }

    /**
     * Load head end
     *
     * @return  void
     */

    public function loadHeadEnd()
    {
        $headEnd = SITE_TEMPLATE_PATH . 'head_end.php';
        if (file_exists($headEnd)){
            extract($this->app->container);
            require_once $headEnd;
        }
    }


    /**
     * Load body end
     *
     * @return  void
     */

    public function bodyStart()
    {
        $bodyStart = SITE_TEMPLATE_PATH . 'body_start.php';
        if (file_exists($bodyStart)){
            extract($this->app->container);
            require_once $bodyStart;
        }
    }


    /**
     * Load loader end
     *
     * @return  void
     */

    public function loader()
    {
        $loader = SITE_TEMPLATE_PATH . 'loader.php';
        if (file_exists($loader)){
            extract($this->app->container);
            require_once $loader;
        }
    }


    /**
     * Load overlay end
     *
     * @return  void
     */

    public function overlay()
    {
        $overlay = SITE_TEMPLATE_PATH . 'overlay.php';
        if (file_exists($overlay)){
            extract($this->app->container);
            require_once $overlay;
        }
    }


    /**
     * Load top nav end
     *
     * @return  void
     */

    public function navBar()
    {
        $topNav = SITE_TEMPLATE_PATH . 'navbar.php';
        if (file_exists($topNav)){
            extract($this->app->container);
            require_once $topNav;
        }
    }

    /**
     * Load top nav end
     *
     * @return  void
     */

    public function sideBar()
    {
        $sideBar = SITE_TEMPLATE_PATH . 'side_bar.php';
        if (file_exists($sideBar)){
            extract($this->app->container);
            require_once $sideBar;
        }
    }

    /**
     * Load content start end
     *
     * @return  void
     */

    public function contentStart()
    {
        $contentStart = SITE_TEMPLATE_PATH . 'content_start.php';
        if (file_exists($contentStart)){
            extract($this->app->container);
            require_once $contentStart;
        }
    }


    /**
     * Load sides welcome section
     *
     * @return  void
     */

    public function welcomeSection()
    {
        $welcomeSection = SITE_TEMPLATE_PATH . 'welcome_section.php';
        if (file_exists($welcomeSection)){
            extract($this->app->container);
            require_once $welcomeSection;
        }
    }

    /**
     * Load sides description section
     *
     * @return  void
     */

    public function descSection()
    {
        $descSection = SITE_TEMPLATE_PATH . 'description.php';
        if (file_exists($descSection)){
            extract($this->app->container);
            require_once $descSection;
        }
    }

    /**
     * Load sides about section
     *
     * @return  void
     */

    public function aboutSection()
    {
        $aboutSection = SITE_TEMPLATE_PATH . 'about.php';
        if (file_exists($aboutSection)){
            extract($this->app->container);
            require_once $aboutSection;
        }
    }

    public function objectiveSection()
    {
        $objectiveSection = SITE_TEMPLATE_PATH . 'objective.php';
        if (file_exists($objectiveSection)){
            extract($this->app->container);
            require_once $objectiveSection;
        }
    }

    public function booksSection()
    {
        $booksSection = SITE_TEMPLATE_PATH . 'books.php';
        if (file_exists($booksSection)){
            extract($this->app->container);
            require_once $booksSection;
        }
    }


    /**
     * Load sides contact section
     *
     * @return  void
     */

    public function contactSection()
    {
        $contactSection = SITE_TEMPLATE_PATH . 'contact.php';
        if (file_exists($contactSection)){
            extract($this->app->container);
            require_once $contactSection;
        }
    }


    /**
     * Load sides footer section
     *
     * @return  void
     */

    public function footerSection()
    {
        $footerSection = SITE_TEMPLATE_PATH . 'footer.php';
        if (file_exists($footerSection)){
            extract($this->app->container);
            require_once $footerSection;
        }
    }

    /**
     * Load content end end
     *
     * @return  void
     */

    public function contentEnd()
    {
        $contentEnd = SITE_TEMPLATE_PATH . 'content_end.php';
        if (file_exists($contentEnd)){
            extract($this->app->container);
            require_once $contentEnd;
        }
    }


    /**
     * Js resources
     *
     * @return array
     */

    public function jsResources()
    {
        return [
            'jquery'    => $this->route->baseUrl() . SITE_JS . 'jquery-3.3.1.min.js',
            'bootstrap' => $this->route->baseUrl() . SITE_JS . 'bootstrap.min.js',
            'materialize' => $this->route->baseUrl() . SITE_JS . 'materialize.min.js',
            'easing' => $this->route->baseUrl() . SITE_JS . 'jquery.easing.min.js',
            'validation' => $this->route->baseUrl() . SITE_JS . 'jqBootstrapValidation.js',
            'contact' => $this->route->baseUrl() . SITE_JS . 'contact_me.js',
            'agency' => $this->route->baseUrl() . SITE_JS . 'agency.min.js',
//            'validate'  => $this->route->baseUrl() . SITE_JS . 'jquery.validate.js',
//            'sign_in' => $this->route->baseUrl() . SITE_JS . 'sign-in.js',
//            'sign_up' => $this->route->baseUrl() . SITE_JS . 'sign-up.js',
//            'animation' => $this->route->baseUrl() . SITE_JS . 'anime.min.js',
//            'smoth' => $this->route->baseUrl() . SITE_JS . 'smooth-scroll.polyfills.min.js',
//            'carousel' => $this->route->baseUrl() . SITE_JS . 'owl.carousel.min.js',
            'main'      => $this->route->baseUrl() . SITE_JS . 'main.js'
        ];
    }


    /**
     * Load js resources
     *
     * @return void
     */

    public function loadJsResources()
    {

//        if ($this->app->controller == Application::NOT_FOUND_CONTROLLER){
//
//            $class = Application::NOT_FOUND_CONTROLLER;
//        } else {
//            $class = Route::CONTROLLERS_NAMESPACE . ucfirst($this->app->controller) . 'Controller';
//        }
//
//        $class = new $class($this->app);

        $jsResources = $this->jsResources();

        if (property_exists(get_called_class(), 'loadJs')){
            for ($i = 0; $i < count($this->loadJs); $i++){
                if (array_key_exists($this->loadJs[$i], $jsResources)){ ?>
                    <script src="<?= $jsResources[$this->loadJs[$i]] ?>"></script>
                <?php }
            }
        } else {

            foreach ($jsResources as $key => $value) { ?>
                <script src="<?= $value ?>"></script>
            <?php }

        }
    }


    /**
     * Load footer
     *
     * @return void
     */

    public function loadBodyEnd()
    {
        $bodyEnd = SITE_TEMPLATE_PATH . 'body_end.php';

        if (file_exists($bodyEnd)){
            extract($this->app->container);
            require_once $bodyEnd;
        }
    }


    public function __get($name)
    {
        return $this->app->$name;
    }

/////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * Load left side
     *
     * @return  void
     */

    public function leftSide()
    {
        $topNav = SITE_TEMPLATE_PATH . 'left_side.php';
        if (file_exists($topNav)){
            extract($this->app->container);
            require_once $topNav;
        }
    }

    /**
     * Load right side
     *
     * @return  void
     */

    public function rightSide()
    {
        $topNav = SITE_TEMPLATE_PATH . 'right_side.php';
        if (file_exists($topNav)){
            extract($this->app->container);
            require_once $topNav;
        }
    }


    /**
     * Load sides slider section
     *
     * @return  void
     */

    public function sliderSection()
    {
        $sidesSection = SITE_TEMPLATE_PATH . 'slider_section.php';
        if (file_exists($sidesSection)){
            extract($this->app->container);
            require_once $sidesSection;
        }
    }


}