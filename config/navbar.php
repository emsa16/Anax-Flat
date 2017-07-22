<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna webbsida")
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar av olika kursmoment"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analysuppgifter"),
                "mark-if-parent" => true,
            ],

            "themes" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Beskrivning av de teman som finns i temaväljaren"),
                "submenu" => [
                    "items" => [

                        "themes" => [
                            "text"  => t("Grundteman"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Beskrivning av de teman som finns i temaväljaren"),
                        ],

                        "principles" => [
                            "text"  => t("Designprinciper"),
                            "url"   => $this->di->get("url")->create("design-principle"),
                            "title" => t("Beskrivning av de teman som följer specifika designprinciper")
                        ],

                        "elements" => [
                            "text"  => t("Designelement"),
                            "url"   => $this->di->get("url")->create("design-element"),
                            "title" => t("Beskrivning av de teman som följer specifika designelement")
                        ],

                    ]
                ]
            ],

            "tests" => [
                "text"  => t("Tester"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testsidor"),
                "submenu" => [
                    "items" => [

                        "vgrid" => [
                            "text"  => t("Vgrid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Testa vertikalt grid")
                        ],

                        "hgrid" => [
                            "text"  => t("Hgrid"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Testa typografiskt (horisontellt) grid")
                        ],

                        "images" => [
                            "text"  => t("Bilder"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Testsida för responsiva bilder med LESS")
                        ],

                    ]
                ]
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Bloggen Dagens foto")
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna webbsida")
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar av olika kursmoment"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analysuppgifter"),
                "mark-if-parent" => true,
            ],

            "themes" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Beskrivning av de teman som finns i temaväljaren"),
                "submenu" => [
                    "items" => [

                        "themes" => [
                            "text"  => t("Grundteman"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Beskrivning av de teman som finns i temaväljaren"),
                        ],

                        "principles" => [
                            "text"  => t("Designprinciper"),
                            "url"   => $this->di->get("url")->create("design-principle"),
                            "title" => t("Beskrivning av de teman som följer specifika designprinciper")
                        ],

                        "elements" => [
                            "text"  => t("Designelement"),
                            "url"   => $this->di->get("url")->create("design-element"),
                            "title" => t("Beskrivning av de teman som följer specifika designelement")
                        ],

                    ]
                ]
            ],

            "tests" => [
                "text"  => t("Tester"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testsidor"),
                "submenu" => [
                    "items" => [

                        "vgrid" => [
                            "text"  => t("Vgrid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Testa vertikalt grid")
                        ],

                        "hgrid" => [
                            "text"  => t("Hgrid"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Testa typografiskt (horisontellt) grid")
                        ],

                        "images" => [
                            "text"  => t("Bilder"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Testsida för responsiva bilder med LESS")
                        ],

                    ]
                ]
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Bloggen Dagens foto")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
