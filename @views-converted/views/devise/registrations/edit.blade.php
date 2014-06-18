<h2>Edit {{ resource_name.to_s.humanize }}</h2>

{{ form_for(resource, :as => resource_name, :url => registration_path(resource_name), :html => { :method => :put }) do |f| }}
  {{ devise_error_messages! }}

  <p>{{ f.label :email }}<br />
  {{ f.email_field :email }}</p>

  <p>{{ f.label :password }} <i>(leave blank if you don't want to change it)</i><br />
  {{ f.password_field :password }}</p>

  <p>{{ f.label :password_confirmation }}<br />
  {{ f.password_field :password_confirmation }}</p>

  <p>{{ f.label :current_password }} <i>(we need your current password to confirm your changes)</i><br />
  {{ f.password_field :current_password }}</p>

  <p>{{ f.submit "Update" }}</p>
@end

<h3>Cancel my account</h3>

<p>Unhappy? {{ link_to "Cancel my account", registration_path(resource_name), :confirm => "Are you sure?", :method => :delete }}.</p>

{{ link_to "Back", :back }}
