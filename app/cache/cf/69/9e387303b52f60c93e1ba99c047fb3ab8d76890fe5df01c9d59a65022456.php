<?php

/* login.html */
class __TwigTemplate_cf699e387303b52f60c93e1ba99c047fb3ab8d76890fe5df01c9d59a65022456 extends Twig_Template
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
        echo "\t<div class=\"container\">
            
\t    <div class=\"image_profile\">
\t       <img src=\"assets/img/besa.jpg\" alt=\"Photograpf of Besarta Kadriu\">
\t    </div>
            
\t    <div class=\"form-group\">
                <form action=\"/check\" method=\"POST\">
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\" required> <br>\t          
                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"examleInputPassword1\" placeholder=\"Password\" required>\t          
                    <button type=\"submit\" class=\"button\" name=\"btn_logIn\">LOG IN</button>\t     
                    <p class=\"help\">Forgot password?</p>                    
                </form>\t
\t\t\t\t<button class=\"button-submit dropdown-cancel sign-up-button\"><a class=\"button-submit\" href=\"signup\">Sign Up</a></button>
\t\t\t\t
\t    </div>            
        </div>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
