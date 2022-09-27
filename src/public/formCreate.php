<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>sample</title>
    </head>
    <h2>お問い合わせフォーム</h2>
    <p>以下フォームからお問い合わせをしましょう！</p>
    <body>
        <form action="complete.php" method="post">
            ID<br />
            <input type="text" name="id" size="50" value="" /><br />
 
            名前<br />
            <input type="text" name="mail" size="50" value="" /><br />
 
            好きな食べ物<br />
            <textarea name="content" cols="50" rows="5"></textarea><br />
            <br />
            <input type="submit" value="送信" />
        </form>
    </body>
</html>