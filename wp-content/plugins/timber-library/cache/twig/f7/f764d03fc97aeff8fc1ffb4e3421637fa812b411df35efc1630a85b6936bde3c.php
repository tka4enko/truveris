<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* views/partials/header.twig */
class __TwigTemplate_fbf65b4b90ed03ce2fcf2653acf662995543f61a8b88d0d41fd56c5faf8442df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["global"] = call_user_func_array($this->env->getFunction('get_global_options')->getCallable(), []);
        // line 3
        echo "<header class=\"header\">
  <div class=\"container\">
    <div class=\"header-nav\">
      <a class=\"logo\" href=\"";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["global"] ?? null), "site", []), "url", []);
        echo "\">
";
        // line 10
        echo "      </a>
      <nav class=\"navbar-wrapper navbar\" data-navbar=\"mode: click\">
        <div class=\"navbar-right\">
          <ul class=\"navbar-nav\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "menu", []), "menu_primary", []), "get_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "              ";
            $context["item_active"] = (((twig_in_filter("current-page-ancestor", $this->getAttribute($context["item"], "classes", [])) || twig_in_filter("current-menu-item", $this->getAttribute($context["item"], "classes", [])))) ? ("active") : (""));
            // line 16
            echo "              <li
                class=\"";
            // line 17
            echo ($context["item_active"] ?? null);
            echo "\">
                ";
            // line 18
            if (twig_in_filter("button", $this->getAttribute($context["item"], "classes", []))) {
                // line 19
                echo "                  <div class=\"navbar-item\">
                    <a href=\"#\"
                       class=\"";
                // line 21
                echo $this->getAttribute($context["item"], "class", []);
                echo " ";
                if ($this->getAttribute($context["item"], "get_children", [])) {
                    echo " dropdown-toggler ";
                }
                echo "\"
                       target=\"";
                // line 22
                echo (($this->getAttribute($context["item"], "is_external", [])) ? ("_blank") : ("_self"));
                echo "\"><span>";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</span></a>
                  </div>
                ";
            } else {
                // line 25
                echo "                  <a href=\"#\"
                     class=\"";
                // line 26
                echo $this->getAttribute($context["item"], "class", []);
                echo " ";
                if ($this->getAttribute($context["item"], "get_children", [])) {
                    echo " dropdown-toggler ";
                }
                echo "\"
                     target=\"";
                // line 27
                echo (($this->getAttribute($context["item"], "is_external", [])) ? ("_blank") : ("_self"));
                echo "\">
                    <span>";
                // line 28
                echo $this->getAttribute($context["item"], "title", []);
                echo "</span>
                    ";
                // line 29
                if ($this->getAttribute($context["item"], "get_children", [])) {
                    // line 30
                    echo "                      <span class=\"nav-arrow\">
                                      <img data-svg data-src=\"";
                    // line 31
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "site", []), "theme", []), "uri", []);
                    echo "/assets/images/svg/arrow.svg\" alt=\"\">
                                    </span>
                    ";
                }
                // line 34
                echo "                  </a>
                ";
            }
            // line 36
            echo "                ";
            if ($this->getAttribute($context["item"], "get_children", [])) {
                // line 37
                echo "                  <div class=\"navbar-dropdown\">
                    <ul class=\"nav dropdown-nav\" data-margin>
                      ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "get_children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 40
                    echo "                        <li
                          class=\"";
                    // line 41
                    echo ($context["child_active"] ?? null);
                    echo "\">
                          ";
                    // line 42
                    if (($this->getAttribute($context["child"], "url", []) == "#")) {
                        // line 43
                        echo "                            <h3 class=\"nav-title ";
                        if ($this->getAttribute($context["child"], "get_children", [])) {
                            echo " dropdown-toggler ";
                        }
                        echo "\">
                              ";
                        // line 44
                        echo $this->getAttribute($context["child"], "title", []);
                        echo "
                            </h3>
                          ";
                    } else {
                        // line 47
                        echo "                            <a class=\"nav-title ";
                        echo $this->getAttribute($context["child"], "class", []);
                        echo " ";
                        if ($this->getAttribute($context["child"], "get_children", [])) {
                            echo " dropdown-toggler ";
                        }
                        echo "\"
                               href=\"";
                        // line 48
                        echo $this->getAttribute($context["child"], "get_link", []);
                        echo "\" target=\"";
                        echo (($this->getAttribute($context["child"], "is_external", [])) ? ("_blank") : ("_self"));
                        echo "\">
                              <span>";
                        // line 49
                        echo $this->getAttribute($context["child"], "title", []);
                        echo "</span>
                            </a>
                          ";
                    }
                    // line 52
                    echo "                          ";
                    if ($this->getAttribute($context["child"], "get_children", [])) {
                        // line 53
                        echo "                            <ul class=\"nav dropdown-nav\">
                              ";
                        // line 54
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child"], "get_children", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 55
                            echo "                                ";
                            $context["child_active"] = (((twig_in_filter("current-page-ancestor", $this->getAttribute($context["child"], "classes", [])) || twig_in_filter("current-menu-item", $this->getAttribute($context["child"], "classes", [])))) ? ("active") : (""));
                            // line 56
                            echo "                                <li class=\"";
                            echo ($context["child_active"] ?? null);
                            echo "\">
                                  <a class=\"";
                            // line 57
                            echo $this->getAttribute($context["child"], "class", []);
                            echo "\" href=\"";
                            echo $this->getAttribute($context["child"], "get_link", []);
                            echo "\"
                                     target=\"";
                            // line 58
                            echo (($this->getAttribute($context["child"], "is_external", [])) ? ("_blank") : ("_self"));
                            echo "\"><span>";
                            echo $this->getAttribute($context["child"], "title", []);
                            echo "</span></a>
                                </li>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 61
                        echo "                            </ul>
                          ";
                    }
                    // line 63
                    echo "                        </li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                    </ul>
                  </div>

                ";
            }
            // line 69
            echo "              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

";
    }

    public function getTemplateName()
    {
        return "views/partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 71,  223 => 69,  217 => 65,  210 => 63,  206 => 61,  195 => 58,  189 => 57,  184 => 56,  181 => 55,  177 => 54,  174 => 53,  171 => 52,  165 => 49,  159 => 48,  150 => 47,  144 => 44,  137 => 43,  135 => 42,  131 => 41,  128 => 40,  124 => 39,  120 => 37,  117 => 36,  113 => 34,  107 => 31,  104 => 30,  102 => 29,  98 => 28,  94 => 27,  86 => 26,  83 => 25,  75 => 22,  67 => 21,  63 => 19,  61 => 18,  57 => 17,  54 => 16,  51 => 15,  47 => 14,  41 => 10,  37 => 6,  32 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set global = get_global_options() %}
{#{{ dump(global) }}#}
<header class=\"header\">
  <div class=\"container\">
    <div class=\"header-nav\">
      <a class=\"logo\" href=\"{{ global.site.url }}\">
{#        <img data-img=\"data-src:{{ global.site.theme.uri }}/assets/images/svg/logo.svg\"#}
{#             data-svg#}
{#             alt=\"logo\"/>#}
      </a>
      <nav class=\"navbar-wrapper navbar\" data-navbar=\"mode: click\">
        <div class=\"navbar-right\">
          <ul class=\"navbar-nav\">
            {% for item in global.menu.menu_primary.get_items %}
              {% set item_active = 'current-page-ancestor' in item.classes or 'current-menu-item' in item.classes ? 'active' : '' %}
              <li
                class=\"{{ item_active }}\">
                {% if 'button' in item.classes %}
                  <div class=\"navbar-item\">
                    <a href=\"#\"
                       class=\"{{ item.class }} {% if item.get_children %} dropdown-toggler {% endif %}\"
                       target=\"{{ item.is_external ? '_blank' : '_self' }}\"><span>{{ item.title }}</span></a>
                  </div>
                {% else %}
                  <a href=\"#\"
                     class=\"{{ item.class }} {% if item.get_children %} dropdown-toggler {% endif %}\"
                     target=\"{{ item.is_external ? '_blank' : '_self' }}\">
                    <span>{{ item.title }}</span>
                    {% if item.get_children %}
                      <span class=\"nav-arrow\">
                                      <img data-svg data-src=\"{{ global.site.theme.uri }}/assets/images/svg/arrow.svg\" alt=\"\">
                                    </span>
                    {% endif %}
                  </a>
                {% endif %}
                {% if item.get_children %}
                  <div class=\"navbar-dropdown\">
                    <ul class=\"nav dropdown-nav\" data-margin>
                      {% for child in item.get_children %}
                        <li
                          class=\"{{ child_active }}\">
                          {% if child.url == '#' %}
                            <h3 class=\"nav-title {% if child.get_children %} dropdown-toggler {% endif %}\">
                              {{ child.title }}
                            </h3>
                          {% else %}
                            <a class=\"nav-title {{ child.class }} {% if child.get_children %} dropdown-toggler {% endif %}\"
                               href=\"{{ child.get_link }}\" target=\"{{ child.is_external ? '_blank' : '_self' }}\">
                              <span>{{ child.title }}</span>
                            </a>
                          {% endif %}
                          {% if child.get_children %}
                            <ul class=\"nav dropdown-nav\">
                              {% for child in child.get_children %}
                                {% set child_active = 'current-page-ancestor' in child.classes or 'current-menu-item' in child.classes ? 'active' : '' %}
                                <li class=\"{{ child_active }}\">
                                  <a class=\"{{ child.class }}\" href=\"{{ child.get_link }}\"
                                     target=\"{{ child.is_external ? '_blank' : '_self' }}\"><span>{{ child.title }}</span></a>
                                </li>
                              {% endfor %}
                            </ul>
                          {% endif %}
                        </li>
                      {% endfor %}
                    </ul>
                  </div>

                {% endif %}
              </li>
            {% endfor %}
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

", "views/partials/header.twig", "/var/www/html/wp-content/themes/truveris/views/partials/header.twig");
    }
}
