const btn_add = document.getElementById("btn_add");
const modal = document.getElementById("modal");



function add() {
    modal.style.display = "flex";
}

function exit() {
    modal.style.display = "none";
}



btn_add.onclick = add;

window.onclick = function(e) {
    if (e.target === modal) {
        exit();
    }
}


function addBlock() {
    var textInput = document.getElementById('name_add');
    var textValue = textInput.value.trim();
    var xhr = new XMLHttpRequest();

    if (textValue !== '') {
        var newBlock = document.createElement('li');
        newBlock.className = 'nl';

        var link = document.createElement('a');
        link.className = 'link_pl';
        link.href = '#';

        var div = document.createElement('div');
        div.className = 'ab';
        div.textContent = textValue;

        link.appendChild(div);
        newBlock.appendChild(link);

        // Добавляем блок в основной контейнер
        document.getElementById('list_ul').appendChild(newBlock);

        // Сохраняем только добавленный блок на сервере
        saveAddedBlockOnServer(newBlock.outerHTML);

        // Очищаем поле ввода после добавления блока
        textInput.value = '';
    }
}

function saveAddedBlockOnServer(addedBlockContent) {
    // Отправляем данные на сервер при помощи AJAX-запроса
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_state.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Отправляем текущее состояние блоков
    xhr.send('addedBlockContent=' + encodeURIComponent(addedBlockContent));
}