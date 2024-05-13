var iframe = document.getElementById('discordFrame');

iframe.onerror = function() {
    iframe.parentNode.removeChild(iframe);
};