/* pages/login.jsx - Login page. */

/*
modification history
--------------------
01a,21sep21,rks  created.
*/

import React from 'react';

function Login() {
  return (
    <div className="login-box">
      <form id="loginform" action="includes/login.php" method="post">
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="regd_no" placeholder="Registration Number" required />
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" pattern=".{6,32}" name="password" placeholder="Password" required title="Password must be 6 to 32 characters" />
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="main_input_box">
						<span><button type="submit" name="login" class="btn btn-large btn-success"> Login</button></span>

					</div>
				</div>
			</div>
			<div class="form-actions">
				<span class="pull-right"><a href="#" class="flip-link btn btn-info" id="to-recover">Forgot password&nbsp;?</a></span>
			</div>
		</form>
    </div>
  );
}

export default Login;
