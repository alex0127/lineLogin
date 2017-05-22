<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="application/x-www-form-urlencoded;" />    

    <script>
        function Auth() {
            var URL = 'https://access.line.me/dialog/oauth/weblogin?';
            URL += 'response_type=code';
            URL += '&client_id=1496599978';
            URL += '&redirect_uri=https://hr.hiyes.tw/lineLogin.php';
            URL += '&state=abcde';
            window.location.href = URL;
        }
    </script>
</head>
<body>
    <button onClick="Auth();">點選這裡連結到Line Login</button>
    <form id="from1" name="form1" method="post" action="https://api.line.me/v2/oauth/accessToken">
        <input name="grant_type" type="text" value="authorization_code" />
        <input name="client_id" type="text" value="1496599978" />
        <input name="client_secret" type="text" value="3734c91dd9bbd0ab552b6602f6395852" />        
        <input name="code" type="text" value="<%=Request("code") %>" />
        <input name="redirect_uri" type="text" value="https://hr.hiyes.tw/lineLogin.php" />
        <input name="Submit1" type="submit" value="submit" />
    </form>
</body>
</html>
