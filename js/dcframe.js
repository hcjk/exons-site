var iframe = document.getElementById('dcframe');

iframe.onerror = function() {
    iframe.parentNode.removeChild(iframe);
};