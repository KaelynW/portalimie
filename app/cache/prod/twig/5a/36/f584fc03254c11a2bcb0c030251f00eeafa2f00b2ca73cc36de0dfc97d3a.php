<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_5a36f584fc03254c11a2bcb0c030251f00eeafa2f00b2ca73cc36de0dfc97d3a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }
}
