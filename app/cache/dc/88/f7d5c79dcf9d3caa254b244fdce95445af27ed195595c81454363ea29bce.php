<?php

/* signup.html */
class __TwigTemplate_dc88f7d5c79dcf9d3caa254b244fdce95445af27ed195595c81454363ea29bce extends Twig_Template
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
\t       <img src=\"assets/img/besa.jpg\" alt=\"Photo\">
\t    </div>
     
\t    <div class=\"form-group1\">
                
           <form method=\"post\" enctype=\"multipart/form-data\" action = \"/register\">
\t\t     <input type=\"text\" name = \"name\" class=\"form-control1\" id=\"exampleInputName\" placeholder=\"Name\" required>
\t\t     <input type=\"text\" name = \"surname\" class=\"form-control1\" id=\"examleInputSurname\" placeholder=\"Surname\" required>
\t\t     <input type=\"email\" name = \"email\"  class=\"form-control1\" id=\"examleInputemail\" placeholder=\"Email\" required>
\t\t     <input type=\"email\" name = \"conf_email\" class=\"form-control1\" id=\"examleInputConfirmemail\" placeholder=\"Confirm email\" required>
\t\t     <input type=\"Password\" name = \"password\" class=\"form-control1\" id=\"examleInputPassword\" placeholder=\"Password\" required>
\t\t     <input type=\"Password\" name = \"conf_password\" class=\"form-control1\"  id=\"examleInputconfirm\" placeholder=\"Confirm Password\" required>
\t\t      
\t\t     
\t\t     <div class=\"fileUpload btn btn-primary\">
\t\t\t <input  id=\"uploadFile\" placeholder=\"Image\" />
\t\t\t <span class=\"upload_span\"> <div class=\"splash\">|</div> Upload image</span>
\t\t\t <input id=\"uploadBtn\" type=\"file\" name=\"file\" class=\"upload\" />
\t\t     </div>
\t\t\t\t
\t\t     <div>
\t\t\t\t<br><br>
\t        \t<span class=\"left-align\"></span><button class=\"button-submit dropdown-cancel\"><a class=\"button-submit\" href=\"/login\">CANCEL</a></button></span>
\t\t\t\t<span class=\"right-align\"><button class=\"button-submit dropdown-save-proceed\" type=\"submit\">SAVE & PROCEED</button></span>
\t        </div>
\t\t</form>
\t      </div>
         </div>
";
    }

    public function getTemplateName()
    {
        return "signup.html";
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
