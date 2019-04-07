<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Projecting Web-App</title>
</head>

<body>
    <div class="container">
        <form action="register_process.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="e.g. John Baker">
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="e.g. johnbaker@email.com">
                </div>
                <div class="form-group col-6">
                    <label for="cf_email">Confirm email</label>
                    <input name="cf_email" type="email" class="form-control" id="cf_email" placeholder="e.g. johnbaker@email.com">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group col-6">
                    <label for="password">Confirm password</label>
                    <input name="cf_password" type="password" class="form-control" id="cf_password" placeholder="Password">
                </div>
            </div>
            <button id="registerbtn" class="btn btn-primary" type="submit">Register</button>
        </form>
    </div>

    <script>
        $( '.form-control' ) . on( 'keyup', function () {
            var pass1 = $( '#password' ) . val();
            var pass2 = $( '#cf_password' ) . val();

            var email1 = $( '#password' ) . val();
            var email2 = $( '#cf_email' ) . val();

            if ( pass1 != pass2 && email1 != email2 ) {
                console . log( 'Correct' );
                $( '#registerbtn' ) . attr( "disabled", false );
            } else {
                console.log('False');
            }
        } );;
    </script>
</body>
</html>