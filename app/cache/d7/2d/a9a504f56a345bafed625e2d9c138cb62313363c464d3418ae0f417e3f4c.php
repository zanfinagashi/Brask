<?php

/* projects.html */
class __TwigTemplate_d72da9a504f56a345bafed625e2d9c138cb62313363c464d3418ae0f417e3f4c extends Twig_Template
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
        echo "\t\t<div class=\"page-header\">
\t\t\t<div class=\"header-content\">
\t\t\t\t<img  class=\"profile-image\" src=\"assets/img/besa.jpg\" alt=\"Photo\">
\t\t\t\t<div class=\"logged-user\">
\t\t\t\t\t<div class=\"logged-user-dropdown\">MIK Agency</div>
\t\t\t\t\t<div class=\"logged-user-dropdown-options\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"select-logged-user-dropdown-options profile-hover\"><a href=\"#\">My Profile  <span class=\"my-profile-line line\">|</span></a></div><br>
\t\t\t\t\t\t<div class=\"select-logged-user-dropdown-options manage-hover\"><a href=\"#\">Manage Projects <span class=\"manage-projects-line line\">|</span></a></div><br>
\t\t\t\t\t\t<div class=\"select-logged-user-dropdown-options sign-out-hover\"><a href=\"logout\">Sign Out  <span class=\"sign-out-line line\">|</span></a></div><br>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t</div>\t

\t\t<div class=\"container\">
\t\t\t<div class=\"image_profile\">
\t           <img src=\"assets/img/besa.jpg\" alt=\"Photo\">
\t        </div> 

\t        <div class=\"dropdown project_dropdown\">
\t\t        <div class=\"select_project\">
\t\t        \t<input type=\"text\" value=\"Select project\" class=\"selected_project\" id=\"selected_project_dropdown\"> 

\t\t         </div>
\t\t         <div class=\"select_project_container\">
\t\t        \t<input type=\"text\" value=\"Add a new project\"  class=\"selected add\" id=\"selected_project_option\" >
\t\t\t\t\t
\t\t\t\t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 32
            echo "\t\t\t\t\t
\t\t\t\t\t<input type='text' value='";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "p_name", array()), "html", null, true);
            echo "'  class='select_project_option selected' id='selected_project_option'>
\t\t\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t        </div>  
\t\t    </div>

\t        <input type=\"text\" value=\"Add new project\" class=\"add_new_project add_new\" required>

\t        <div class=\"go_edit_delete tools\"> 
\t\t        \t<a class=\"go_to_project\" href=\"#\">Go to Project</a>
\t\t        \t<a class=\"edit\" href=\"#\"><img src=\"assets/img/edit.png\"></a>
\t\t        \t<a class=\"delete\" href=\"#\"><img src=\"assets/img/delete.png\"></a>\t\t    
\t\t\t</div>

\t\t\t<br>

\t\t\t<input type=\"text\" value=\"Add new members\" class=\"add_members\">
\t\t\t
\t\t\t<div class=\"dropdown task_dropdown\">
\t\t\t\t<div class=\"select_project\">
\t\t\t        <input type=\"text\" value=\"Select task\" class=\"selected_project\" id=\"selected_task_dropdown\" disabled=\"disabled\">       \t
\t\t\t    </div>

\t\t        <div class=\"select_task_container\">
\t\t        \t<input type=\"text\" value=\"Add a new task\" class=\"selected add_task\" id=\"selected_task_option\">
\t\t        \t<input type=\"text\" value=\"Home Page\" class=\"selected_task_option selected\" id=\"selected_task_option\">
\t\t        \t<input type=\"text\" value=\"Branding book\"  class=\"selected_task_option selected\" id=\"selected_task_option\">      \t
\t\t        </div>
\t        </div>

\t        <div class=\"edit_delete tools\"> 
\t\t        \t<a class=\"edit\" href=\"#\"><img src=\"assets/img/edit.png\"></a>
\t\t        \t<a class=\"delete\" href=\"#\"><img src=\"assets/img/delete.png\"></a>\t\t    
\t\t\t</div>

\t        <input type=\"text\" value=\"Add new task\" class=\"add_new_task add_new\" required>
\t        <br>
\t        <div class=\"add_new_task add_new\" id=\"uploadDiv\">\t
\t        \t<span class=\"drag-or-click\"> Drag the file or click here</span>        
\t        \t<input id=\"uploadBtn\" type=\"file\" name=\"file\" class=\"upload add_new_task add_new uploadFile\" required>
\t        </div>
\t        <br>
\t        <div class=\"finalize\">
\t        \t<span class=\"left-align\"><button class=\"button-submit dropdown-cancel\"><a class=\"button-submit\" href=\"/login\">CANCEL</a></button></span>
\t\t\t\t<span class=\"right-align\"><button class=\"button-submit dropdown-save-proceed\" type=\"submit\">SAVE & PROCEED</button></span>
\t        </div>\t
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "projects.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 36,  76 => 33,  73 => 32,  69 => 31,  39 => 3,  36 => 2,  11 => 1,);
    }
}
