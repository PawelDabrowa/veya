<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composers;

class App extends Composers
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

        /**
    * Primary Nav Menu arguments
    * @return array
    */
    public function primarymenu() {
        $args = array(
            'theme_location'    => 'primary_navigation',
            'menu_class'        => 'navbar-start, navbar-item, navbar-start__menu',
            'container'         => '',

        );
        return $args;
    }

}
