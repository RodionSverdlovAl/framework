function addNewSelectInput() {
    let baseSelectInput = document.getElementById('multiple-select-input-item');
    let cloneNode = baseSelectInput.cloneNode(true);
    document.getElementById('multiple-select-form').appendChild(cloneNode);
}