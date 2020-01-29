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

/* admin/edit_news.html.twig */
class __TwigTemplate_8887b6df40933b54900373eeb8922a44d24d892878072296539c663124c55731 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit_news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit_news.html.twig"));

        // line 1
        echo "<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: right;
    }
</style>

<h1>Create or Update Article:</h1>

";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

<table>
    <tbody>
    <tr>
        <th>Title:</th>
        <td>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), 'widget');
        echo "</td>
    </tr>
    <tr>
        <th>Description:</th>
        <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'widget');
        echo "</td>
    </tr>
    <tr>
        <th>Content:</th>
        <td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "content", [], "any", false, false, false, 26), 'widget');
        echo "</td>
    </tr>
";
        // line 32
        echo "    <tr>
        <th></th>
        <td>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "submit", [], "any", false, false, false, 34), 'widget');
        echo "</td>
    </tr>
    </tbody>
</table>

";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  88 => 34,  84 => 32,  79 => 26,  72 => 22,  65 => 18,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: right;
    }
</style>

<h1>Create or Update Article:</h1>

{{ form_start(form) }}

<table>
    <tbody>
    <tr>
        <th>Title:</th>
        <td>{{ form_widget(form.title) }}</td>
    </tr>
    <tr>
        <th>Description:</th>
        <td>{{ form_widget(form.description) }}</td>
    </tr>
    <tr>
        <th>Content:</th>
        <td>{{ form_widget(form.content) }}</td>
    </tr>
{#    <tr>#}
{#        <th>Picture:</th>#}
{#        <td><img src={{ form_widget(form.picture.value) }} /></td>#}
{#    </tr>#}
    <tr>
        <th></th>
        <td>{{ form_widget(form.submit) }}</td>
    </tr>
    </tbody>
</table>

{{ form_end(form) }}", "admin/edit_news.html.twig", "/Users/tactic/news-portal/templates/admin/edit_news.html.twig");
    }
}
