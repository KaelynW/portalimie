<?php

/* ImieCoreBundle:Default:index.html.twig */
class __TwigTemplate_aeb09427e648acda6508739539f0748284aa5f1f0eeb7ce342a0f51e75c23cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " TACT - My Portal ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"jumbotron\">
        <h1>Welcome to TACT portal.</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h3 class=\"panel-title\">Panel title</h3>
                </div>
                <div class=\"panel-body\">
                  Panel content
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ImieCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  59 => 7,  52 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
