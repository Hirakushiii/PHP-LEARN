$(document).ready(()=>{
    $('#key-search').on('input', ()=>{
        $('.load').show();
        // JQuery LOAD FUNCTION
        // $('.container-table').load('config/livesearch.php?keyword=' + $('#key-search').val());

        // JQuery GET FUNCTION
        $.get('config/livesearch.php?keyword=' + $('#key-search').val(), function(data){
            $('.container-table').html(data);
            $('.load').hide();
        });
    })
})