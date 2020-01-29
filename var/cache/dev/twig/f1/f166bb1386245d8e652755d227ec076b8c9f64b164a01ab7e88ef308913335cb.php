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

/* admin/category/show_all_category.html.twig */
class __TwigTemplate_3be5a48dcaf087b13a4be2f6c1ccc0d65c2dc227cc6ea4b512c9a6737daf720b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show_all_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show_all_category.html.twig"));

        // line 1
        echo "<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: left;
    }
</style>

<h1>All Categories</h1>

";
        // line 12
        if ( !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "    <table>
        <thead>
        <tr>
            <th>Title</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 21
                echo "            <tr>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                <td><a href=\"/admin/category/delete/";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">Delete Category</a></td>
                <td><a href=\"/admin/category/update/";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\">Update Category</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </tbody>
    </table>
";
        } else {
            // line 30
            echo "    <p>No categories found.</p>
";
        }
        // line 32
        echo "
<br/>
<a href=\"/admin/category/create\">Create New Category</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/show_all_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  96 => 30,  91 => 27,  82 => 24,  78 => 23,  74 => 22,  71 => 21,  67 => 20,  58 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: left;
    }
</style>

<h1>All Categories</h1>

{% if category is not empty %}
    <table>
        <thead>
        <tr>
            <th>Title</th>
        </tr>
        </thead>
        <tbody>
        {% for cat in category %}
            <tr>
                <td>{{ cat.title }}</td>
                <td><a href=\"/admin/category/delete/{{ cat.id }}\">Delete Category</a></td>
                <td><a href=\"/admin/category/update/{{ cat.id }}\">Update Category</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% else %}
    <p>No categories found.</p>
{% endif %}

<br/>
<a href=\"/admin/category/create\">Create New Category</a>", "admin/category/show_all_category.html.twig", "/Users/tactic/news-portal/templates/admin/category/show_all_category.html.twig");
    }
}
