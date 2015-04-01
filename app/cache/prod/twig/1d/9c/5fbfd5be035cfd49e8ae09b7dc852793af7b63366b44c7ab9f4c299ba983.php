<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_1d9c5fbfd5be035cfd49e8ae09b7dc852793af7b63366b44c7ab9f4c299ba983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  27 => 14,  18 => 12,);
    }
}
