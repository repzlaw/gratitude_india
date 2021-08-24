
$('#create-exam-form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
        method: 'POST',
        url: '/save-exam',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{question: $('#question').val(), category: $('#category').val(), option_1: $('#option_1').val(), option_2: $('#option_2').val(),
                option_3: $('#option_3').val(), option_4: $('#option_4').val(),
                "_token": $('#token').val()
        }

    })
    .done(function(msg){
        if (msg) {
            alert('saved successfully')
        }else{
            alert('not saved ')
        }
    });
});

$('#update-exam-form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
        method: 'POST',
        url: '/save-updated-exam',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{question: $('#question').val(), category: $('#category').val(), option_1: $('#option_1').val(), option_2: $('#option_2').val(),
                option_3: $('#option_3').val(), option_4: $('#option_4').val(), id: $('#id').val(),
                "_token": $('#token').val()
        }

    })
    .done(function(msg){
        if (msg) {
            alert('saved successfully')
        }else{
            alert('not saved ')
        }
    });
});

//delete question
function deleteQuestion(question_id){
    $.ajax({
        method:'GET',
        url: '/delete-exam',
        data:{ question_id:question_id}
    })
    .done(function(msg){
        if (msg) {
            alert('deleted successfully')
        }else{
            alert('not deleted ')
        }
    });
}