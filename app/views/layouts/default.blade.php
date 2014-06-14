<!DOCTYPE html>
<html>
<head>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>かんばんりすと</title>
  
  {{ HTML::style('assets/stylesheets/application.css'); }}
  {{ HTML::style('assets/stylesheets/task_default.css')}}

  {{--
  <%= stylesheet_link_tag :application %>
  <%= stylesheet_link_tag "task_default" , id: "task_theme" %>
  <%= javascript_include_tag 'application' %>
  <%= csrf_meta_tag %>
  --}}

</head>
<body id="body_core" style="
 background-color: white;
 background-attachment: fixed;
 background-position: center top;
 background-repeat:  repeat;
 padding-top: 60px;
">
 
  {{--
  <% if ENV['GOOGLE_ANALYTICS_ID'] %>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<%= ENV['GOOGLE_ANALYTICS_ID'] %>', 'heroku.com');
    ga('send', 'pageview');
  </script>
  <% end %>
  --}}

<header>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="brand" href="/">かんばんりすと</a>
        <div class="nav-collapse">
          <ul class="nav pull-left">
          {{--

            <% if current_user %>
              <li><%= link_to raw('<i class="icon-eye-open"></i>'), dashboard_index_path, { rel: "tooltip", title: "Go to your dashboard" } %></li>
              <li><%= link_to raw('<i class="icon-home"></i>'), tasks_path, { rel: "tooltip", title: "Go to your kanbanlist" } %></li>
            <% end %>

            <% if params[:controller] == "tasks" and param
              s[:action] == "index" %>
              {{ View::make("layouts/book_list_dropdown_l
              i");
              {{ View::make("layouts/layout_dropdown_li");
              {{ View::make("layouts/theme_dropdown_li");
            <% end %>
          </ul>


          <% if params[:controller] == "tasks" and params[:action] == "index" %>
          <form id="filter_form" method="post" class="navbar-search pull-left">
            <input type="text" id="filter_str" class="search-query span2" value="" placeholder="Filter"/>
          </form>


          <div class="pull-left">
            {{ View::make("layouts/task_count_table");
          </div>
          <% end %>

          <ul class="nav pull-right">
            <% if params[:controller] == "tasks" and params[:action] == "index" %>
              {{ View::make("layouts/trial_feature_dropdown_li");
            <% end %>

            <% if current_user %>
              <li><%= link_to('Logout', [ :destroy, :user_session ], :class => '') %></li>
            <% end %>
          </ul>

          --}}
        </div>
      </div>
    </div>
  </div>
</header>



{{ View::make("layouts/new_book_dialog"); }}
{{ View::make("layouts/remove_book_dialog"); }}
{{ View::make("layouts/send_mail_dialog"); }}
{{ View::make("layouts/set_bg_image_dialog"); }}
{{ View::make("layouts/delete_task_dialog"); }}

 @yield('content')

  <footer>
    <span>
    © 2011 Naoki KODAMA. All rights reserved.
    </span>
  </footer>
</body>
</html>