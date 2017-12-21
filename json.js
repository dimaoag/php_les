$(function () {
   $('input[type=submit]').on('click', function (e) {
       e.preventDefault(); //предотвращаем обычное поведение элемента

       var json = {
           name: $('input[name=name]').valueOf(),
           surname: $('input[name=surname]').valueOf()
       };

       //отправляем асинхроный POST запрос по адресу в action формы
       $.ajax ({
           url: $('form').prop('action'),
           method: 'POST',
           data: 'json=' + JSON.stringify(json)
       })

       .done(function (msg) {
            $('#answer').html(msg);
       });
   });
});