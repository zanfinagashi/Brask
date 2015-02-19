<?php

/* layout.html */
class __TwigTemplate_b8ceb4d303e2ec5ad39018147411e16b6425d87db66dcf852f6e29c07074bac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html> 
<html>
 <head>
     <meta charset=\"utf-8\">
\t  <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
\t  <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">\t 
\t  <link rel=\"stylesheet\" href=\"assets/css/bootstrap-theme.min.css\">
\t  <link rel=\"stylesheet\" href=\"assets/css/bootstrap.css\">
\t  <link rel=\"stylesheet\"  href=\"assets/css/style.css\">
\t";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "</head>
<body>
\t ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "
\t 
\t <script src=\"http://code.jquery.com/jquery-1.11.2.min.js\" type=\"text/javascript\" charset=\"urf-8\"></script>
\t <script type=\"text/javascript\" src=\"assets/js/script.js\"></script>\t
</body>
</html>";
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        // line 12
        echo "\t";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  56 => 12,  53 => 11,  44 => 16,  42 => 15,  38 => 13,  36 => 11,  28 => 6,  21 => 1,);
    }
}
