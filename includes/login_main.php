<div class="panel-heading">
    <h3 class="panel-title">Please Sign In</h3>
</div>
<div class="panel-body">
    <form action="login.php?s=exec" method="post">
        <fieldset>
            <div class="form-group">
                <input class="form-control" placeholder="Employee ID" name="username" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password">
            </div>
            <a href="login.php?s=for_pass">Forgot Password</a>
            <input type="submit" name="login" class="btn btn-lg btn-success btn-block" value="Login">
        </fieldset>
    </form>
</div>
