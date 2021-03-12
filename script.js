function show(cl){
   var els = document.getElementsByClassName(cl);
   for(var i=0; i<els.length; ++i){
      var s = els[i].style;
      s.display = 'block';
   };
}
function hide(cl){
   var els = document.getElementsByClassName(cl);
   for(var i=0; i<els.length; ++i){
      var s = els[i].style;
      s.display = 'none';
   };
}