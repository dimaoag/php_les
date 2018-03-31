<?php
require_once 'countryCheck.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <button class="btn btn-primary" id="load">Download data</button>
    </div>
    <br><br>
    <div class="row">
        <div class="loader"></div>
        <div id="information"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-4">
            <form>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" aria-describedby="nameHelp"
                           placeholder="Enter login">
                    <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <button type="button" id="button" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-12">
            <h1>Format JSON</h1>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="sel1">Select country:</label>
                <select class="form-control" id="sel1" name="country">
                    <option value="0" selected="selected"></option>
                    <?php foreach ($countries as $key => $value): ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
                    <?php endforeach; ?>
<!--                    <option value="1">American</option>-->
<!--                    <option value="2">France</option>-->
<!--                    <option value="3">Germany</option>-->
<!--                    <option value="4">England</option>-->
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="sel2">Select city:</label>
                <select class="form-control" id="sel2" name="city">
                    <option value="0" selected="selected"></option>
                    <option value="1">New York</option>
                    <option value="2">Paris</option>
                    <option value="3">Berlin</option>
                    <option value="4">London</option>
                </select>
            </div>
        </div>
        <div class="result"></div>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>