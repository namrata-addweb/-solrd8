<?php

/* modules/contrib/search_api_page/templates/search-api-page.html.twig */
class __TwigTemplate_e15efbb6739b4aad05dee893c583cfa783e2b9c83ceb9cd7add1e2d7148e14bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "

";
        // line 3
        if ((isset($context["search_title"]) ? $context["search_title"] : null)) {
            // line 4
            echo "  <h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_title"]) ? $context["search_title"] : null), "html", null, true));
            echo "</h2>
";
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["no_of_results"]) ? $context["no_of_results"] : null)) {
            // line 8
            echo "  <p>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["no_of_results"]) ? $context["no_of_results"] : null), "html", null, true));
            echo "</p>
";
        }
        // line 10
        echo "
";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["no_results_found"]) ? $context["no_results_found"] : null), "html", null, true));
        echo "

";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_help"]) ? $context["search_help"] : null), "html", null, true));
        echo "

";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["results"]) ? $context["results"] : null), "html", null, true));
        echo "

";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/search_api_page/templates/search-api-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  80 => 15,  75 => 13,  70 => 11,  67 => 10,  61 => 8,  59 => 7,  56 => 6,  50 => 4,  48 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ form }}

{% if search_title %}
  <h2>{{ search_title }}</h2>
{% endif %}

{% if no_of_results %}
  <p>{{ no_of_results }}</p>
{% endif %}

{{ no_results_found }}

{{ search_help }}

{{ results }}

{{ pager }}
";
    }
}
