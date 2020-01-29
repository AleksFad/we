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

/* admin/news/show_all_news.html.twig */
class __TwigTemplate_9818be8bcbfb3f114f296a43967b2b263313c274e8b68c6294bb255c16d7eeaa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/news/show_all_news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/news/show_all_news.html.twig"));

        // line 1
        echo "<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: left;
    }
</style>

<h1>All News</h1>

";
        // line 12
        if ( !twig_test_empty((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Picture</th>
";
            // line 21
            echo "        </tr>
        </thead>
        <tbody>
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["one_news"]) {
                // line 25
                echo "            <tr>
                <td><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_view", ["id" => twig_get_attribute($this->env, $this->source, $context["one_news"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["one_news"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["one_news"], "description", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
";
                // line 30
                echo "                <td><img src=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["one_news"], "image", [], "any", false, false, false, 30), "html", null, true);
                echo " /></td>
                <td><a href=\"/admin/news/delete/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["one_news"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\">Delete News</a></td>
                <td><a href=\"/admin/news/update/";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["one_news"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\">Update News</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </tbody>
    </table>
";
        } else {
            // line 38
            echo "    <p>No news found.</p>
";
        }
        // line 40
        echo "
<br/>
<a href=\"/admin/news/create\">Create New</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/news/show_all_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  111 => 38,  106 => 35,  97 => 32,  93 => 31,  88 => 30,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  66 => 21,  58 => 13,  56 => 12,  43 => 1,);
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

<h1>All News</h1>

{% if news is not empty %}
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Picture</th>
{#            <th>Date</th>#}
{#            <th>Picture</th>#}
        </tr>
        </thead>
        <tbody>
        {% for one_news in news %}
            <tr>
                <td><a href=\"{{ path('news_view', {id: one_news.id}) }}\">{{ one_news.title }}</td>
                <td>{{ one_news.description }}</td>
{#                <td>{{ one_news.content | slice(0, 20) }}...</td>#}
{#                <td>{{ one_news.date|date('Y-m-d') }}</td>#}
                <td><img src={{ one_news.image }} /></td>
                <td><a href=\"/admin/news/delete/{{ one_news.id }}\">Delete News</a></td>
                <td><a href=\"/admin/news/update/{{ one_news.id }}\">Update News</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% else %}
    <p>No news found.</p>
{% endif %}

<br/>
<a href=\"/admin/news/create\">Create New</a>", "admin/news/show_all_news.html.twig", "/Users/tactic/news-portal/templates/admin/news/show_all_news.html.twig");
    }
}
