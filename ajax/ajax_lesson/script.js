function funcBefore() {
    $('.loader').show();
}

function funcSuccess(data) {
    $('.loader').hide();
    $('#information').text(data);
}

$(document).ready(function () {
    $('#load').bind('click', function () {
        var admin = 'admin';
        $.ajax({
            url: 'content.php',
            type: 'post',
            data: ({
                name: admin,
                number: 5
            }),
            dataType: 'html',
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });
});


function checkLogin(data) {
    $('.loader').hide();
    if (data == "fail")
        alert('Login is reserved!!!');
    else
        $('#information').text(data);


}

$(document).ready(function () {
    $('#button').bind('click', function () {
        var login = $('#login').val();
        $.ajax({
            url: 'login.php',
            type: 'post',
            data: ({login: login}),
            dataType: 'html',
            beforeSend: funcBefore,
            success: checkLogin
        });
    });
});


$(document).ready(function () {
    $('select[name="country"]').bind("change", function () {
        $('select[name="city"]').empty();
        var country = $('select[name="country"]').val();
        $.post(
            'countryCheck.php',
            {country: country},
            function (data) {
                data = JSON.parse(data);
                for (var key in data) {
                    $('select[name="city"]').append($("<option value='" + key + "'>" + data[key] + "</option>"));
                }
            });
    });
});