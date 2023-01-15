function update(element, link) {
    const value = element.value;
    const invalidMessage = document.getElementById('invalidMessage');
    const submit = document.getElementById('submit');
    const hasError = (value === link);
    submit.disabled = hasError;
    element.style.color = hasError ? 'red' : 'black';
    invalidMessage.style.visibility = hasError ? 'visible' : 'hidden';
}
