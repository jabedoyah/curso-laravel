<html>
    <head>
        <title>Facebook</title>
 
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        {HTML::script('/libs/typeahead/typeahead.min.js')}
        
        {HTML::script('assets/js/app.js')}
    </head>
    <body>
        
        {*{capture assign="var"}
            saf
            asfas
            asdfas
            
            {/capture}
            
            {$var}*}
            <div class="container">
                {capture assign='layouts'}../layouts/{$layout}.tpl{/capture}
                {include file=$layouts}
            </div>
    </body>
</html>
