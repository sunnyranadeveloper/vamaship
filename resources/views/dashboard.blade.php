<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <link href="{!! asset('css/admin4b.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/admin4b-highlight.min.css') !!}" rel="stylesheet">
  <title>Admin 4B</title>
</head>
<body>

<div class="app">
  <div class="app-body">
    <div class="app-sidebar sidebar-dark sidebar-slide-left">
  <div class="text-right">
    <button type="button" class="btn btn-sidebar" data-dismiss="sidebar">
      <span class="x"></span>
    </button>
  </div>
  <div class="sidebar-header">
    <img src="{!! asset('images/user-photo.png') !!}" class="user-photo">
    <p class="username">
      John Doe
      <small>Administrator</small>
    </p>
  </div>
  <div id="sidebar-nav" class="sidebar-nav" data-children=".sidebar-nav-group">
    <a href="./index.html" class="sidebar-nav-link">
      <i class="icon-rocket"></i> Get started
    </a>
    <div class="sidebar-nav-group">
      <a href="#components" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
        <i class="icon-puzzle"></i> Components
      </a>
      <div id="components" class="sidebar-nav-group collapse">
        <a href="./pages/components/callout.html" class="sidebar-nav-link">Callout</a>
        <a href="./pages/components/checkbox.html" class="sidebar-nav-link">Checkbox</a>
        <a href="./pages/components/code-highlight.html" class="sidebar-nav-link">Code highlight</a>
        <a href="./pages/components/input-group.html" class="sidebar-nav-link">Input group</a>
        <a href="./pages/components/input-suggestion.html" class="sidebar-nav-link">Input suggestion</a>
        <a href="./pages/components/label.html" class="sidebar-nav-link">Label</a>
        <a href="./pages/components/radio-button.html" class="sidebar-nav-link">Radio button</a>
        <a href="./pages/components/spinner.html" class="sidebar-nav-link">Spinner</a>
        <a href="./pages/components/toggle-switch.html" class="sidebar-nav-link">Toggle switch</a>
      </div>
    </div>
    <div class="sidebar-nav-group">
      <a href="#content" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
        <i class="icon-folder"></i> Content
      </a>
      <div id="content" class="sidebar-nav-group collapse">
        <a href="./pages/content/dashboard.html" class="sidebar-nav-link">Dashboard</a>
        <a href="./pages/content/timeline.html" class="sidebar-nav-link">Timeline</a>
      </div>
    </div>
    <div class="sidebar-nav-group">
      <a href="#forms" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
        <i class="icon-note"></i> Forms
      </a>
      <div id="forms" class="sidebar-nav-group collapse">
        <a href="./pages/forms/basic-form.html" class="sidebar-nav-link">Basic form</a>
        <a href="./pages/forms/multi-step-form.html" class="sidebar-nav-link">Multi step form</a>
        <a href="./pages/forms/tabbed-form.html" class="sidebar-nav-link">Tabbed form</a>
      </div>
    </div>
    <div class="sidebar-nav-group">
      <a href="#sidebar" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
        <i class="icon-layers"></i> Layout
      </a>
      <div id="sidebar" class="sidebar-nav-group collapse">
        <a href="./pages/layout/sidebar.html" class="sidebar-nav-link">Sidebar</a>
        <a href="./pages/layout/style.html" class="sidebar-nav-link">Style</a>
      </div>
    </div>
    <div class="sidebar-nav-group">
      <a href="#sample-pages" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
        <i class="icon-doc"></i> Pages
      </a>
      <div id="sample-pages" class="sidebar-nav-group collapse">
        <a href="./pages/sample-pages/blank-page.html" class="sidebar-nav-link">Blank page</a>
        <a href="./pages/sample-pages/error-page.html" class="sidebar-nav-link">Error page</a>
      </div>
    </div>
  </div>
  <div class="sidebar-footer">
    <a href="https://github.com/marxjmoura/admin4b" data-toggle="tooltip" title="GitHub">
      <i class="fa fa-github"></i>
    </a>
    <a href="./pages/sample-pages/settings.html" data-toggle="tooltip" title="Settings">
      <i class="fa fa-cog"></i>
    </a>
    <a href="{!! URL('logout'); !!}" data-toggle="tooltip" title="Logout">
      <i class="fa fa-power-off"></i>
    </a>
  </div>
</div>

    <div class="app-content">
      <nav class="navbar navbar-expand navbar-light bg-white">
  <button type="button" class="btn btn-sidebar" data-toggle="sidebar">
    <i class="fa fa-bars"></i>
  </button>
  <div class="navbar-brand">
    Admin 4B
  </div>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="badge badge-pill badge-primary">3</span>
        <i class="fa fa-bell-o"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (today)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (yesterday)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (12/25/2017)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item text-primary">
          See all notifications
        </a>
      </div>
    </li>
  </ul>
</nav>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Get started</li>
  </ol>
</nav>
<div class="container-fluid">
  <h2>
    Introduction
  </h2>
  <p>
    Admin 4B is an open source admin template built on top of <a href="https://getbootstrap.com/">Bootstrap 4</a>.
    The source code can be found on the <a href="https://github.com/marxjmoura/admin4b">GitHub repo</a>.
  </p>
  <h3>
    Quick start
  </h3>
  <p>
    For the template work properly you need to add Bootstrap CSS and JavaScript files.
    Refer to <a href="http://getbootstrap.com/docs/4.0/getting-started/introduction/">bootstrap documentation</a>
    for more information. Also, add <a href="http://fontawesome.io/">Font Awesome</a> and
    <a href="http://simplelineicons.com/">Simple Line Icons</a> CSS files.
    Then <a href="https://github.com/marxjmoura/admin4b#quick-start">download the latest release</a>
    of the template Admin 4B.
  </p>
  <h4>
    CSS
  </h4>
  <p>
    Copy-paste the stylesheet <code>&lt;link&gt;</code> into your <code>&lt;head&gt;</code> after the Bootstrap and
    Font Awesome stylesheets to load our CSS.
  </p>
  <div class="source-code">
    <a href="#css-setup" data-toggle="collapse">
      <i class="fa fa-code"></i> Source code
    </a>
    <div id="css-setup" class="sidebar-nav-group collapse">
      <pre><code class="html">&lt;!-- link to Bootstrap CSS --&gt;
&lt;!-- link to Font Awesome CSS --&gt;
&lt;!-- link to Simple Line Icons CSS --&gt;
&lt;link rel="stylesheet" href="admin4b.min.css"&gt;
</code></pre>
    </div>
  </div>
  <h4>
    JS
  </h4>
  <p>
    Place the following <code>&lt;script&gt;</code> tags near the end of your pages, right before the closing
    <code>&lt;body&gt;</code> tag. Bootstrap denpencies and plugins must come first and then our JavaScript plugins.
  </p>
  <div class="source-code">
    <a href="#js-setup" data-toggle="collapse">
      <i class="fa fa-code"></i> Source code
    </a>
    <div id="js-setup" class="sidebar-nav-group collapse">
      <pre><code class="html">&lt;!-- script to Bootstrap JS dependencies --&gt;
&lt;!-- script to Bootstrap JS --&gt;
&lt;script src="admin4b.min.js"&gt;&lt;/script&gt;
</code></pre>
    </div>
  </div>
  <h3>
    Initial setup
  </h3>
  <p>
    An example code of the initial setup can be seen below.
  </p>
  <div class="source-code">
    <a href="#initial-setup" data-toggle="collapse">
      <i class="fa fa-code"></i> Source code
    </a>
    <div id="initial-setup" class="sidebar-nav-group collapse">
      <pre><code class="html">&lt;!doctype html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;
    &lt;!-- link to Bootstrap CSS --&gt;
    &lt;!-- link to Font Awesome CSS --&gt;
    &lt;link rel="stylesheet" href="admin4b.min.css"&gt;
    &lt;title&gt;Admin 4B&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;!-- script to Bootstrap JS dependencies --&gt;
    &lt;!-- script to Bootstrap JS --&gt;
    &lt;script src="admin4b.min.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code></pre>
    </div>
  </div>
  <div class="callout callout-info">
    <h5>JavaScript initialization</h5>
    <p>All components (including bootstrap) are automatically initialized by the template.</p>
  </div>
  <h3>
    What's next?
  </h3>
  <p>
    <a href="./pages/layout/sidebar.html">Configure the sidebar navigation</a>
  </p>
</div>

    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script src="{!! asset('js/admin4b.min.js') !!}"></script>
  <script src="{!! asset('js/admin4b.docs.js') !!}"></script>
</body>
</html>
