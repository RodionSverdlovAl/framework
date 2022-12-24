function addNewTextInput(){
    let baseTextInput = document.getElementById('multiple-text-input-item');
    let newInput = document.createElement('input');
    for(let attr of baseTextInput.attributes){
        newInput.setAttribute(attr.name, attr.value);
    }
    document.getElementById('multiple-text-form').appendChild(newInput);
}