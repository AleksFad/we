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

/* admin/category/view_category.html.twig */
class __TwigTemplate_416a3581f2b8074789a568406579537dcb50c48247b1fa60d2038952bbf38f91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/view_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/view_category.html.twig"));

        // line 1
        echo "<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: right;
    }
</style>

<h1>Category Created or Modified</h1>

<table>
    <tbody>
    <tr>
        <th>Title:</th>
        <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
</table>

<br/>
<a href=\"/admin/category\">View All Categories</a> -
<a href=\"/admin/category/update/";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "\">Modify Category</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/view_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  60 => 16,  43 => 1,);
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

<h1>Category Created or Modified</h1>

<table>
    <tbody>
    <tr>
        <th>Title:</th>
        <td>{{ category.title }}</td>
    </tr>
    </tbody>
</table>

<br/>
<a href=\"/admin/category\">View All Categories</a> -
<a href=\"/admin/category/update/{{ category.id }}\">Modify Category</a>", "admin/category/view_category.html.twig", "/Users/tactic/news-portal/templates/admin/category/view_category.html.twig");
    }
}
