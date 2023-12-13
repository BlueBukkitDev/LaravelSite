<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href={{asset('styles/global.css')}}>
    </head>
    <body>
        <?php include 'sidebar.php' ?>

        <div class="mid">
            <div class="content">
                <p>All kinds of content could go inside this div. This is a basic paragraph made up of all kinds of generic lorem ipsum content, like what you just read and continue to read. This paragraph needs to be long enough to properly display what is going on in this div.
                    <br/>
                    <br/>
                    <br/>
                    All the way down here, a new paragraph, within the same tags. </p>
            </div>
        </div>
    </body>
</html>
