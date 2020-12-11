<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Notes</title>
    <link rel = "stylesheet" type = "text/css" 
    href = "<?php echo base_url(); ?>css/app.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script>
        $(document).ready(function(){
            $.get('/messages/index_html', function(res){
                $('#messages').html(res);
            });

            $('form.create_note').submit(function(){
                $.post($(this).attr('action'), $(this).serialize(), function(res) {
                    $('#messages').html(res);
                });
                return false;
            });
        });
    </script>
</head>
<body>
    
    <h1>Notes</h1>

    <div id="messages">
        <!-- area for ajax calls -->
    </div>

    <div>
        <form class="create_note" action="/messages/create_note" method="post">
            <input type="text" name="title" placeholder="add title">
            <input type="submit" value="New Note">
        </form>
    </div>

</body>
</html>