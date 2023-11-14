<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pret/_form.html.twig */
class __TwigTemplate_bd921a16ad65ed3b63d641aad2b432cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "date_rendu_prevue", [], "any", false, false, false, 4), 'row', ["attr" => ["class" => "form-control"]]);
        // line 8
        echo "
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "statut", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        // line 18
        echo "
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "materiel_emprunte", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        // line 28
        echo "
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "user_emprunteur", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
        // line 38
        echo "
\t</div>
</div>

<div class=\"row mt-3\">
\t<div class=\"col-md-6\">
\t\t<button class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
\t</div>
</div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pret/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 47,  89 => 44,  81 => 38,  79 => 34,  71 => 28,  69 => 24,  61 => 18,  59 => 14,  51 => 8,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t{{ form_row(form.date_rendu_prevue, {
                'attr': {
                    'class': 'form-control',
                }
            }) }}
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t{{ form_row(form.statut, {
                'attr': {
                    'class': 'form-control',
                }
            }) }}
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t{{ form_row(form.materiel_emprunte, {
                'attr': {
                    'class': 'form-control',
                }
            }) }}
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t{{ form_row(form.user_emprunteur, {
                'attr': {
                    'class': 'form-control',
                }
            }) }}
\t</div>
</div>

<div class=\"row mt-3\">
\t<div class=\"col-md-6\">
\t\t<button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
\t</div>
</div>
{{ form_end(form) }}
", "pret/_form.html.twig", "C:\\Users\\ugora\\Desktop\\nws-inventaire\\templates\\pret\\_form.html.twig");
    }
}
