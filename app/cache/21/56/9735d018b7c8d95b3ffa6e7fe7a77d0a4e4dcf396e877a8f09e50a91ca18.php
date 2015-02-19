<?php

/* raporti.html */
class __TwigTemplate_21569735d018b7c8d95b3ffa6e7fe7a77d0a4e4dcf396e877a8f09e50a91ca18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
\t<div class=\"col-md-12\">
\t<h1>Raporti</h1>
    <div>";
        // line 6
        echo (isset($context["raporti"]) ? $context["raporti"] : null);
        echo "</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "raporti.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
