$(document).ready(()=>{
    $('#key-search').on('input', ()=>{
        $('.container-table').load('config/livesearch.php?keyword=' + $('#key-search').val());
    })
})