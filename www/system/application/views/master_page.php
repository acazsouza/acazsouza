<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title == '' ? '' : $title . ' | '  ?>acazsouza.com.br</title>
        <link rel="stylesheet" href="/resources/css/style.css">
    </head>
    <body>
    	<div id="header">
            <em id="logo">acazsouza.com.br</em>
            <a href="/" class="item-menu">home</a>
            <a href="/sobre/" class="item-menu last">sobre</a>
            <span id="desc">Relatos de um desenvolvedor...</span>

            <div id="util">
            	<div>
                    <a href="http://www.twitter.com/acazsouza/" id="twitter" title="Twitter (Abre uma nova janela)" target="_blank">Twitter</a>
                    <a href="http://www.delicious.com/acazsouza/" id="delicious" title="Delicious Bookmarks (Abre uma nova janela)" target="_blank">Delicious</a>
                    <a href="#" id="rss" title="RSS Feed (Abre uma nova janela)" target="_blank">RSS</a>
                </div>
                <span>ou entre em contato em: acazsouza@gmail.com</span>
            </div>
        </div>
        <div id="content">
            <?php echo $content?>
        </div>
    </body>
</html>