(function() {
  links = document.querySelectorAll('a');
  host = location.protocol + '//' + location.host
  links.forEach(function (link) {
    if(link.href.search(host) == -1) {
      link.target = '_blank';
    }
  });
})();