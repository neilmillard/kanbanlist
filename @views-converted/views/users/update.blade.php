<div class="container-fluid">
  <div class="well">
    <center>
    <p>パスワードを変更しました。再ログインをお願いします</p>
    {{ link_to 'ログイン', [ :new, :user_session ],:class => 'btn btn-primary btn-large' }}
    </center>
  </div>
</div>
