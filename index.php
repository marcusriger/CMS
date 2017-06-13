<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Mit eget CMS</title>
</head>

<body>
    <header class="container">
        <h1>Marcus's Doodles</h1> </header>
    <nav class="navbar  navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">Doodles</a> </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
        <h1 class="">Create Article</h1>
        <form action="insert.php" method="get" class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="heading" id="heading" class="form-control" placeholder=""> </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="text" name="imgSrc" id="imgSrc" class="form-control" id="" placeholder=""> </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alt-text</label>
                <input type="text" name="imgAlt" id="imgAlt" class="form-control" placeholder=""> </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <input type="text" name="time" id="imgAlt" class="form-control" placeholder=""> </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <textarea name="articleText" id="articleText" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="container">
        <div class="parent">
            <div class="row">
                <!-- Artikler -->
                <section class="col-md-8">
                    <!-- PHP Artikler -->
                    <?php include "fetchDb.php"; ?>
                </section>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Only offensive images.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I'm under 13 years old </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="row">
            <footer class="col-md-12">&copy Marcus Riger 2017 </footer>
        </div>
    </div>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>