{
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var cloaseb = document.getElementsByClassName("close")[0];
    
    
    btn.onclick = function() {
      modal.style.display = "block";
      document.body.style.overflow = 'hidden';
    
    }
    
    cloaseb.onclick = function() {
      modal.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
    }
    
    {
    var modal1 = document.getElementById("myModal1");
    var btn1 = document.getElementById("myBtn1");
    var span = document.getElementsByClassName("close1")[0];
    
    
    btn1.onclick = function() {
      modal1.style.display = "block";
      document.body.style.overflow = 'hidden';
    }
    
    span.onclick = function() {
      modal1.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
    
    }
    
    {
    var modal2 = document.getElementById("myModal2");
    var btn2 = document.getElementById("myBtn2");
    var span = document.getElementsByClassName("close2")[0];
    
    
    btn2.onclick = function() {
      modal2.style.display = "block";
      document.body.style.overflow = 'hidden';
    
    }
    
    span.onclick = function() {
      modal2.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
    
    }
    