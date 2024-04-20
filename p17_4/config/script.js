$(document).ready(()=>{
    $('#key-search').on('input', ()=>{
        $('.load').show();
        // JQuery GET FUNCTION
        $.get('config/livesearch.php?keyword=' + $('#key-search').val(), function(data){
            $('.container-table').html(data);
            $('.load').hide();
        });
    })
})
// FUCNTION CETAK TABLE
$('.btn-print').on('click', ()=>{
    printTable();
})
function printTable() {
    window.addEventListener('beforeprint', () => {
        const targetElement = document.getElementById('.container-table');
        targetElement.classList.replace('container mt-3 container-table', 'container-fluid mt-3 container-table');
        // Jalankan fungsi pencetakan default
    });
    window.print();
}
