const keyword = document.querySelector('#key-search');
const search_btn = document.querySelector('#btn-search');
const table_contaier = document.querySelector('.container-table');

keyword.addEventListener('input', () =>{
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = () =>{
        if (xhr.readyState == 4 && xhr.status == 200) {
            table_contaier.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'config/livesearch.php?keyword=' + keyword.value, true);
    xhr.send();
});
