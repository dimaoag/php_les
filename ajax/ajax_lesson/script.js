

function funcBefore (){
     $('.loader').show();
}

function funcSuccess (data){
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