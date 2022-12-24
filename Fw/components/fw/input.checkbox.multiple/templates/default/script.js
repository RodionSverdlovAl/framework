function addNewCheckBoxInput(){
    let baseTextInput = document.getElementById('multiple-checkbox-input-item');
    let newInput = document.createElement('input');
    for(let attr of baseTextInput.attributes){
        newInput.setAttribute(attr.name, attr.value);
    }
    document.getElementById('multiple-checkbox-form').appendChild(newInput);
}