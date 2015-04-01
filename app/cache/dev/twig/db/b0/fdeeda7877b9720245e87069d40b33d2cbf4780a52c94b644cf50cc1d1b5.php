<?php

/* ::base.html.twig */
class __TwigTemplate_dbb0fdeeda7877b9720245e87069d40b33d2cbf4780a52c94b644cf50cc1d1b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "
    </head>
    <body class=\"fuelux\">
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 152
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 210
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "TACT learning Portal";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css\">

        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/imiedelivery/css/bootstrap.icon-large.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         ";
        // line 19
        echo "
        ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "         ";
        // line 25
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/imiedelivery/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/imiedelivery/css/style.css"), "html", null, true);
        echo "\">
        <style>
            .highlight {
                background-color: #f7f7f9;
                border: 1px solid #e1e1e8;
                border-radius: 4px;
                margin-bottom: 14px;
                padding: 9px 14px;
            }
        </style>
        ";
    }

    // line 39
    public function block_head($context, array $blocks = array())
    {
        // line 40
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/imiedelivery/images/logo.png"), "html", null, true);
        echo "\" />
        ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "        <!-- Barre de navigation -->
        ";
        // line 47
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 48
        echo "        <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle\" data-target=\".navbar-ex1-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand ";
        // line 57
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "imie_www_default")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("imie_www_default");
        echo "\">
                        <img style=\"max-width:32px; margin-top: -7px;display:inline-block;\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/imiecore/images/logo.png"), "html", null, true);
        echo "\" />
                        TACT e-learning</a>
                </div>
                <nav class=\"navbar-collapse collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav\">
                    ";
        // line 63
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 64
            echo "                        <li class=\"";
            if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "imie_www_default")) {
                echo "active";
            }
            echo "\">
                            <a href=\"";
            // line 65
            echo "\">
                                <span class=\"glyphicon glyphicon-home icon-left\"></span>My Portal</a></li>
                        ";
            // line 67
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isStudent", array())) {
                // line 68
                echo "                        <li class=\"dropdown ";
                if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "imie_www_front")) {
                    echo "active";
                }
                echo "\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <span class=\"glyphicon glyphicon-education icon-left\"></span>Student <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"";
                // line 72
                if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "delivery")) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 73
                echo $this->env->getExtension('routing')->getPath("delivery");
                echo "\">
                                        <span class=\"glyphicon glyphicon-cloud-download icon-left\"></span>Delivery</a></li>
                            </ul>
                        </li>
                        ";
            } else {
                // line 78
                echo "                        <li class=\"dropdown ";
                if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "imie_www_front")) {
                    echo "active";
                }
                echo "\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <span class=\"glyphicon glyphicon-education icon-left\"></span>Teacher <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"dropdown-header\">Project</li>
                                <li class=\"";
                // line 83
                if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "target")) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 84
                echo $this->env->getExtension('routing')->getPath("target");
                echo "\">
                                        <span class=\"glyphicon glyphicon-cloud-upload icon-left\"></span>Request</a></li>
                                <li class=\"";
                // line 86
                if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "delivery")) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 87
                echo $this->env->getExtension('routing')->getPath("delivery");
                echo "\">
                                        <span class=\"glyphicon glyphicon-cloud-download icon-left\"></span>Delivery</a></li>
                            </ul>
                        </li>
                        ";
            }
            // line 92
            echo "                    ";
        }
        // line 93
        echo "                        <!-- li class=\"";
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "imie_www_about")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 94
        echo "\">About</a></li-->
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                        ";
        // line 98
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 99
            echo "                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <span style=\"margin-right: 10px;\" class=\"glyphicon glyphicon-user\"></span>
                                ";
            // line 101
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array())), "html", null, true);
            echo "<b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a tabindex=\"-1\" href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">
                                    <span class=\"glyphicon glyphicon-user icon-left\"></span>Profil</a></li>
                                <li><a tabindex=\"-1\" href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("sonata_user_change_password");
            echo "\">
                                    <span class=\"glyphicon glyphicon-cog icon-left\"></span>Change password</a></li>
                                <li role=\"presentation\" class=\"divider\"></li>
                                <li><a tabindex=\"-1\" href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_logout");
            echo "\">
                                    <span class=\"glyphicon glyphicon-off icon-left\"></span>Logout</a></li>
                            </ul>
                        ";
        } elseif ( !$this->getAttribute(        // line 112
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 113
            echo "                            <li class=\"";
            if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "sonata_user_admin_security_login")) {
                echo "active";
            }
            echo "\">
                                <a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_login");
            echo "\">Login</a></li>
                        ";
        }
        // line 116
        echo "                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class=\"container\" role=\"main\">
            ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 123
            echo "                <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                        <span class=\"sr-only\">Close</span>
                    </button>
                    <p>";
            // line 128
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 132
            echo "                <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                        <span class=\"sr-only\">Close</span>
                    </button>
                    <p>";
            // line 137
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 142
        echo "            <hr class=\"bs-docs-separator\">
            <footer id=\"footer\"class=\"footer\">
                <ul class=\"list-inline\">
                    <li><a href=\"\">About</a></li>
                    <li><a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">Backoffice</a></li>
                    <li><a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("nelmio_api_doc_index");
        echo "\">Document API</a></li>
                </ul>
            </footer>
        </div>
        ";
    }

    // line 140
    public function block_content($context, array $blocks = array())
    {
        // line 141
        echo "            ";
    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        // line 153
        echo "        <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js?modules=core,widget,mouse,sortable\"></script>

         ";
        // line 157
        echo "            <script type=\"text/javascript\" src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
         ";
        // line 161
        echo "         <script type=\"text/javascript\" src=\"//www.fuelcdn.com/fuelux/3.6.3/js/fuelux.min.js\"></script>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <!-- script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script-->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        <!-- Google -->
        <script  type=\"text/javascript\">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-xxxxxxxxx-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- End Google Code -->

        <!-- Piwik -->
        <script type=\"text/javascript\">
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u=((\"https:\" == document.location.protocol) ? \"https\" : \"http\") + \"://www.tactfactory.com/piwik/\";
                _paq.push(['setTrackerUrl', u+'piwik.php']);
                _paq.push(['setSiteId', x]);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
                g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
                })();
        </script>
        <noscript><p><img src=\"http://www.tactfactory.com/piwik/piwik.php?idsite=x\" style=\"border:0;\" alt=\"\" /></p></noscript>
        <!-- End Piwik Code -->
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  387 => 161,  384 => 157,  379 => 153,  376 => 152,  372 => 141,  369 => 140,  360 => 147,  356 => 146,  350 => 142,  347 => 140,  338 => 137,  331 => 132,  326 => 131,  317 => 128,  310 => 123,  306 => 122,  298 => 116,  293 => 114,  286 => 113,  284 => 112,  278 => 109,  272 => 106,  267 => 104,  259 => 101,  255 => 99,  253 => 98,  247 => 94,  240 => 93,  237 => 92,  229 => 87,  223 => 86,  218 => 84,  212 => 83,  201 => 78,  193 => 73,  187 => 72,  177 => 68,  175 => 67,  171 => 65,  164 => 64,  162 => 63,  154 => 58,  146 => 57,  135 => 48,  133 => 47,  130 => 46,  127 => 45,  120 => 40,  117 => 39,  102 => 27,  98 => 26,  95 => 25,  93 => 24,  91 => 23,  89 => 22,  87 => 21,  84 => 19,  80 => 17,  73 => 12,  71 => 11,  68 => 10,  62 => 4,  56 => 210,  53 => 152,  51 => 45,  46 => 42,  44 => 39,  41 => 38,  39 => 10,  30 => 4,  25 => 1,);
    }
}
