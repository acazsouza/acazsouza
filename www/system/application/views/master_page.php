<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title == '' ? '' : $title . ' | '  ?>acazsouza.com.br</title>
        <link rel="stylesheet" href="/resources/css/style.css">
        <link rel="alternate" type="application/rss+xml" title="acazsouza.com.br Feed" href="http://www.acazsouza.com.br/feed" />
    </head>
    <body>
    	<div id="header">
            <em id="logo">acazsouza.com.br</em>
            <a href="/" class="item-menu">home</a>
            <a href="/sobre/" class="item-menu last">sobre</a>

            <div id="util">
                <a href="http://www.twitter.com/acazsouza" title="Abre uma nova janela" target="_blank">Twitter</a> |
                <a href="http://www.delicious.com/acazsouza" title="Abre uma nova janela" target="_blank">Delicious</a> |
                <a href="https://github.com/acazsouza" title="Abre uma nova janela" target="_blank">GitHub</a> |
                <a href="http://www.quora.com/Acaz-Pereira" title="Abre uma nova janela" target="_blank">Quora</a> | 
                <a href="http://feeds.feedburner.com/acazsouza" title="Abre uma nova janela" target="_blank">Feed</a>
                <span>ou entre em contato em: acazsouza<x>@</x>gmail.com</span>
            </div>
        </div>
        <div id="content">
            <?php echo $content?>
        </div>
    </body>
</html>